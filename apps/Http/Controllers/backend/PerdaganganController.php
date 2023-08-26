<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PerdaganganImport;
use App\Exports\PerdaganganExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PerdaganganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_perdagangan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perdagangan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PerdaganganImport, request()->file('filenya'));
        }
        return redirect('/perdagangan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perdagangan/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_perdagangan.xlsx";   
        return Excel::download(new PerdaganganExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_perdagangan')->where('tahun',$request->tahun)->delete();
        return redirect('/perdagangan')->with('status', 'Data Berhasil Dihapus');
    }
}
