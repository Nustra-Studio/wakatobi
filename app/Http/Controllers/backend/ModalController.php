<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\ModalImport;
use App\Exports\ModalExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class ModalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_modal')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/modal/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new ModalImport, request()->file('filenya'));
        }
        return redirect('/data-modal')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/modal/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_penanaman_modal.xlsx";   
        return Excel::download(new ModalExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_modal')->where('tahun',$request->tahun)->delete();
        return redirect('/data-modal')->with('status', 'Data Berhasil Dihapus');
    }
}
