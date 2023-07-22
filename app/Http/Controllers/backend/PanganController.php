<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PanganImport;
use App\Exports\PanganExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pangan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pangan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PanganImport(), request()->file('filenya'));
        }
        return redirect('pangan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/pangan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pangan.xlsx";   
        return Excel::download(new PanganExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pangan')->where('tahun',$request->tahun)->delete();
        return redirect('pangan')->with('status', 'Data Berhasil Dihapus');
    }
}
