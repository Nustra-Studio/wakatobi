<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SubmenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $datamenu = DB::table('menu')->orderby('id','desc')->get();
        $datahalaman = DB::table('halaman')->orderby('id','desc')->get();
        $datasubmenu = DB::table('submenu')
        ->select(DB::raw("submenu.*,halaman.nama as namahalaman, menu.nama as namamenu"))
        ->leftjoin('halaman','halaman.id','=','submenu.id_halaman')
        ->leftjoin('menu','menu.id','=','submenu.id_menu')
        ->orderby('submenu.id','desc')->get();
        return view('backend.submenu.index',['data'=>$datasubmenu,'menu'=>$datamenu,'halaman'=>$datahalaman]);
    }

    //=================================================================
    public function create()
    {
        //
    }

    //=================================================================
    public function store(Request $request)
    {
        DB::table('submenu')
        ->insert([
            'nama'=>$request->nama,
            'slug'=>strtolower(str_replace(' ','-',$request->nama)),
            'id_menu'=>$request->menu,
            'id_halaman'=>$request->halaman,
            'status'=>$request->status,
        ]);
        return redirect('submenu')->with('status','Sukses menyimpan data');
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
        DB::table('submenu')
        ->where('id',$id)
        ->update([
            'nama'=>$request->nama,
            'slug'=>strtolower(str_replace(' ','-',$request->nama)),
            'id_menu'=>$request->menu,
            'id_halaman'=>$request->halaman,
            'status'=>$request->status,
        ]);
        return redirect('submenu')->with('status','Sukses memperbarui data');
    }

    //=================================================================
    public function destroy($id)
    {
        DB::table('submenu')->where('id',$id)->delete();
        return redirect('submenu')->with('status','Sukses menghapus data');
    }
}
