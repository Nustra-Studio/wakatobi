<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\OlahragaImport;
use App\Exports\OlahragaExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class OlahragaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_olahraga')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/olahraga/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new OlahragaImport, request()->file('filenya'));
        }
        return redirect('/data-olahraga')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/olahraga/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_olahraga.xlsx";   
        return Excel::download(new OlahragaExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_olahraga')->where('tahun',$request->tahun)->delete();
        return redirect('/data-olahraga')->with('status', 'Data Berhasil Dihapus');
    }
}
