<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $datamenu = DB::table('menu')
        ->select(DB::raw('menu.*,halaman.nama as namahalaman'))
        ->leftjoin('halaman','halaman.id','=','menu.halaman_id')
        ->orderby('menu.id','desc')
        ->get();

        $datahalaman = DB::table('halaman')->orderby('id','desc')->get();
        return view('backend.menu.index',['halaman'=>$datahalaman,'data'=>$datamenu]);
    }

    //=================================================================
    public function store(Request $request)
    {
        if($request->halaman=='Parent'){
            DB::table('menu')
            ->insert([
                'nama'=>$request->nama,
                'status'=>$request->status,
            ]);
        }else{
            DB::table('menu')
            ->insert([
                'nama'=>$request->nama,
                'status'=>$request->status,
                'halaman_id'=>$request->halaman,
            ]);
        }
        return redirect('menu')->with('status','Sukses menyimpan data');
    }

    //=================================================================
    public function update(Request $request, $id)
    {
        if($request->halaman=='Parent'){
            DB::table('menu')
            ->where('id',$id)
            ->update([
                'nama'=>$request->nama,
                'status'=>$request->status,
            ]);
        }else{
            DB::table('menu')
            ->where('id',$id)
            ->update([
                'nama'=>$request->nama,
                'status'=>$request->status,
                'halaman_id'=>$request->halaman,
            ]);
        }
        return redirect('menu')->with('status','Sukses memperbarui data');
    }

    //=================================================================
    public function destroy($id)
    {
        DB::table('menu')
        ->where('id',$id)
        ->delete();
        return redirect('menu')->with('status','Sukses menghapus data');
    }
}