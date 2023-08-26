<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\SekertariatDaerahImport;
use App\Exports\SekertariatDaerahExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class SekertariatDaerahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_sekertariat_daerah')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/sekertariatdaerah/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new SekertariatDaerahImport, request()->file('filenya'));
        }
        return redirect('/sekertariat-daerah')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/sekertariatdaerah/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_sekertariat_daerah.xlsx";   
        return Excel::download(new SekertariatDaerahExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_sekertariat_daerah')->where('tahun',$request->tahun)->delete();
        return redirect('/sekertariat-daerah')->with('status', 'Data Berhasil Dihapus');
    }
}
