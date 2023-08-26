<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KebudayaanImport;
use App\Exports\KebudayaanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KebudayaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_kebudayaan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kebudayaan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KebudayaanImport, request()->file('filenya'));
        }
        return redirect('/data-kebudayaan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/kebudayaan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_kebudayaan.xlsx";   
        return Excel::download(new KebudayaanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_kebudayaan')->where('tahun',$request->tahun)->delete();
        return redirect('/data-kebudayaan')->with('status', 'Data Berhasil Dihapus');
    }
}
