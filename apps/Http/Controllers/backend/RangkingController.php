<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RangkingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('rangking')->groupBy('tahun')->orderby('id','asc')->get();
        return view('backend/rangking/index',['data'=>$data]);
    }

    //=================================================================
    public function show(Request $request)
    {
        $data = DB::table('rangking')->where('tahun',$request->tahun)->orderby('presentase','desc')->orderby('tanggal','asc')->get();
        return view('backend/rangking/show',['data'=>$data]);
    }
}
