<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PerencanaanPembangunanImport;
use App\Exports\PerencanaanPembangunanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PerencanaanPembangunanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_perencanaan_pembangunan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perencanaanpembangunan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PerencanaanPembangunanImport, request()->file('filenya'));
        }
        return redirect('/perencanaan-pembangunan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perencanaanpembangunan/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_perencanaan_pembangunan.xlsx";   
        return Excel::download(new PerencanaanPembangunanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_perencanaan_pembangunan')->where('tahun',$request->tahun)->delete();
        return redirect('/perencanaan-pembangunan')->with('status', 'Data Berhasil Dihapus');
    }
}
