<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Imports\EnergisumberdayaImport;
use App\Exports\EnergisumberdayaExport;
use Illuminate\Http\Request;
use File;
use DB;
use Excel;

class EnergisumberdayaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('input_energi_sumberdaya')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/energisumberdaya/index',['data'=>$data]);
    }

    //=================================================================
    public function aksiimport(Request $request)
    {
        if($request->hasFile('filenya')){
            Excel::import(new EnergisumberdayaImport(), request()->file('filenya'));
        }
        return redirect('energi-dan-sumber-daya-mineral')->with('status', 'Import data sukses');
    }

    //=================================================================
    public function import()
    {
        $datainput = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('backend/energisumberdaya/import',['datainput'=>$datainput]);
    }

    //=================================================================
    public function export()
    {
        $namafile = "data_energi_dan_sumber_daya_mineral.xlsx";   
        return Excel::download(new EnergisumberdayaExport(),$namafile);
    }

    //=================================================================
    public function destroy(Request $request)
    {
        DB::table('data_energi_sumberdaya')->where('tahun',$request->tahun)->delete();
        return redirect('energi-dan-sumber-daya-mineral')->with('status', 'Data Berhasil Dihapus');
    }
}
