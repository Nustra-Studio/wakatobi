<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PerumahanRakyatImport;
use App\Exports\PerumahanRakyatExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PerumahanRakyatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_perumahan_rakyat')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perumahanrakyat/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PerumahanRakyatImport, request()->file('filenya'));
        }
        return redirect('/perumahan-rakyat')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perumahanrakyat/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_perumahan_rakyat.xlsx";   
        return Excel::download(new PerumahanRakyatExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_perumahan_rakyat')->where('tahun',$request->tahun)->delete();
        return redirect('/perumahan-rakyat')->with('status', 'Data Berhasil Dihapus');
    }
}
