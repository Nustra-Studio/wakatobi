<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\KategoriberitaModel;
use DB;
use Auth;

class KategoriberitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = KategoriberitaModel::select(DB::raw('kategori_berita.*'))->get();

        return view('backend.kategoriberita.index' , ['data'=>$data] );
    }

    public function store(Request $request)
    {
        KategoriberitaModel::insert([
            'nama'=>$request->nama,
            'slug'=>strtolower(str_replace(' ','-',$request->nama)),
            'status'=>$request->status,
        ]);
        return redirect('kategori-berita')->with('status','Sukses menyimpan data');
    }

    public function update(Request $request, $id)
    {
        KategoriberitaModel::where('id',$id)
        ->update([
            'nama'=>$request->nama,
            'slug'=>strtolower(str_replace(' ','-',$request->nama)),
            'status'=>$request->status,
        ]);
        return redirect('kategori-berita')->with('status','Sukses merubah data');
    }

    public function destroy($id)
    {
        KategoriberitaModel::where('id',$id)->delete();
        return redirect('kategori-berita')->with('status','Sukses menghapus data');
    }

}
