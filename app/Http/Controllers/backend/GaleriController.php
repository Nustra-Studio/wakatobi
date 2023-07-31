<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\GaleriModel;
use Image;
use File;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================

    public function index()
    {
        $data = GaleriModel::orderby('id','desc')->get();
        return view('backend/galeri/index',['data'=>$data]);
    }

    //=================================================================
    public function create()
    {
        //
    }

    //=================================================================
    public function store(Request $request)
    {
        if($request->hasFile('gambar')) {
            
            $image = $request->file('gambar');
            $input['imagename'] = time().'-'.$image->getClientOriginalName();
         
            //$destinationPath = public_path('images/galeri/thumbnail');
            $destinationPath = public_path('../images/galeri/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(150,null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);

            //$destinationPath = public_path('images/galeri');
            $destinationPath = public_path('../wakatobi/images/galeri');
            $image->move($destinationPath, $input['imagename']);
            GaleriModel::insert([
                'judul'=>$request->judul,
                'gambar'=>$input['imagename'],
                'created_at'=>date('Y-m-d H:i:s'),
            ]);
        }
        
        return redirect('galeri')->with('status','Sukses menyimpan data');
    }

    //=================================================================
    public function show($id)
    {
        $data = GaleriModel::where('id',$id)->first();
        return view('backend/galeri/edit',['data'=>$data]);
    }

    //=================================================================
    public function edit($id)
    {
        //
    }

    //=================================================================
    public function update(Request $request, $id)
    {
        if($request->hasFile('gambar')) {
            $data = GaleriModel::where('id',$id)->first();
            if($data->gambar != ''){
                File::delete('images/galeri/'.$data->gambar);
                File::delete('images/galeri/thumbnail/'.$data->gambar);
            }
            $image = $request->file('gambar');
            $input['imagename'] = time().'-'.$image->getClientOriginalName();
            //$destinationPath = public_path('images/galeri/thumbnail');
            $destinationPath = public_path('../images/galeri/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(150,null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);

            //$destinationPath = public_path('images/galeri');
            $destinationPath = public_path('../images/galeri');
            $image->move($destinationPath, $input['imagename']);

            GaleriModel::where('id',$id)
            ->update([
                'judul'=>$request->judul,
                'gambar'=>$input['imagename'],
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }else{
            GaleriModel::where('id',$id)
            ->update([
                'judul'=>$request->judul,
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
            
        }
        return redirect('galeri')->with('status','Sukses memperbarui data');
    }

    //=================================================================
    public function destroy($id)
    {
        $data = GaleriModel::where('id',$id)->first();
            if($data->gambar != ''){
                File::delete('images/galeri/'.$data->gambar);
                File::delete('images/galeri/thumbnail/'.$data->gambar);
            }
        GaleriModel::where('id',$id)->delete();
        return redirect('galeri')->with('status','Sukses menghapus data');
    }
}
