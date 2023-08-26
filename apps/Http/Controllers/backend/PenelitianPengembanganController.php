<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PenelitianPengembanganImport;
use App\Exports\PenelitianPengembanganExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PenelitianPengembanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_penelitian_pengembangan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/penelitianpengembangan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PenelitianPengembanganImport, request()->file('filenya'));
        }
        return redirect('/data-penelitian-pengembangan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/penelitianpengembangan/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_penelian_pengembangan.xlsx";   
        return Excel::download(new PenelitianPengembanganExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_penelitian_pengembangan')->where('tahun',$request->tahun)->delete();
        return redirect('/data-penelitian-pengembangan')->with('status', 'Data Berhasil Dihapus');
    }
}
