<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PertanahanImport;
use App\Exports\PertanahanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PertanahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pertanahan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pertanahan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PertanahanImport(), request()->file('filenya'));
        }
        return redirect('pertanahan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/pertanahan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pertanahan.xlsx";   
        return Excel::download(new PertanahanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pertanahan')->where('tahun',$request->tahun)->delete();
        return redirect('pertanahan')->with('status', 'Data Berhasil Dihapus');
    }
}
