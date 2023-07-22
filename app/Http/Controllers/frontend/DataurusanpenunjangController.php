<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\KeuanganModel;
use App\models\backend\KepegawaianModel;
use App\models\backend\PenelitianPengembanganModel;
use App\models\backend\PerencanaanPembangunanModel; 
use App\models\backend\PengawasanModel;
use App\models\backend\DewanModel;
use App\models\backend\SekertariatDaerahModel;
use File;
use DB;

class DataurusanpenunjangController extends Controller
{
    public function index()
    {
        $data_tahun= KeuanganModel::select(DB::raw('data_keuangan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapenunjang.keuangan',['data'=>$data_tahun]);
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
        $data = DB::table('input_keuangan')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapenunjang.hasilkeuangan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //=============================================KEPEGAWAIAN======================================================
    public function kepegawaian()
    {
        $data_tahun= KepegawaianModel::select(DB::raw('data_kepegawaian.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapenunjang.kepegawaian',['data'=>$data_tahun]);
    }

    public function carikepegawaian(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_kepegawaian')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapenunjang.hasilkepegawaian',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //=============================================PENELITIAN & PENGEMBANGAN======================================================
    public function penelitianpengembangan()
    {
        $data_tahun= PenelitianPengembanganModel::select(DB::raw('data_penelitian_pengembangan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapenunjang.penelitianpengembangan',['data'=>$data_tahun]);
    }

    public function caripenelitianpengembangan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_penelitian_pengembangan')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapenunjang.hasilpenelitianpengembangan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //=============================================PERENCANAAN PEMBANGUNAN======================================================
    public function perencanaanpembangunan()
    {
        $data_tahun= PerencanaanPembangunanModel::select(DB::raw('data_perencanaan_pembangunan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapenunjang.perencanaanpembangunan',['data'=>$data_tahun]);
    }

    public function cariperencanaanpembangunan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_perencanaan_pembangunan')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapenunjang.hasilperencanaanpembangunan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //=============================================PENGAWASAN======================================================
    public function pengawasan()
    {
        $data_tahun= PengawasanModel::select(DB::raw('data_pengawasan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapenunjang.pengawasan',['data'=>$data_tahun]);
    }

    public function caripengawasan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_pengawasan')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapenunjang.hasilpengawasan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //=============================================SEKERTARIAT DEWAN======================================================
    public function sekertariatdewan()
    {
        $data_tahun= DewanModel::select(DB::raw('data_sekertariat_dewan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapenunjang.sekertariatdewan',['data'=>$data_tahun]);
    }

    public function carisekertariatdewan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_sekertariat_dewan')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapenunjang.hasilsekertariatdewan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    //=============================================SEKERTARIAT DAERAH======================================================
    public function sekertariatdaerah()
    {
        $data_tahun= SekertariatDaerahModel::select(DB::raw('data_sekertariat_daerah.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.datapenunjang.sekertariatdaerah',['data'=>$data_tahun]);
    }

    public function carisekertariatdaerah(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        // dd($dataawal);
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_sekertariat_daerah')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.datapenunjang.hasilsekertariatdaerah',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
}