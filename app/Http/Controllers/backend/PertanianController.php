<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PertanianImport;
use App\Exports\PertanianExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PertanianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pertanian')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pertanian/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PertanianImport(), request()->file('filenya'));
        }
        return redirect('pertanian')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pertanian/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pertanian.xlsx";   
        return Excel::download(new PertanianExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pertanian')->where('tahun',$request->tahun)->delete();
        return redirect('pertanian')->with('status', 'Data Berhasil Dihapus');
    }
}
