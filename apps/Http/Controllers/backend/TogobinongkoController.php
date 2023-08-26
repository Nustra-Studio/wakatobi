<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\TogobinongkoImport;
use App\Exports\TogobinongkoExport;
use App\models\backend\RangkingModel;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class TogobinongkoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_togobinongko')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/togobinongko/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new TogobinongkoImport, request()->file('filenya'));
        }
        return redirect('/data-togobinongko')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/togobinongko/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_togobinongko.xlsx";   
        return Excel::download(new TogobinongkoExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        if($request->tahun!=''){
            DB::table('data_togobinongko')->where('tahun',$request->tahun)->delete();
        $tahunnya = $request->tahun;
        $jumlahdata = DB::table('input_togobinongko')->count();
        $jumlahdiisi = DB::table('data_togobinongko')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
        $namafile = 'Data Kec. Togo Binongko';
        $pj = 'Admin Kec. Togo Binongko';
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
        
        return redirect('/data-togobinongko')->with('status', 'Data Berhasil Dihapus');
    }
}
