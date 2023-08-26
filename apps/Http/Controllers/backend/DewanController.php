<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\DewanImport;
use App\Exports\DewanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class DewanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_sekertariat_dewan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/dewan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new DewanImport, request()->file('filenya'));
        }
        return redirect('/sekertariat-dewan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/dewan/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_sekertariat_dewan.xlsx";   
        return Excel::download(new DewanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_sekertariat_dewan')->where('tahun',$request->tahun)->delete();
        return redirect('/sekertariat-dewan')->with('status', 'Data Berhasil Dihapus');
    }
}
