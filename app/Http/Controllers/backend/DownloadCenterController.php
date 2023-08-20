<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Exports\downloadcenter\WangiExport;
use App\Exports\downloadcenter\WangiselatanExport;
use App\Exports\downloadcenter\KaledupaExport;
use App\Exports\downloadcenter\KaledupaSelatanExport;
use App\Exports\downloadcenter\TomiaExport;
use App\Exports\downloadcenter\TomiatimurExport;
use App\Exports\downloadcenter\BinongkoExport;
use App\Exports\downloadcenter\TogobinongkoExport;
use App\Exports\downloadcenter\ProgramUnggulanExport;
use App\Exports\downloadcenter\PajakRetribusiDaerahExport;
use App\Exports\downloadcenter\KesehatanExport;
use App\Exports\downloadcenter\PendidikanExport;
use App\Exports\downloadcenter\SosialExport;
use App\Exports\downloadcenter\IndikatorDataStrategisExport;
use App\Exports\downloadcenter\GeografisExport;
use App\Exports\downloadcenter\PekerjaanUmumExport;
use App\Exports\downloadcenter\KeamananKetertibanExport;
use App\Exports\downloadcenter\PerumahanRakyatExport;
use App\Exports\downloadcenter\PariwisataExport;
use App\Exports\downloadcenter\PertanianExport;
use App\Exports\downloadcenter\KehutananExport;
use App\Exports\downloadcenter\PerindustrianExport;
use App\Exports\downloadcenter\PerdaganganExport;
use App\Exports\downloadcenter\PerikananExport;
use App\Exports\downloadcenter\EnergisumberdayaExport;
use App\Exports\downloadcenter\PerencanaanPembangunanExport;
use App\Exports\downloadcenter\KeuanganExport;
use App\Exports\downloadcenter\KepegawaianExport;
use App\Exports\downloadcenter\PenelitianPengembanganExport;
use App\Exports\downloadcenter\PengawasanExport;
use App\Exports\downloadcenter\DewanExport;
use App\Exports\downloadcenter\SekertariatDaerahExport;
use App\Exports\downloadcenter\TenagaKerjaExport;
use App\Exports\downloadcenter\PanganExport;
use App\Exports\downloadcenter\PertanahanExport;
use App\Exports\downloadcenter\KebudayaanExport;
use App\Exports\downloadcenter\PerpustakaanExport;
use App\Exports\downloadcenter\KearsipanExport;
use App\Exports\downloadcenter\KoperasiExport;
use App\Exports\downloadcenter\KominfoExport;
use App\Exports\downloadcenter\OlahragaExport;
use App\Exports\downloadcenter\StatistikExport;
use App\Exports\downloadcenter\PersandianExport;
use App\Exports\downloadcenter\ModalExport;
use App\Exports\downloadcenter\PerhubunganExport;
use App\Exports\downloadcenter\LingkunganHidupExport;
use App\Exports\downloadcenter\PemberdayaanPerempuanExport;
use App\Exports\downloadcenter\SipilExport;
use App\Exports\downloadcenter\PemberdayaanMasyarakatExport;
use App\Exports\downloadcenter\PengendalianPendudukExport;

use Illuminate\Http\Request;
use Excel;
use DB;
use Auth;

class DownloadCenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //========================================================================
    public function index()
    {
        return view('backend.downloadcenter.index');
    }

    //========================================================================
    public function gettahun($namafile)
    {
        $status = 'error';
        $tahun ='';

        if($namafile=='Wangi - Wangi'){
            $tahun = DB::table('data_wangi')->groupby('tahun')->get();
        }else if($namafile=='Wangi - Wangi Selatan'){
            $tahun = DB::table('data_wangiselatan')->groupby('tahun')->get();
        }else if($namafile=='Kaledupa'){
            $tahun = DB::table('data_kaledupa')->groupby('tahun')->get();
        }else if($namafile=='Kaledupa Selatan'){
            $tahun = DB::table('data_kaledupaselatan')->groupby('tahun')->get();
        }else if($namafile=='Tomia'){
            $tahun = DB::table('data_tomia')->groupby('tahun')->get();
        }else if($namafile=='Tomia Timur'){
            $tahun = DB::table('data_tomiatimur')->groupby('tahun')->get();
        }else if($namafile=='Binongko'){
            $tahun = DB::table('data_binongko')->groupby('tahun')->get();
        }else if($namafile=='Togo Binongko'){
            $tahun = DB::table('data_togobinongko')->groupby('tahun')->get();
        }else if($namafile=='Program Unggulan Daerah'){
            $tahun = DB::table('data_program_unggulan')->groupby('tahun')->get();
        }else if($namafile =='Data Geografis'){
            $tahun = DB::table('data_geografis')->groupby('tahun')->get();
        }else if($namafile =='Indikator Data Strategis'){
            $tahun = DB::table('data_indikator_data_strategis')->groupby('tahun')->get();
        }else if($namafile =='Pajak & Retribusi Daerah'){
            $tahun = DB::table('data_pajak_retribusi_daerah')->groupby('tahun')->get();
        }else if($namafile =='Data Kesehatan'){
            $tahun = DB::table('data_kesehatan')->groupby('tahun')->get();
        }else if($namafile =='Data Pendidikan'){
            $tahun = DB::table('data_pendidikan')->groupby('tahun')->get();
        }else if($namafile =='Data Sosial'){
            $tahun = DB::table('data_sosial')->groupby('tahun')->get();
        }else if($namafile =='Data Ketentraman dan Ketertiban'){
            $tahun = DB::table('data_keamanan_ketertiban')->groupby('tahun')->get();
        }else if($namafile =='Data Pekerjaan Umum dan Penataan Ruang'){
            $tahun = DB::table('data_pekerjaan_umum')->groupby('tahun')->get();
        }else if($namafile =='Data Perumahan Rakyat dan Kawasan Pemukiman'){
            $tahun = DB::table('data_perumahan_rakyat')->groupby('tahun')->get();
        }else if($namafile =='Data Pariwisata'){
            $tahun = DB::table('data_pariwisata')->groupby('tahun')->get();
        }else if($namafile =='Data Pertanian'){
            $tahun = DB::table('data_pertanian')->groupby('tahun')->get();
        }else if($namafile =='Data Kehutanan'){
            $tahun = DB::table('data_kehutanan')->groupby('tahun')->get();
        }else if($namafile =='Data Perindustrian'){
            $tahun = DB::table('data_perindustrian')->groupby('tahun')->get();
        }else if($namafile =='Data Perdagangan'){
            $tahun = DB::table('data_perdagangan')->groupby('tahun')->get();
        }else if($namafile =='Data Perikanan'){
            $tahun = DB::table('data_perikanan')->groupby('tahun')->get();
        }else if($namafile =='Data Energi'){
            $tahun = DB::table('data_energi_sumberdaya')->groupby('tahun')->get();
        }else if($namafile =='Data Perencanaan Pembangunan'){
            $tahun = DB::table('data_perencanaan_pembangunan')->groupby('tahun')->get();
        }else if($namafile =='Data Keuangan'){
            $tahun = DB::table('data_keuangan')->groupby('tahun')->get();
        }else if($namafile =='Data Kepegawaian'){
            $tahun = DB::table('data_kepegawaian')->groupby('tahun')->get();
        }else if($namafile =='Data Penelitian dan Pengembangan'){
            $tahun = DB::table('data_penelitian_pengembangan')->groupby('tahun')->get();
        }else if($namafile =='Data Pengawasan'){
            $tahun = DB::table('data_pengawasan')->groupby('tahun')->get();
        }else if($namafile =='Data Sekertariat Dewan'){
            $tahun = DB::table('data_sekertariat_dewan')->groupby('tahun')->get();
        }else if($namafile =='Data Sekertariat Daerah'){
            $tahun = DB::table('data_sekertariat_daerah')->groupby('tahun')->get();
        }else if($namafile =='Data Tenaga Kerja'){
            $tahun = DB::table('data_tenagakerja')->groupby('tahun')->get();
        }else if($namafile =='Data Pangan'){
            $tahun = DB::table('data_pangan')->groupby('tahun')->get();
        }else if($namafile =='Data Pertanahan'){
            $tahun = DB::table('data_pertanahan')->groupby('tahun')->get();
        }else if($namafile =='Data Kebudayaan'){
            $tahun = DB::table('data_kebudayaan')->groupby('tahun')->get();
        }else if($namafile =='Data Perpustakaan'){
            $tahun = DB::table('data_perpustakaan')->groupby('tahun')->get();
        }else if($namafile =='Data Kearsipan'){
            $tahun = DB::table('data_kearsipan')->groupby('tahun')->get();
        }else if($namafile =='Data Koperasi'){
            $tahun = DB::table('data_koperasi')->groupby('tahun')->get();
        }else if($namafile =='Data Kominfo'){
            $tahun = DB::table('data_kominfo')->groupby('tahun')->get();
        }else if($namafile =='Data Olahraga'){
            $tahun = DB::table('data_olahraga')->groupby('tahun')->get();
        }else if($namafile =='Data Statistik'){
            $tahun = DB::table('data_statistik')->groupby('tahun')->get();
        }else if($namafile =='Data Persandian'){
            $tahun = DB::table('data_persandian')->groupby('tahun')->get();
        }else if($namafile =='Data Penanaman Modal'){
            $tahun = DB::table('data_modal')->groupby('tahun')->get();
        }else if($namafile =='Data Perhubungan'){
            $tahun = DB::table('data_perhubungan')->groupby('tahun')->get();
        }else if($namafile =='Data Lingkungan Hidup'){
            $tahun = DB::table('data_lingkungan_hidup')->groupby('tahun')->get();
        }else if($namafile =='Data Pemberdayaan Perempuan dan Perlindungan Anak'){
            $tahun = DB::table('data_pemberdayaan_perempuan')->groupby('tahun')->get();
        }else if($namafile =='Data Administrasi Kependudukan dan Pencatatan Sipil'){
            $tahun = DB::table('data_sipil')->groupby('tahun')->get();
        }else if($namafile =='Data Pemberdayaan Masyarakat'){
            $tahun = DB::table('data_pemberdayaan_masyarakat')->groupby('tahun')->get();
        }else if($namafile =='Data Pengendalian Penduduk dan KB'){
            $tahun = DB::table('data_pengendalian_penduduk')->groupby('tahun')->get();
        }

        
        $finaldata = [
            'tahun'=>$tahun,
            'status'=>$status
        ];
        return response()->json($finaldata);
    }
    
    //========================================================================
    public function store(Request $request)
    {
        if($request->namafile=='Wangi - Wangi'){
            $namafile = "Data Kecamatan ".$request->namafile." tahun ".$request->tahun.".xls";   
            return Excel::download(new WangiExport($request->tahun),$namafile);
        }else if($request->namafile=='Wangi - Wangi Selatan'){
            $namafile = "Data Kecamatan ".$request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new WangiselatanExport($request->tahun),$namafile);
        }else if($request->namafile=='Kaledupa'){
            $namafile = "Data Kecamatan ".$request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KaledupaExport($request->tahun),$namafile);
        }else if($request->namafile=='Kaledupa Selatan'){
            $namafile = "Data Kecamatan ".$request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KaledupaSelatanExport($request->tahun),$namafile);
        }else if($request->namafile=='Tomia'){
            $namafile = "Data Kecamatan ".$request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new TomiaExport($request->tahun),$namafile);
        }else if($request->namafile=='Tomia Timur'){
            $namafile = "Data Kecamatan ".$request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new TomiatimurExport($request->tahun),$namafile);
        }else if($request->namafile=='Binongko'){
            $namafile = "Data Kecamatan ".$request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new BinongkoExport($request->tahun),$namafile);
        }else if($request->namafile=='Togo Binongko'){
            $namafile = "Data Kecamatan ".$request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new TogobinongkoExport($request->tahun),$namafile);
        }else if($request->namafile=='Program Unggulan Daerah'){
            $namafile = "Data ".$request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new ProgramUnggulanExport($request->tahun),$namafile);
        }else if($request->namafile=='Data Geografis'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new GeografisExport($request->tahun),$namafile);
        }else if($request->namafile =='Indikator Data Strategis'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new IndikatorDataStrategisExport($request->tahun),$namafile);
        }else if($request->namafile =='Pajak & Retribusi Daerah'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PajakRetribusiDaerahExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Kesehatan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KesehatanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pendidikan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PendidikanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Sosial'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new SosialExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Ketentraman dan Ketertiban'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KeamananKetertibanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pekerjaan Umum dan Penataan Ruang'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PekerjaanUmumExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Perumahan Rakyat dan Kawasan Pemukiman'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PerumahanRakyatExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pariwisata'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PariwisataExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pertanian'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PertanianExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Kehutanan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KehutananExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Perindustrian'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PerindustrianExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Perdagangan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PerdaganganExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Perikanan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PerikananExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Energi'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new EnergisumberdayaExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Perencanaan Pembangunan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PerencanaanPembangunanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Keuangan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KeuanganExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Kepegawaian'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KepegawaianExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Penelitian dan Pengembangan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PenelitianPengembanganExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pengawasan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PengawasanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Sekertariat Dewan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new DewanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Sekertariat Daerah'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new SekertariatDaerahExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Tenaga Kerja'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new TenagaKerjaExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pangan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PanganExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pertanahan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PertanahanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Kebudayaan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KebudayaanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Perpustakaan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PerpustakaanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Kearsipan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KearsipanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Koperasi'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KoperasiExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Kominfo'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new KominfoExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Olahraga'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new OlahragaExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Statistik'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new StatistikExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Persandian'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PersandianExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Penanaman Modal'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new ModalExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Perhubungan'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PerhubunganExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Lingkungan Hidup'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new LingkunganHidupExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pemberdayaan Perempuan dan Perlindungan Anak'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PemberdayaanPerempuanExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Administrasi Kependudukan dan Pencatatan Sipil'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new SipilExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pemberdayaan Masyarakat'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PemberdayaanMasyarakatExport($request->tahun),$namafile);
        }else if($request->namafile =='Data Pengendalian Penduduk dan KB'){
            $namafile = $request->namafile." tahun ".$request->tahun.".xls";
            return Excel::download(new PengendalianPendudukExport($request->tahun),$namafile);
        }
        
    }
    
}
