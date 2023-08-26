<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KaledupaSelatanImport;
use App\Exports\KaledupaSelatanExport;
use App\models\backend\RangkingModel;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KaledupaSelatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_kaledupaselatan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kaledupaselatan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KaledupaSelatanImport, request()->file('filenya'));
        }
        return redirect('/data-kaledupa-selatan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/kaledupaselatan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_kaledupaselatan.xlsx";   
        return Excel::download(new KaledupaSelatanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        if($request->tahun!=''){
        DB::table('data_kaledupaselatan')->where('tahun',$request->tahun)->delete();
        $tahunnya = $request->tahun;
        $jumlahdata = DB::table('input_kaledupaselatan')->count();
        $jumlahdiisi = DB::table('data_kaledupaselatan')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
        $namafile = 'Data Kec. Kaledupa Selatan';
        $pj = 'Admin Kec. Kaledupa Selatan';
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
        
        return redirect('/data-kaledupa-selatan')->with('status', 'Data Berhasil Dihapus');
    }
}
