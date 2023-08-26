<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KeuanganImport;
use App\Exports\KeuanganExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KeuanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_keuangan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/keuangan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KeuanganImport, request()->file('filenya'));
        }
        return redirect('/data-keuangan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/keuangan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_keuangan.xlsx";   
        return Excel::download(new KeuanganExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_keuangan')->where('tahun',$request->tahun)->delete();
        return redirect('/data-keuangan')->with('status', 'Data Berhasil Dihapus');
    }
}
