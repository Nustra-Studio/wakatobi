<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PengendalianPendudukImport;
use App\Exports\PengendalianPendudukExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PengendalianPendudukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pengendalian_penduduk')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pengendalianpenduduk/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PengendalianPendudukImport, request()->file('filenya'));
        }
        return redirect('/pengendalian-penduduk')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/pengendalianpenduduk/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pengendalian_penduduk.xlsx";   
        return Excel::download(new PengendalianPendudukExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pengendalian_penduduk')->where('tahun',$request->tahun)->delete();
        return redirect('/pengendalian-penduduk')->with('status', 'Data Berhasil Dihapus');
    }
}
