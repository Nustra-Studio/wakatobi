<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KominfoImport;
use App\Exports\KominfoExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KominfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_kominfo')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kominfo/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KominfoImport, request()->file('filenya'));
        }
        return redirect('/data-kominfo')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/kominfo/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_kominfo.xlsx";   
        return Excel::download(new KominfoExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_kominfo')->where('tahun',$request->tahun)->delete();
        return redirect('/data-kominfo')->with('status', 'Data Berhasil Dihapus');
    }
}
