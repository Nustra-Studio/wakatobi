<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\LingkunganHidupImport;
use App\Exports\LingkunganHidupExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class LingkunganHidupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_lingkungan_hidup')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/lingkunganhidup/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new LingkunganHidupImport(), request()->file('filenya'));
        }
        return redirect('lingkungan-hidup')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/lingkunganhidup/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_lingkungan_hidup.xlsx";   
        return Excel::download(new LingkunganHidupExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_lingkungan_hidup')->where('tahun',$request->tahun)->delete();
        return redirect('lingkungan-hidup')->with('status', 'Data Berhasil Dihapus');
    }
}
