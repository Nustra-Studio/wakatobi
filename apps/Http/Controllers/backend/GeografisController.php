<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\GeografisImport;
use App\Exports\GeografisExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class GeografisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/geografis/index',['data'=>$data]);
    }

    //=================================================================
    public function create()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/geografis/create',['datainput'=>$datainput]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new GeografisImport, request()->file('filenya'));
        }
        return redirect('/data-geografis')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/geografis/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_geografis.xlsx";   
        return Excel::download(new GeografisExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_geografis')->where('tahun',$request->tahun)->delete();
        return redirect('/data-geografis')->with('status', 'Data Berhasil Dihapus');
    }
}
