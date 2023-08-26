<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KehutananImport;
use App\Exports\KehutananExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KehutananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_kehutanan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kehutanan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KehutananImport(), request()->file('filenya'));
        }
        return redirect('kehutanan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kehutanan/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_kehutanan.xlsx";   
        return Excel::download(new KehutananExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_kehutanan')->where('tahun',$request->tahun)->delete();
        return redirect('kehutanan')->with('status', 'Data Berhasil Dihapus');
    }
}
