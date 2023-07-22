<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PerikananImport;
use App\Exports\PerikananExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PerikananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_perikanan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perikanan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PerikananImport, request()->file('filenya'));
        }
        return redirect('/perikanan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perikanan/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_perikanan.xlsx";   
        return Excel::download(new PerikananExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_perikanan')->where('tahun',$request->tahun)->delete();
        return redirect('/perikanan')->with('status', 'Data Berhasil Dihapus');
    }
}
