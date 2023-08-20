<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KaledupaImport;
use App\Exports\KaledupaExport;
use App\models\backend\RangkingModel;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KaledupaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_kaledupa')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kaledupa/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KaledupaImport, request()->file('filenya'));
        }
        return redirect('/data-kaledupa')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/kaledupa/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_kaledupa.xlsx";   
        return Excel::download(new KaledupaExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        if($request->tahun!=''){
        DB::table('data_kaledupa')->where('tahun',$request->tahun)->delete();
        $tahunnya = $request->tahun;
        $jumlahdata = DB::table('input_kaledupa')->count();
        $jumlahdiisi = DB::table('data_kaledupa')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
        $namafile = 'Data Kec. Kaledupa';
        $pj = 'Admin Kec. Kaledupa';
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
        return redirect('/data-kaledupa')->with('status', 'Data Berhasil Dihapus');
    }
}
