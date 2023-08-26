<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\StatistikImport;
use App\Exports\StatistikExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class StatistikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_statistik')->groupBy('input')->orderby('id','asc')->get();
        return view('backend/statistik/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new StatistikImport, request()->file('filenya'));
        }
        return redirect('/data-statistik')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/statistik/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_statistik.xlsx";   
        return Excel::download(new StatistikExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_statistik')->where('tahun',$request->tahun)->delete();
        return redirect('/data-statistik')->with('status', 'Data Berhasil Dihapus');
    }
}
