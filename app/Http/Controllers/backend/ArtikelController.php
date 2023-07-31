<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\ArtikelModel;
use App\models\backend\KategoriartikelModel;
use DB;
use Auth;
use File;
use Image;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = ArtikelModel::select(DB::raw('artikel.*,users.name,kategori_artikel.nama as namakategori'))
        ->leftjoin('users','users.id','=','artikel.pembuat')
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->orderby('artikel.id','desc')
        ->get();
        return view('backend.artikel.index',['data'=>$data]);
    }

    //=================================================================
    public function create()
    {
        $kategori = KategoriartikelModel::where('status','Aktif')->orderby('id','desc')->get();
        return view('backend.artikel.create',['kategori'=>$kategori]); 
    }

    //=================================================================
    public function store(Request $request)
    {
        if($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $input['imagename'] = time().'-'.$image->getClientOriginalName();
         
            $destinationPath = public_path('images/artikel/thumbnails');
            // $destinationPath = base_path('../wakatobi/images/artikel/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(150,null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);

            $destinationPath = public_path('images/artikel');
            $image->move($destinationPath, $input['imagename']);
       
        }
        ArtikelModel::insert([
            'id_kategori'=>$request->kategori,
            'judul'=>$request->judul,
            'slug'=>strtolower(str_replace(' ','-',$request->judul)),
            'isi'=>$request->isi,
            'pembuat'=>Auth::user()->id,
            'gambar'=>$input['imagename'],
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        return redirect('artikel')->with('status','Sukses menyimpan data');
    }
    
    //=================================================================
    public function edit($id)
    {
        $data = ArtikelModel::where('id',$id)->first();
        $kategori = KategoriartikelModel::where('status','Aktif')->orderby('id','desc')->get();
        return view('backend.artikel.edit',['data'=>$data,'kategori'=>$kategori]);
    }

    //=================================================================
    public function update(Request $request, $id)
    {
        if($request->hasFile('gambar')) {
            $data = ArtikelModel::where('id',$id)->first();
            if($data->gambar != ''){
                File::delete('images/artikel/'.$data->gambar);
                File::delete('images/artikel/thumbnail/'.$data->gambar);
            }
            
            $image = $request->file('gambar');
            $input['imagename'] = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path('images/artikel/thumbnail');
            // $destinationPath = base_path('../wakatobi/images/artikel/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(150,null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
            $destinationPath = public_path('images/artikel');
            $image->move($destinationPath, $input['imagename']);
            
            ArtikelModel::where('id',$id)
            ->update([
                'id_kategori'=>$request->kategori,
                'judul'=>$request->judul,
                'slug'=>strtolower(str_replace(' ','-',$request->judul)),
                'isi'=>$request->isi,
                'pembuat'=>Auth::user()->id,
                'gambar'=>$input['imagename'],
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);

        }else{
            ArtikelModel::where('id',$id)
            ->update([
            'id_kategori'=>$request->kategori,
            'judul'=>$request->judul,
            'slug'=>strtolower(str_replace(' ','-',$request->judul)),
            'isi'=>$request->isi,
            'pembuat'=>Auth::user()->id,
            'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
        return redirect('artikel')->with('status','Sukses memperbarui data');
    }

    //=================================================================
    public function destroy($id)
    {
        $data = ArtikelModel::where('id',$id)->first();
            if($data->gambar != ''){
                File::delete('images/artikel/'.$data->gambar);
                File::delete('images/artikel/thumbnail/'.$data->gambar);
            }
            ArtikelModel::where('id',$id)->delete();
        return redirect('artikel')->with('status','Sukses memperbarui data');
    }
}


