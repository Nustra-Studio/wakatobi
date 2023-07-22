<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\KesehatanModel;
use App\models\backend\PendidikanModel;
use App\models\backend\SosialModel;
use App\models\backend\KeamananKetertibanModel;
use App\models\backend\PekerjaanUmumModel;
use App\models\backend\PerumahanRakyatModel;
use App\models\backend\ProgramUnggulanModel;
use File;
use DB;

class DatawajibController extends Controller
{
    public function index()
    {
        $data_tahun= KesehatanModel::select(DB::raw('data_kesehatan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/wajib.kesehatan',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function carigrafikkesehatan($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_kesehatan')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }
    
    public function carigrafiksosial($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_sosial')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    public function carigrafikkeamanan($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_keamanan_ketertiban')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    public function cari(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_kesehatan')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.wajib.hasilkesehatan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================PENDIDIKAN===========================================================
    public function pendidikan()
    {
        $data_tahun= PendidikanModel::select(DB::raw('data_pendidikan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/wajib.pendidikan',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function caripendidikan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_pendidikan')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.wajib.hasilpendidikan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================SOSIAL===========================================================
    public function sosial()
    {
        $data_tahun= SosialModel::select(DB::raw('data_sosial.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/wajib.sosial',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function carisosial(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_sosial')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.wajib.hasilsosial',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================KETENTRAMAN===========================================================
    public function ketentraman()
    {
        $data_tahun= KeamananKetertibanModel::select(DB::raw('data_keamanan_ketertiban.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/wajib.ketentraman',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function cariketentraman(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_keamanan_ketertiban')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.wajib.hasilketentraman',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================PEKERJAAN UMUM===========================================================
    public function pekerjaan()
    {
        $data_tahun= PekerjaanUmumModel::select(DB::raw('data_pekerjaan_umum.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/wajib.pekerjaan',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function caripekerjaan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_pekerjaan_umum')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.wajib.hasilpekerjaan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================PERUMAHAN KAWASAN===========================================================
    public function perumahan()
    {
        $data_tahun= PerumahanRakyatModel::select(DB::raw('data_perumahan_rakyat.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend/wajib.perumahan',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function cariperumahan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_perumahan_rakyat')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.wajib.hasilperumahan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // =====================================================PROGRAM UNGGULAN===========================================================
    public function unggulan()
    {
        $data_tahun= ProgramUnggulanModel::select(DB::raw('data_program_unggulan.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.programunggulan',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function cariunggulan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_program_unggulan')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.hasilprogramunggulan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    public function carigrafikpendidikan($kode,$tahunawal,$tahunakhir){
        $data = DB::table('data_pendidikan')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }
}