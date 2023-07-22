<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\IndikatorDataStrategisImport;
use App\Exports\IndikatorDataStrategisExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;


class IndikatorDataStrategisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_indikator_data_strategis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/indikatordatastrategis/index',['data'=>$data]);
    }


    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new IndikatorDataStrategisImport, request()->file('filenya'));
        }
        return redirect('/indikator-data-strategis')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/indikatordatastrategis/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "indikator_data_strategis.xlsx";   
        return Excel::download(new IndikatorDataStrategisExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_indikator_data_strategis')->where('tahun',$request->tahun)->delete();
        return redirect('/indikator-data-strategis')->with('status', 'Data Berhasil Dihapus');
    }
}
