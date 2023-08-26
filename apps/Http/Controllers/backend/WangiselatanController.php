<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\WangiselatanImport;
use App\Exports\WangiselatanExport;
use App\models\backend\RangkingModel;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class WangiselatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_wangiselatan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/wangiselatan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new WangiselatanImport, request()->file('filenya'));
        }
        return redirect('/data-wangiselatan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/wangiselatan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_wangi_wangi_selatan.xlsx";   
        return Excel::download(new WangiselatanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        if($request->tahun!=''){
        DB::table('data_wangiselatan')->where('tahun',$request->tahun)->delete();
        $tahunnya = $request->tahun;
        $jumlahdata = DB::table('input_wangiselatan')->count();
        $jumlahdiisi = DB::table('data_wangiselatan')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
        $namafile = 'Data Kec. Wangi-Wangi Selatan';
        $pj = 'Admin Kec. Wangi-Wangi Selatan';
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
        
        return redirect('/data-wangiselatan')->with('status', 'Data Berhasil Dihapus');
    }
}
