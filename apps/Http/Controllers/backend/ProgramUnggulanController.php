<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\ProgramUnggulanImport;
use App\Exports\ProgramUnggulanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class ProgramUnggulanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_program_unggulan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/programunggulan/index',['data'=>$data]);
    }


    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new ProgramUnggulanImport, request()->file('filenya'));
        }
        return redirect('program-unggulan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/programunggulan/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "program_unggulan_daerah.xlsx";   
        return Excel::download(new ProgramUnggulanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_program_unggulan')->where('tahun',$request->tahun)->delete();
        return redirect('program-unggulan')->with('status', 'Data Berhasil Dihapus');
    }
}
