<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KepegawaianImport;
use App\Exports\KepegawaianExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KepegawaianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_kepegawaian')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kepegawaian/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KepegawaianImport, request()->file('filenya'));
        }
        return redirect('/data-kepegawaian')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kepegawaian/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_kepegawaian.xlsx";   
        return Excel::download(new KepegawaianExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_kepegawaian')->where('tahun',$request->tahun)->delete();
        return redirect('/data-kepegawaian')->with('status', 'Data Berhasil Dihapus');
    }
}
