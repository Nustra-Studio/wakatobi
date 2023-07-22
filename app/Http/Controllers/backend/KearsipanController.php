<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\KearsipanImport;
use App\Exports\KearsipanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class KearsipanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_kearsipan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/kearsipan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new KearsipanImport, request()->file('filenya'));
        }
        return redirect('/data-kearsipan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/kearsipan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_kearsipan.xlsx";   
        return Excel::download(new KearsipanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_kearsipan')->where('tahun',$request->tahun)->delete();
        return redirect('/data-kearsipan')->with('status', 'Data Berhasil Dihapus');
    }
}
