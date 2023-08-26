<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HalamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('halaman')->orderby('id','desc')->get();
        return view('backend.halaman.index',['data'=>$data]);
    }

    //=================================================================
    public function create()
    {
        //
    }

    //=================================================================
    public function store(Request $request)
    {
        DB::table('halaman')
        ->insert([
            'nama'=>$request->nama,
            'slug'=>strtolower(str_replace(' ','-',$request->nama)),
            'bentuk'=>$request->bentuk,
        ]);
        return redirect('halaman')->with('status','Sukses menyimpan data');
    }

    //=================================================================
    public function show($id)
    {
        //
    }

    //=================================================================
    public function edit($id)
    {
        //
    }

    //=================================================================
    public function update(Request $request, $id)
    {
        DB::table('halaman')
        ->where('id',$id)
        ->update([
            'nama'=>$request->nama,
            'slug'=>strtolower(str_replace(' ','-',$request->nama)),
            'bentuk'=>$request->bentuk,
        ]);
        return redirect('halaman')->with('status','Sukses memperbarui data');
    }

    //=================================================================
    public function destroy($id)
    {
        DB::table('halaman')
        ->where('id',$id)
        ->delete();
        return redirect('halaman')->with('status','Sukses menghapus data');
    }
}