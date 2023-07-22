<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PerindustrianImport;
use App\Exports\PerindustrianExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PerindustrianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_perindustrian')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perindustrian/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PerindustrianImport, request()->file('filenya'));
        }
        return redirect('/perindustrian')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perindustrian/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_perindustrian.xlsx";   
        return Excel::download(new PerindustrianExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_perindustrian')->where('tahun',$request->tahun)->delete();
        return redirect('/perindustrian')->with('status', 'Data Berhasil Dihapus');
    }
}
