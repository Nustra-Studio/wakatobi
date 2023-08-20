<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\TomiatimurImport;
use App\Exports\TomiatimurExport;
use App\models\backend\RangkingModel;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class TomiatimurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_tomiatimur')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/tomiatimur/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new TomiatimurImport, request()->file('filenya'));
        }
        return redirect('/data-tomiatimur')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/tomiatimur/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_tomia_timur.xlsx";   
        return Excel::download(new TomiatimurExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        if($request->tahun!=''){
        DB::table('data_tomiatimur')->where('tahun',$request->tahun)->delete();
        $tahunnya = $request->tahun;
        $jumlahdata = DB::table('input_tomiatimur')->count();
        $jumlahdiisi = DB::table('data_tomiatimur')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
        $namafile = 'Data Kec. Tomia Timur';
        $pj = 'Admin Kec. Tomia Timur';
        $data = RangkingModel::firstOrNew(['nama_file' => $namafile,'tahun'=>$tahunnya]);
        $data->nama_file = $namafile;
        $data->total = $jumlahdata;
        $data->presentase = floor(($jumlahdiisi/$jumlahdata)*100);
        $data->diisi = $jumlahdiisi;
        $data->tahun = $tahunnya;
        $data->tanggal = date('Y-m-d');
        $data->pj=$pj;
        $data->save();
        }
        
        return redirect('/data-tomiatimur')->with('status', 'Data Berhasil Dihapus');
    }
}
