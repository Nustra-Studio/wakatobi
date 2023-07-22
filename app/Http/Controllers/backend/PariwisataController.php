<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PariwisataImport;
use App\Exports\PariwisataExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PariwisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pariwisata')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pariwisata/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PariwisataImport(), request()->file('filenya'));
        }
        return redirect('pariwisata')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pariwisata/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pariwisata.xlsx";   
        return Excel::download(new PariwisataExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pariwisata')->where('tahun',$request->tahun)->delete();
        return redirect('pariwisata')->with('status', 'Data Berhasil Dihapus');
    }
}
