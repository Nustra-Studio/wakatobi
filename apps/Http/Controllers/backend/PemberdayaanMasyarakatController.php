<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PemberdayaanMasyarakatImport;
use App\Exports\PemberdayaanMasyarakatExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PemberdayaanMasyarakatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pemberdayaan_masyarakat')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pemberdayaanmasyarakat/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PemberdayaanMasyarakatImport, request()->file('filenya'));
        }
        return redirect('/data-pemberdayaan-masyarakat')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
         return view('backend/pemberdayaanmasyarakat/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_dinas_pemberdayaan_masyarakat.xlsx";   
        return Excel::download(new PemberdayaanMasyarakatExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pemberdayaan_masyarakat')->where('tahun',$request->tahun)->delete();
        return redirect('/data-pemberdayaan-masyarakat')->with('status', 'Data Berhasil Dihapus');
    }
}
