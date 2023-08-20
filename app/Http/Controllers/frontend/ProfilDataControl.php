<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\models\backend\GeografisModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilDataControl extends Controller
{
    public function index()
    {
        $year=date('Y');
        $data_tahun= DB::table('input_geografis')
        ->groupby('header_satu')
        ->get();
        $print=[
            'data'=>$data_tahun,
            't1'=>$year,
            't2'=>$year,
            'kat'=>'Geografis',
            'lnk'=>'input_geografis',
            'ld'=>'data_geografis',
            'kl'=>'1',
        ];
        return view('frontend.profiledata.index',$print);
    }
    public function listData($lnk,$ld,$kat)
    {
        $year=date('Y');
        $kate=str_replace('-',' ',$kat);
        $data_tahun= DB::table($lnk)
        ->groupby('header_satu')
        ->get();
        $print=[
            'data'=>$data_tahun,
            't1'=>$year,
            't2'=>$year,
            'kat'=>$kate,
            'lnk'=>$lnk,
            'ld'=>$ld,
            'kl'=>'1',
        ];
        return view('frontend.profiledata.index',$print);
    }
    public function listPertahun(Request $request)
    {
        $lnk=$request->lnk;
        $ld=$request->ld;
        $kat=$request->kat;
        $t1=$request->t1;
        $t2=$request->t2;
        $kate=str_replace('-',' ',$kat);
        $data_tahun= DB::table($lnk)
        ->groupby('header_satu')
        ->get();
        $print=[
            'data'=>$data_tahun,
            't1'=>$t1,
            't2'=>$t2,
            'kat'=>$kate,
            'lnk'=>$lnk,
            'ld'=>$ld,
            'kl'=>'0',
        ];
        return view('frontend.profiledata.index',$print);
    }
    public function listGraph($dt,$kd,$t1,$t2)
    {
        $data = DB::table($dt)->where([['kode',$kd],['tahun','>=',$t1],['tahun','<=',$t2]])->get();
        return response()->json($data);
    }
}
