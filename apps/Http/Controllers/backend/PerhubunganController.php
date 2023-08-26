<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PerhubunganImport;
use App\Exports\PerhubunganExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PerhubunganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_perhubungan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perhubungan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PerhubunganImport, request()->file('filenya'));
        }
        return redirect('/data-perhubungan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/perhubungan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_perhubungan.xlsx";   
        return Excel::download(new PerhubunganExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_perhubungan')->where('tahun',$request->tahun)->delete();
        return redirect('/data-perhubungan')->with('status', 'Data Berhasil Dihapus');
    }
}
