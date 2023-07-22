<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KoperasiImport;
use App\Exports\KoperasiExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KoperasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_koperasi')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/koperasi/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KoperasiImport, request()->file('filenya'));
        }
        return redirect('/data-koperasi')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/koperasi/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_koperasi.xlsx";   
        return Excel::download(new KoperasiExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_koperasi')->where('tahun',$request->tahun)->delete();
        return redirect('/data-koperasi')->with('status', 'Data Berhasil Dihapus');
    }
}
