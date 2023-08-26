<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\TenagaKerjaModel;
use App\models\backend\PanganModel;
use App\models\backend\PertanahanModel;
use App\models\backend\PemberdayaanPerempuanModel;
use File;
use DB;

class DatanonwajibController extends Controller
{
    public function index()
    {
        $data_tahun= TenagaKerjaModel::select(DB::raw('data_tenagakerja.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/nonwajib.tenagakerja',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function cari(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_tenagakerja')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.nonwajib.hasiltenagakerja',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================PANGAN===========================================================
    public function pangan()
    {
        $data_tahun= PanganModel::select(DB::raw('data_pangan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/nonwajib.pangan',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function caripangan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_pangan')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.nonwajib.hasilpangan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================Pertahanan===========================================================
    public function pertanahan()
    {
        $data_tahun= PertanahanModel::select(DB::raw('data_pertanahan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/nonwajib.pertanahan',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function caripertanahan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_pertanahan')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.nonwajib.hasilpertanahan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================PEMBERDAYAAN===========================================================
    public function pemberdayaan()
    {
        $data_tahun= PemberdayaanPerempuanModel::select(DB::raw('data_pemberdayaan_perempuan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/nonwajib.pemberdayaan',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function caripemberdayaan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_pemberdayaan_perempuan')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.nonwajib.hasilpemberdayaan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
}