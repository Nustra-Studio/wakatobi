<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\TenagaKerjaImport;
use App\Exports\TenagaKerjaExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class TenagaKerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_tenagakerja')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/tenagakerja/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new TenagaKerjaImport, request()->file('filenya'));
        }
        return redirect('/tenaga-kerja')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/tenagakerja/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_tenaga_kerja.xlsx";   
        return Excel::download(new TenagaKerjaExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_tenagakerja')->where('tahun',$request->tahun)->delete();
        return redirect('/tenaga-kerja')->with('status', 'Data Berhasil Dihapus');
    }
}
