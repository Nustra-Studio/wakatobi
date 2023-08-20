<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\TomiaImport;
use App\Exports\TomiaExport;
use App\models\backend\RangkingModel;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class TomiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_tomia')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/tomia/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new TomiaImport, request()->file('filenya'));
        }
        return redirect('/data-tomia')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/tomia/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_tomia.xlsx";   
        return Excel::download(new TomiaExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        if($request->tahun!=''){
        DB::table('data_tomia')->where('tahun',$request->tahun)->delete();
        $tahunnya = $request->tahun;
        $jumlahdata = DB::table('input_tomia')->count();
        $jumlahdiisi = DB::table('data_tomia')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
        $namafile = 'Data Kec. Tomia';
        $pj = 'Admin Kec. Tomia';
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
        
        return redirect('/data-tomia')->with('status', 'Data Berhasil Dihapus');
    }
}
