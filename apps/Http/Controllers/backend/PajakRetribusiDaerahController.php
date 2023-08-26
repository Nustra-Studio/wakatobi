<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PajakRetribusiDaerahImport;
use App\Exports\PajakRetribusiDaerahExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PajakRetribusiDaerahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pajak_retribusi_daerah')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pajakretribusidaerah/index',['data'=>$data]);
    }


    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PajakRetribusiDaerahImport, request()->file('filenya'));
        }
        return redirect('pajak-retribusi-daerah')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pajakretribusidaerah/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "pajak_retribusi_daerah.xlsx";   
        return Excel::download(new PajakRetribusiDaerahExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pajak_retribusi_daerah')->where('tahun',$request->tahun)->delete();
        return redirect('pajak-retribusi-daerah')->with('status', 'Data Berhasil Dihapus');
    }
}
