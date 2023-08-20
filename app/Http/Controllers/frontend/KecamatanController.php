<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use DB;

class KecamatanController extends Controller
{
    //=========================================================================================================
    public function index()
    {
        $data_tahun= DB::table('data_wangi')
        ->groupby('tahun')
        ->get();
        return view('frontend.datakecamatan.wangi',['data'=>$data_tahun]);
    }

    //=========================================================================================================
    public function hasilwangi(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir==''){
            return back();
        }else{
        $data = DB::table('input_wangi')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('frontend.datakecamatan.hasilwangi',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    //=========================================================================================================
    public function carigrafikwangi($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_wangi')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    //=========================================================================================================
    public function wangiselatan()
    {
        $data_tahun= DB::table('data_wangiselatan')
        ->groupby('tahun')
        ->get();
        return view('frontend.datakecamatan.wangiselatan',['data'=>$data_tahun]);
    }

    //=========================================================================================================
    public function hasilwangiselatan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir==''){
            return back();
        }else{
        $data = DB::table('input_wangiselatan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('frontend.datakecamatan.hasilwangiselatan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    //=========================================================================================================
    public function carigrafikwangiselatan($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_wangiselatan')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    //=========================================================================================================
    public function kaledupa()
    {
        $data_tahun= DB::table('data_kaledupa')
        ->groupby('tahun')
        ->get();
        return view('frontend.datakecamatan.kaledupa',['data'=>$data_tahun]);
    }

    //=========================================================================================================
    public function hasilkaledupa(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir==''){
            return back();
        }else{
        $data = DB::table('input_kaledupa')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('frontend.datakecamatan.hasilkaledupa',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    //=========================================================================================================
    public function carigrafikkaledupa($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_kaledupa')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    //=========================================================================================================
    public function kaledupaselatan()
    {
        $data_tahun= DB::table('data_kaledupaselatan')
        ->groupby('tahun')
        ->get();
        return view('frontend.datakecamatan.kaledupaselatan',['data'=>$data_tahun]);
    }

    //=========================================================================================================
    public function hasilkaledupaselatan(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir==''){
            return back();
        }else{
        $data = DB::table('input_kaledupaselatan')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('frontend.datakecamatan.hasilkaledupaselatan',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    //=========================================================================================================
    public function carigrafikkaledupaselatan($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_kaledupaselatan')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    //=========================================================================================================
    public function tomia()
    {
        $data_tahun= DB::table('data_tomia')
        ->groupby('tahun')
        ->get();
        return view('frontend.datakecamatan.tomia',['data'=>$data_tahun]);
    }

    //=========================================================================================================
    public function hasiltomia(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir==''){
            return back();
        }else{
        $data = DB::table('input_tomia')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('frontend.datakecamatan.hasiltomia',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    //=========================================================================================================
    public function carigrafiktomia($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_tomia')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    //=========================================================================================================
    public function tomiatimur()
    {
        $data_tahun= DB::table('data_tomiatimur')
        ->groupby('tahun')
        ->get();
        return view('frontend.datakecamatan.tomiatimur',['data'=>$data_tahun]);
    }

    //=========================================================================================================
    public function hasiltomiatimur(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir==''){
            return back();
        }else{
        $data = DB::table('input_tomiatimur')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('frontend.datakecamatan.hasiltomiatimur',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    //=========================================================================================================
    public function carigrafiktomiatimur($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_tomiatimur')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    //=========================================================================================================
    public function binongko()
    {
        $data_tahun= DB::table('data_binongko')
        ->groupby('tahun')
        ->get();
        return view('frontend.datakecamatan.binongko',['data'=>$data_tahun]);
    }

    //=========================================================================================================
    public function hasilbinongko(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir==''){
            return back();
        }else{
        $data = DB::table('input_binongko')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('frontend.datakecamatan.hasilbinongko',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    //=========================================================================================================
    public function carigrafikbinongko($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_binongko')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }

    //=========================================================================================================
    public function togobinongko()
    {
        $data_tahun= DB::table('data_togobinongko')
        ->groupby('tahun')
        ->get();
        return view('frontend.datakecamatan.togobinongko',['data'=>$data_tahun]);
    }

    //=========================================================================================================
    public function hasiltogobinongko(Request $request)
    {
        $dataawal = $request->taaw;
        $dataakhir = $request->taak;

        if($dataawal=='' and $dataakhir==''){
            return back();
        }else{
        $data = DB::table('input_togobinongko')->groupBy('header_satu')->orderby('id','asc')->get();
        return view('frontend.datakecamatan.hasiltogobinongko',[ 'data' => $data,'tahunawal'=>$dataawal , 'tahunakhir'=>$dataakhir]);
        }
    }

    //=========================================================================================================
    public function carigrafiktogobinongko($kode,$tahunawal,$tahunakhir)
    {
        $data = DB::table('data_togobinongko')->where([['kode',$kode],['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])->get();
        return response()->json($data);
    }
}