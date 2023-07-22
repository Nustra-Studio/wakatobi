<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\SosialImport;
use App\Exports\SosialExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class SosialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_sosial')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/sosial/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new SosialImport, request()->file('filenya'));
        }
        return redirect('/sosial')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/sosial/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_sosial.xlsx";   
        return Excel::download(new SosialExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_sosial')->where('tahun',$request->tahun)->delete();
        return redirect('/sosial')->with('status', 'Data Berhasil Dihapus');
    }
}
