<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\PendidikanImport;
use App\Exports\PendidikanExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class PendidikanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_pendidikan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/pendidikan/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new PendidikanImport, request()->file('filenya'));
        }
        return redirect('/pendidikan')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        return view('backend/pendidikan/import');
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_pendidikan.xlsx";   
        return Excel::download(new PendidikanExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_pendidikan')->where('tahun',$request->tahun)->delete();
        return redirect('/pendidikan')->with('status', 'Data Berhasil Dihapus');
    }
}
