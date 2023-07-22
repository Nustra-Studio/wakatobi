<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\KategoriartikelModel;
use DB;

class KategoriartikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = KategoriartikelModel::orderby('id','desc')->get();
        return view('backend.kategoriartikel.index',['data'=>$data]);
    }

    //=================================================================
    public function store(Request $request)
    {
        KategoriartikelModel::insert([
            'nama'=>$request->nama,
            'slug'=>strtolower(str_replace(' ','-',$request->nama)),
            'status'=>$request->status,
        ]);
        return redirect('kategori-artikel')->with('status','Sukses menyimpan data');
    }

    //=================================================================
    public function update(Request $request, $id)
    {
        KategoriartikelModel::where('id',$id)
        ->update([
            'nama'=>$request->nama,
            'slug'=>strtolower(str_replace(' ','-',$request->nama)),
            'status'=>$request->status,
        ]);
        return redirect('kategori-artikel')->with('status','Sukses merubah data');
    }

    //=================================================================
    public function destroy($id)
    {
        KategoriartikelModel::where('id',$id)->delete();
        return redirect('kategori-artikel')->with('status','Sukses menghapus data');
    }
}
