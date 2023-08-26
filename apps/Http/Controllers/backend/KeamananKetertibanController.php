<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KeamananKetertibanImport;
use App\Exports\KeamananKetertibanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KeamananKetertibanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_keamanan_ketertiban')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/keamanaketertiban/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KeamananKetertibanImport, request()->file('filenya'));
        }
        return redirect('/ketentraman-ketertiban')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/keamanaketertiban/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_ketertiban_dan_keamanan.xlsx";   
        return Excel::download(new KeamananKetertibanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_keamanan_ketertiban')->where('tahun',$request->tahun)->delete();
        return redirect('/ketentraman-ketertiban')->with('status', 'Data Berhasil Dihapus');
    }
}
