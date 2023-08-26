<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\SipilImport;
use App\Exports\SipilExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class SipilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_sipil')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/sipil/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new SipilImport, request()->file('filenya'));
        }
        return redirect('/data-sipil')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/sipil/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_administrasi_kependudukan_dan_pencatatan_sipil.xlsx";   
        return Excel::download(new SipilExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_sipil')->where('tahun',$request->tahun)->delete();
        return redirect('/data-sipil')->with('status', 'Data Berhasil Dihapus');
    }
}
