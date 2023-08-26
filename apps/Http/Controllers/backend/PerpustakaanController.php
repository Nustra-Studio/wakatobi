<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PerpustakaanImport;
use App\Exports\PerpustakaanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PerpustakaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_perpustakaan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/perpustakaan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PerpustakaanImport, request()->file('filenya'));
        }
        return redirect('/data-perpustakaan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/perpustakaan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_perpustakaan.xlsx";   
        return Excel::download(new PerpustakaanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_perpustakaan')->where('tahun',$request->tahun)->delete();
        return redirect('/data-perpustakaan')->with('status', 'Data Berhasil Dihapus');
    }
}
