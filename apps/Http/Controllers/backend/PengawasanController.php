<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PengawasanImport;
use App\Exports\PengawasanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PengawasanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pengawasan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pengawasan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PengawasanImport, request()->file('filenya'));
        }
        return redirect('/data-pengawasan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pengawasan/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pengawasan.xlsx";   
        return Excel::download(new PengawasanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pengawasan')->where('tahun',$request->tahun)->delete();
        return redirect('/data-pengawasan')->with('status', 'Data Berhasil Dihapus');
    }
}
