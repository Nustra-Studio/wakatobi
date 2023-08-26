<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\BinongkoImport;
use App\Exports\BinongkoExport;
use App\models\backend\RangkingModel;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class BinongkoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_binongko')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/binongko/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new BinongkoImport, request()->file('filenya'));
        }
        return redirect('/data-binongko')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/binongko/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_binongko.xlsx";   
        return Excel::download(new BinongkoExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        if($request->tahun!=''){
            DB::table('data_binongko')->where('tahun',$request->tahun)->delete();
        $tahunnya = $request->tahun;
        $jumlahdata = DB::table('input_binongko')->count();
        $jumlahdiisi = DB::table('data_binongko')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
        $namafile = 'Data Kec. Binongko';
        $pj = 'Admin Kec. Binongko';
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
        
        return redirect('/data-binongko')->with('status', 'Data Berhasil Dihapus');
    }
}
