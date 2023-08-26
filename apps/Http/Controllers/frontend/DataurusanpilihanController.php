<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\PariwisataModel;
use App\models\backend\PertanianModel;
use App\models\backend\KehutananModel;
use App\models\backend\EnergisumberdayaModel;
use App\models\backend\PerdaganganModel;
use App\models\backend\PerindustrianModel;
use App\models\backend\PerikananModel;
use File;
use DB;

class DataurusanpilihanController extends Controller
{
    public function index()
    {
        $data_tahun= PariwisataModel::select(DB::raw('data_pariwisata.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapilihan.pariwisata',['data'=>$data_tahun]);
    }

    public function cari(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_pariwisata')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapilihan.hasilpariwisata',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //===========================================PERTANIAN=====================================================
    public function pertanian()
    {
        $data_tahun= PertanianModel::select(DB::raw('data_pertanian.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapilihan.pertanian',['data'=>$data_tahun]);
    }

    public function caripertanian(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_pertanian')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapilihan.hasilpertanian',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //===========================================KEHUTANAN=====================================================
    public function kehutanan()
    {
        $data_tahun= KehutananModel::select(DB::raw('data_kehutanan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapilihan.kehutanan',['data'=>$data_tahun]);
    }

    public function carikehutanan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_kehutanan')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapilihan.hasilkehutanan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //===========================================PERINDUSTRIAN=====================================================
    public function perindustrian()
    {
        $data_tahun= PerindustrianModel::select(DB::raw('data_perindustrian.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapilihan.perindustrian',['data'=>$data_tahun]);
    }

    public function cariperindustrian(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_perindustrian')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapilihan.hasilperindustrian',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //===========================================PERDAGANGAN=====================================================
    public function perdagangan()
    {
        $data_tahun= PerdaganganModel::select(DB::raw('data_perdagangan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapilihan.perdagangan',['data'=>$data_tahun]);
    }

    public function cariperdagangan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_perdagangan')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapilihan.hasilperdagangan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //===========================================PERIKANAN KELAUTAN=====================================================
    public function perikanankelautan()
    {
        $data_tahun= PerikananModel::select(DB::raw('data_perikanan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapilihan.perikanankelautan',['data'=>$data_tahun]);
    }

    public function cariperikanankelautan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_perikanan')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapilihan.hasilperikanankelautan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //===========================================ENERGI DAN SUMBER DAYA=====================================================
    public function energimineral()
    {
        $data_tahun= EnergisumberdayaModel::select(DB::raw('data_energi_sumberdaya.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapilihan.energimineral',['data'=>$data_tahun]);
    }

    public function carienergimineral(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_energi_sumberdaya')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapilihan.hasilenergimineral',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
}