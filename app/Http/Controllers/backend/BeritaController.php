<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\BeritaModel;
use App\models\backend\KategoriberitaModel;
use DB;
use Auth;
use File;
use Image;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = BeritaModel::select(DB::raw('berita.*,kategori_berita.nama as namakat'))        
        ->leftjoin('kategori_berita','kategori_berita.id','=','berita.id_kategori')
        ->orderby('berita.id','desc')
        ->get();

        return view('backend.berita.index' , ['data'=>$data] );
    }

    public function create()
    {
        $kategori = KategoriberitaModel::where('status','Aktif')->orderby('id','desc')->get();
        return view('backend.berita.create',['kategori'=>$kategori]); 
    }

    public function store(Request $request)
    {
        if($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $input['imagename'] = time().'-'.$image->getClientOriginalName();
         
            $destinationPath = public_path('images/berita/thumbnail');
            // $destinationPath = base_path('../wakatobi/images/berita/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(150,null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);

            //$destinationPath = public_path('images/berita');
            $destinationPath = base_path('../wakatobi/images/berita');
            $image->move($destinationPath, $input['imagename']);
       
        }
        BeritaModel::insert([
            'id_kategori'=>$request->kategori,
            'judul'=>$request->judul,
            'slug'=>strtolower(str_replace(' ','-',$request->judul)),
            'isi'=>$request->isi,
            'gambar'=>$input['imagename'],
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        return redirect('berita')->with('status','Sukses menyimpan data');
    }

    public function edit($id)
    {
        $data = BeritaModel::where('id',$id)->first();
        $kategori = KategoriberitaModel::where('status','Aktif')->orderby('id','desc')->get();
        return view('backend.berita.edit',['data'=>$data,'kategori'=>$kategori]);
    }

    //=================================================================
    public function update(Request $request, $id)
    {
        if($request->hasFile('gambar')) {
            $data = BeritaModel::where('id',$id)->first();
            if($data->gambar != ''){
                File::delete('images/berita/'.$data->gambar);
                File::delete('images/berita/thumbnail/'.$data->gambar);
            }
            
            $image = $request->file('gambar');
            $input['imagename'] = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path('images/berita/thumbnail');
            // $destinationPath = base_path('../wakatobi/images/berita/thumbnail');
            $img = Image::make($image->getRealPath());
            $img->resize(150,null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);
            //$destinationPath = public_path('images/berita');
            $destinationPath = base_path('../wakatobi/images/berita');
            $image->move($destinationPath, $input['imagename']);
            
            BeritaModel::where('id',$id)
            ->update([
                'id_kategori'=>$request->kategori,
                'judul'=>$request->judul,
                'slug'=>strtolower(str_replace(' ','-',$request->judul)),
                'isi'=>$request->isi,
                'gambar'=>$input['imagename'],
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);

        }else{
            BeritaModel::where('id',$id)
            ->update([
            'id_kategori'=>$request->kategori,
            'judul'=>$request->judul,
            'slug'=>strtolower(str_replace(' ','-',$request->judul)),
            'isi'=>$request->isi,
            'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
        return redirect('berita')->with('status','Sukses memperbarui data');
    }

    //=================================================================
    public function destroy($id)
    {
        $data = BeritaModel::where('id',$id)->first();
            if($data->gambar != ''){
                File::delete('images/berita/'.$data->gambar);
                File::delete('images/berita/thumbnail/'.$data->gambar);
            }
            BeritaModel::where('id',$id)->delete();
        return redirect('berita')->with('status','Sukses memperbarui data');
    }
}
