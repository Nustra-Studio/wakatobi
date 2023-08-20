<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\WangiImport;
use App\Exports\WangiExport;
use App\models\backend\RangkingModel;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class WangiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_wangi')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/wangi/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new WangiImport, request()->file('filenya'));
        }
        return redirect('/data-wangi')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/wangi/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_wangi_wangi.xlsx";   
        return Excel::download(new WangiExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        if($request->tahun!=''){
        DB::table('data_wangi')->where('tahun',$request->tahun)->delete();
        $tahunnya = $request->tahun;
        $jumlahdata = DB::table('input_wangi')->count();
        $jumlahdiisi = DB::table('data_wangi')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
        $namafile = 'Data Kec. Wangi-Wangi';
        $pj = 'Admin Kec. Wangi-Wangi';
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
        
        return redirect('/data-wangi')->with('status', 'Data Berhasil Dihapus');
    }
}
