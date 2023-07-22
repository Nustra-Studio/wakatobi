<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\GeografisModel;
use App\models\backend\IndikatorDataStrategisModel;
use App\models\backend\PajakRetribusiDaerahModel;
use File;
use DB;

class DataumumController extends Controller
{
    public function index()
    {
        $data_tahun= GeografisModel::select(DB::raw('data_geografis.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.dataumum.geografis',['data'=>$data_tahun]);
    }

    public function carigrafikgeografis($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_geografis')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
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
        $data = DB::table('input_geografis')->groupBy('header_satu')->orderby('id','asc')->get();
        
        return view('frontend.dataumum.hasilgeografis',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // ==============================================================================================================
    public function indikator()
    {
        $data_tahun= IndikatorDataStrategisModel::select(DB::raw('data_indikator_data_strategis.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.dataumum.indikatordata',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function carigrafikindikator($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_indikator_data_strategis')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    public function cariindikator(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
        $data = DB::table('input_indikator_data_strategis')->groupBy('header_satu')->orderby('id','asc')->get();

        return view('frontend.dataumum.hasilindikator',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }
    // ==============================================================================================================
    public function pajakretribusi()
    {
        $data_tahun= PajakRetribusiDaerahModel::select(DB::raw('data_pajak_retribusi_daerah.tahun'))
        ->groupby('tahun')
        ->get();
        return view('frontend.dataumum.pajakretribusi',['data'=>$data_tahun]);
        // SELECT DATE_FORMAT(tanggal, '%Y') from data_geografis GROUP BY YEAR(tanggal), YEAR(TANGGAL)DES
    }

    public function carigrafikpajak($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_pajak_retribusi_daerah')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    public function caripajakretribusi(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;
        if($dataawal=='' and $dataakhir=='')
        {
            return back();
        }else{
            $data = DB::table('input_pajak_retribusi_daerah')->groupBy('header_satu')->orderby('id','asc')->get();
        
            return view('frontend.dataumum.hasilpajakretribusi',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

}