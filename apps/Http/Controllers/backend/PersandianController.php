<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PersandianImport;
use App\Exports\PersandianExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PersandianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_persandian')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/persandian/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PersandianImport, request()->file('filenya'));
        }
        return redirect('/data-persandian')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/persandian/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_persandian.xlsx";   
        return Excel::download(new PersandianExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_persandian')->where('tahun',$request->tahun)->delete();
        return redirect('/data-persandian')->with('status', 'Data Berhasil Dihapus');
    }
}
