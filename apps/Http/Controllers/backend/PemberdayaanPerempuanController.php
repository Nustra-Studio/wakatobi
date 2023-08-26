<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PemberdayaanPerempuanImport;
use App\Exports\PemberdayaanPerempuanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PemberdayaanPerempuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pemberdayaan_perempuan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pemberdayaanperempuan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PemberdayaanPerempuanImport, request()->file('filenya'));
        }
        return redirect('/pemberdayaan-perempuan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/pemberdayaanperempuan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pemberdayaan_perempuan_dan_perlindungan_anak.xlsx";   
        return Excel::download(new PemberdayaanPerempuanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pemberdayaan_perempuan')->where('tahun',$request->tahun)->delete();
        return redirect('/pemberdayaan-perempuan')->with('status', 'Data Berhasil Dihapus');
    }
}
