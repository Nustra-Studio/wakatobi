<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\komenartikelModel;
use App\models\backend\ArtikelModel;
use DB;
use Auth;

class KomenartikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = komenartikelModel::select(DB::raw('komen_artikel.*,artikel.judul'))
        ->leftjoin('artikel','artikel.id','=','komen_artikel.id_artikel')
        ->orderby('komen_artikel.id','desc')
        ->get();
        $artikel = ArtikelModel::orderby('id','desc')->get();
        return view('backend.komentar.index',['data'=>$data,'artikel'=>$artikel]);
    }

    //=================================================================
    public function store(Request $request)
    {
        komenartikelModel::insert([
            'id_artikel'=>$request->artikel,
            'email'=>$request->email,
            'isi'=>$request->isi,
            'status'=>'Non Aktif',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        return redirect('komentar')->with('status','Sukses menyimpan data');
    }

    //=================================================================
    public function edit($id)
    {
        $data = komenartikelModel::where('id',$id)->first();
        if($data->status=='Aktif'){
            komenartikelModel::where('id',$id)
            ->update([
                'status'=>'Non Aktif',
            ]);
        }else{
            komenartikelModel::where('id',$id)
            ->update([
                'status'=>'Aktif',
            ]);
        }
        return redirect('komentar')->with('status','Sukses mengubah data');
    }

    //=================================================================
    public function destroy($id)
    {
        komenartikelModel::where('id',$id)->delete();
        return redirect('komentar')->with('status','Sukses menghapus data');
    }
}
