<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KesehatanImport;
use App\Exports\KesehatanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KesehatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_kesehatan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kesehatan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KesehatanImport, request()->file('filenya'));
        }
        return redirect('/kesehatan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/kesehatan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_kesehatan.xlsx";   
        return Excel::download(new KesehatanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_kesehatan')->where('tahun',$request->tahun)->delete();
        return redirect('/kesehatan')->with('status', 'Data Berhasil Dihapus');
    }
}
