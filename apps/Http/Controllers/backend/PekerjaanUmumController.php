<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PekerjaanUmumImport;
use App\Exports\PekerjaanUmumExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PekerjaanUmumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pekerjaan_umum')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pekerjaanumum/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PekerjaanUmumImport, request()->file('filenya'));
        }
        return redirect('/pekerjaan-umum')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/pekerjaanumum/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pekerjaan_umum.xlsx";   
        return Excel::download(new PekerjaanUmumExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pekerjaan_umum')->where('tahun',$request->tahun)->delete();
        return redirect('/pekerjaan-umum')->with('status', 'Data Berhasil Dihapus');
    }
}
