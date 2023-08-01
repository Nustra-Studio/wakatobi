<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\BeritaModel;
use App\models\backend\ArtikelModel;
use App\models\backend\GaleriModel;
use App\models\backend\SliderModel;
use App\models\backend\VisitorModel;
use App\models\backend\KategoriberitaModel;
use File;
use DB;

class DashboardController extends Controller
{
    public function getvisitor($request){  
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $platform = 'Unknown';
     if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }
        $user_ip=$request->ip();
        $tgl = date('Y-m-d');
        $data = VisitorModel::firstOrNew(['ip' => $user_ip,'date'=>$tgl]);
            $data->ip = $user_ip;
            $data->date = $tgl;
            $data->time = date('h:i:s');
            $data->os = $platform;
            $data->save();
    }

    public function index(Request $request)
    {
        $this->getvisitor($request);

        $data_berita = BeritaModel::select(DB::raw('berita.*, kategori_berita.nama as katberita'))
        ->leftJoin('kategori_berita', 'kategori_berita.id', '=', 'berita.id_kategori')
        ->orderBy('berita.created_at', 'desc') // Mengurutkan berdasarkan tanggal pembuatan (created_at)
        ->take(10) // Mengambil 3 data terbaru
        ->get();
        $data_artikel = ArtikelModel::select(DB::raw('artikel.*, kategori_artikel.nama as katartikel'))
        ->leftJoin('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.id_kategori')
        ->orderBy('artikel.created_at', 'desc')
        ->limit(3)
        ->get();
    
        $data_galeri = GaleriModel::select(DB::raw('galeri.*'))
        ->orderby('galeri.id','desc')
        ->limit(3)
        ->get();
        $count_slider = DB::table('slider')->count();
        $data_banner = SliderModel::select(DB::raw('slider.*'))->get();
        return view('frontend.dashboard',['data' => $data_berita , 'data2' => $data_artikel, 'data3' => $data_galeri, 'banner' => $data_banner,
        'hitung'=>$count_slider]);
    }

    public function tentangkami()
    {
        $data_berita = BeritaModel::select(DB::raw('berita.*,kategori_berita.nama as katberita'))
        ->leftjoin('kategori_berita','kategori_berita.id','=','berita.id_kategori')
        ->orderby('berita.id','desc')
        ->limit(8)
        ->get();
        $data_artikel = ArtikelModel::select(DB::raw('artikel.*,kategori_artikel.nama as katartikel'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->orderby('artikel.id','desc')
        ->limit(4)
        ->get();
        $data_galeri = GaleriModel::select(DB::raw('galeri.*'))
        ->orderby('galeri.id','desc')
        ->limit(4)
        ->get();
        $count_slider = DB::table('slider')->count();
        $data_banner = SliderModel::select(DB::raw('slider.*'))->get();

        return view('frontend.tentangkami',['data' => $data_berita, 'data2' => $data_artikel, 'data3' => $data_galeri, 'banner' => $data_banner,
        'hitung'=>$count_slider]);
    }

    public function detailberita($slug)
    {
        $detail_berita = BeritaModel::select(DB::raw('berita.* , kategori_berita.nama as detberita '))
        ->leftjoin('kategori_berita','kategori_berita.id','=','berita.id_kategori')
        ->where('berita.slug',$slug)
        ->orderby('berita.id','desc')
        ->get();
        $semua_berita = BeritaModel::select(DB::raw('berita.*,kategori_berita.nama as katberita'))
        ->leftjoin('kategori_berita','kategori_berita.id','=','berita.id_kategori')
        ->orderby('berita.id','desc')
        ->paginate(16);
        $semua_artikel = ArtikelModel::select(DB::raw('artikel.*,kategori_artikel.nama as katartikel'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->orderby('artikel.id','desc')
        ->paginate(16);
        $data_galeri = GaleriModel::select(DB::raw('galeri.*'))
        ->orderby('galeri.id','desc')
        ->limit(4)
        ->get();

        return view ('frontend.detailberita',['data' => $detail_berita, 'data3' => $data_galeri ,'databerita' => $semua_berita,'dataartikel' => $semua_artikel]);
    }

    public function detailartikel($slug)
    {
        $detail_artikel = ArtikelModel::select(DB::raw('artikel.* , kategori_artikel.nama as detartikel'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->where('artikel.slug',$slug)
        ->orderby('artikel.id','desc')
        ->get();
        $semua_artikel = ArtikelModel::select(DB::raw('artikel.*,kategori_artikel.nama as katartikel'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->orderby('artikel.id','desc')
        ->paginate(16);
        $semua_berita = BeritaModel::select(DB::raw('berita.*,kategori_berita.nama as katberita'))
        ->leftjoin('kategori_berita','kategori_berita.id','=','berita.id_kategori')
        ->orderby('berita.id','desc')
        ->paginate(16);
        $data_galeri = GaleriModel::select(DB::raw('galeri.*'))
        ->orderby('galeri.id','desc')
        ->limit(4)
        ->get();

        return view ('frontend.detailartikel',['data2' => $detail_artikel, 'data3' => $data_galeri,'dataartikel' => $semua_artikel,'databerita' => $semua_berita,]);
    }
    
    public function listberita()
    {
        $semua_berita = BeritaModel::select(DB::raw('berita.*,kategori_berita.nama as katberita'))
        ->leftjoin('kategori_berita','kategori_berita.id','=','berita.id_kategori')
        ->orderby('berita.id','desc')
        ->paginate(16);

        return view('frontend.listberita',['databerita' => $semua_berita]);
    }

    public function listartikel()
    {
        $semua_artikel = ArtikelModel::select(DB::raw('artikel.*,kategori_artikel.nama as katartikel'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->orderby('artikel.id','desc')
        ->paginate(16);

        return view('frontend.listartikel',['dataartikel' => $semua_artikel]);
    }

    public function listgaleri()
    {

        $data_galeri = GaleriModel::orderby('galeri.id','desc')
        ->paginate(16);

        return view ('frontend.galeri',['datagaleri' => $data_galeri]);
    }
}
