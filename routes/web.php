<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'frontend\DashboardController@index')->name('dashboard');
Route::get('/tentang-kami', 'frontend\DashboardController@tentangkami')->name('dashboard');
Route::get('/detail-berita/{slug}','frontend\DashboardController@detailberita');
Route::get('/detail-artikel/{slug}','frontend\DashboardController@detailartikel');
Route::get('/semua-berita','frontend\DashboardController@listberita');
Route::get('/semua-artikel','frontend\DashboardController@listartikel');
Route::get('/semua-galeri','frontend\DashboardController@listgaleri');
//============================ROUTE INDEX PENCARIAN===============================================
Route::get('/profile-data','frontend\DataumumController@index');
Route::get('/data-umum/geografis','frontend\DataumumController@index');
Route::get('/data-umum/indikator-data','frontend\DataumumController@indikator');
Route::get('/data-umum/pajak-retribusi-daerah','frontend\DataumumController@pajakretribusi');
Route::get('/data-urusan-pilihan/pariwisata','frontend\DataurusanpilihanController@index');
Route::get('/data-urusan-pilihan/pertanian','frontend\DataurusanpilihanController@pertanian');
Route::get('/data-urusan-pilihan/kehutanan','frontend\DataurusanpilihanController@kehutanan');
Route::get('/data-urusan-pilihan/perindustrian','frontend\DataurusanpilihanController@perindustrian');
Route::get('/data-urusan-pilihan/perdagangan','frontend\DataurusanpilihanController@perdagangan');
Route::get('/data-urusan-pilihan/perikanan-kelautan','frontend\DataurusanpilihanController@perikanankelautan');
Route::get('/data-urusan-pilihan/energimineral','frontend\DataurusanpilihanController@energimineral');
Route::get('/data-urusan-penunjang/perencanaan-pembangunan','frontend\DataurusanpenunjangController@perencanaanpembangunan');
Route::get('/data-urusan-penunjang/keuangan','frontend\DataurusanpenunjangController@index');
Route::get('/data-urusan-penunjang/kepegawaian','frontend\DataurusanpenunjangController@kepegawaian');
Route::get('/data-urusan-penunjang/penelitan-pengembangan','frontend\DataurusanpenunjangController@penelitianpengembangan');
Route::get('/data-urusan-penunjang/pengawasan','frontend\DataurusanpenunjangController@pengawasan');
Route::get('/data-urusan-penunjang/sekertariat-dewan','frontend\DataurusanpenunjangController@sekertariatdewan');
Route::get('/data-urusan-penunjang/sekertariat-daerah','frontend\DataurusanpenunjangController@sekertariatdaerah');
Route::get('/data-non-wajib/tenaga-kerja','frontend\DatanonwajibController@index');
Route::get('/data-non-wajib/pangan','frontend\DatanonwajibController@pangan');
Route::get('/data-non-wajib/pertanahan','frontend\DatanonwajibController@pertanahan');
Route::get('/data-non-wajib/pemberdayaan','frontend\DatanonwajibController@pemberdayaan');
Route::get('/data-wajib/kesehatan','frontend\DatawajibController@index');
Route::get('/data-wajib/pendidikan','frontend\DatawajibController@pendidikan');
Route::get('/data-wajib/sosial','frontend\DatawajibController@sosial');
Route::get('/data-wajib/ketentraman-ketertiban','frontend\DatawajibController@ketentraman');
Route::get('/data-wajib/pekerjaan-umum','frontend\DatawajibController@pekerjaan');
Route::get('/data-wajib/perumahan-pemukiman','frontend\DatawajibController@perumahan');
Route::get('/program-unggulan/index','frontend\DatawajibController@unggulan');

//============================ROUTE HASIL PENCARIAN===============================================
Route::get('/geografis/cari','frontend\DataumumController@cari');
Route::get('/indikator-data/cari','frontend\DataumumController@cariindikator');
Route::get('/pajak-retribusi/cari','frontend\DataumumController@caripajakretribusi');
Route::get('/pariwisata/cari','frontend\DataurusanpilihanController@cari');
Route::get('/pertanian/cari','frontend\DataurusanpilihanController@caripertanian');
Route::get('/kehutanan/cari','frontend\DataurusanpilihanController@carikehutanan');
Route::get('/perindustrian/cari','frontend\DataurusanpilihanController@cariperindustrian');
Route::get('/perdagangan/cari','frontend\DataurusanpilihanController@cariperdagangan');
Route::get('/perikanan-kelautan/cari','frontend\DataurusanpilihanController@cariperikanankelautan');
Route::get('/perencanaan-pembangunan/cari','frontend\DataurusanpenunjangController@cariperencanaanpembangunan');
Route::get('/sumber-daya/cari','frontend\DataurusanpilihanController@carienergimineral');
Route::get('/keuangan/cari','frontend\DataurusanpenunjangController@cari');
Route::get('/kepegawaian/cari','frontend\DataurusanpenunjangController@carikepegawaian');
Route::get('/penelitan-pengembangan/cari','frontend\DataurusanpenunjangController@caripenelitianpengembangan');
Route::get('/pengawasan/cari','frontend\DataurusanpenunjangController@caripengawasan');
Route::get('/sekertariat-dewan/cari','frontend\DataurusanpenunjangController@carisekertariatdewan');
Route::get('/sekertariat-daerah/cari','frontend\DataurusanpenunjangController@carisekertariatdaerah');
Route::get('/tenaga-kerja/cari','frontend\DatanonwajibController@cari');
Route::get('/pangan/cari','frontend\DatanonwajibController@caripangan');
Route::get('/pertanahan/cari','frontend\DatanonwajibController@caripertanahan');
Route::get('/pemberdayaan/cari','frontend\DatanonwajibController@caripemberdayaan');
Route::get('/kesehatan/cari','frontend\DatawajibController@cari');
Route::get('/pendidikan/cari','frontend\DatawajibController@caripendidikan');
Route::get('/sosial/cari','frontend\DatawajibController@carisosial');
Route::get('/ketentraman-ketertiban/cari','frontend\DatawajibController@cariketentraman');
Route::get('/pekerjaan-umum/cari','frontend\DatawajibController@caripekerjaan');
Route::get('/perumahan-pemukiman/cari','frontend\DatawajibController@cariperumahan');
Route::get('/program-unggulan/cari','frontend\DatawajibController@cariunggulan');

Auth::routes();
Route::get('/home', 'backend\HomeController@index')->name('home');
Route::get('/edit-profile', 'backend\HomeController@editprofile')->name('editprofile');
Route::post('/edit-profile/{id}', 'backend\HomeController@aksieditprofile');

//============================ROUTE Grafik===============================================
Route::get('pendidikan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikpendidikan');
Route::get('geografis/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataumumController@carigrafikgeografis');
Route::get('indikator/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataumumController@carigrafikindikator');
Route::get('pajak-retribusi/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataumumController@carigrafikpajak');
Route::get('kesehatan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikkesehatan');
Route::get('sosial/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafiksosial');
Route::get('ketentraman-ketertiban/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikkeamanan');

// Route::get('/data-admin','backend\AdminController@listdata'); with datatable plugin
Route::resource('/admin','backend\AdminController');
Route::resource('/menu','backend\MenuController');
Route::resource('/halaman','backend\HalamanController');
Route::resource('/galeri','backend\GaleriController');
Route::resource('/submenu','backend\SubmenuController');
Route::resource('/kategori-artikel','backend\KategoriartikelController');
Route::resource('/kategori-berita','backend\KategoriberitaController');
Route::resource('/berita','backend\BeritaController');
Route::resource('/artikel','backend\ArtikelController');
Route::resource('/komentar','backend\KomenartikelController');
Route::resource('/slider','backend\SliderController');
Route::resource('/setting-web','backend\SettingwebController');

//----------------------------------------------------------------------------------------
Route::get('edit-konten/{kode}','backend\KontenhalamanController@editkonten');
Route::put('edit-konten/{kode}','backend\KontenhalamanController@updatekonten');
Route::get('manage-halaman/{kode}','backend\KontenhalamanController@index');
Route::post('manage-halaman/tambah','backend\KontenhalamanController@createtunggal');
Route::post('manage-halaman/tambah-majemuk','backend\KontenhalamanController@storemajemuk');
Route::put('manage-halaman/{kode}','backend\KontenhalamanController@updatetunggal');

//----------------------------------------------------------------------------------------
Route::get('manage-halaman-majemuk/{kode}','backend\KontenhalamanController@createmajemuk');
Route::get('hapus-konten/{kode}/{halaman}','backend\KontenhalamanController@hapuskonten');

//----------------------------------------------------------------------------------------
Route::get('/data-geografis-import','backend\GeografisController@import');
Route::post('/data-geografis-import','backend\GeografisController@aksiimport');
Route::get('/data-geografis-export','backend\GeografisController@export');
Route::get('/data-geografis','backend\GeografisController@index');
Route::post('/data-geografis/hapus','backend\GeografisController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/indikator-data-strategis-import','backend\IndikatorDataStrategisController@import');
Route::post('/indikator-data-strategis-import','backend\IndikatorDataStrategisController@aksiimport');
Route::get('/indikator-data-strategis-export','backend\IndikatorDataStrategisController@export');
Route::get('/indikator-data-strategis','backend\IndikatorDataStrategisController@index');
Route::post('/indikator-data-strategis/hapus','backend\IndikatorDataStrategisController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pajak-retribusi-daerah-import','backend\PajakRetribusiDaerahController@import');
Route::post('/pajak-retribusi-daerah-import','backend\PajakRetribusiDaerahController@aksiimport');
Route::get('/pajak-retribusi-daerah-export','backend\PajakRetribusiDaerahController@export');
Route::get('/pajak-retribusi-daerah','backend\PajakRetribusiDaerahController@index');
Route::post('/pajak-retribusi-daerah/hapus','backend\PajakRetribusiDaerahController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/program-unggulan-import','backend\ProgramUnggulanController@import');
Route::post('/program-unggulan-import','backend\ProgramUnggulanController@aksiimport');
Route::get('/program-unggulan-export','backend\ProgramUnggulanController@export');
Route::get('/program-unggulan','backend\ProgramUnggulanController@index');
Route::post('/program-unggulan/hapus','backend\ProgramUnggulanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pariwisata-import','backend\PariwisataController@import');
Route::post('/pariwisata-import','backend\PariwisataController@aksiimport');
Route::get('/pariwisata-export','backend\PariwisataController@export');
Route::get('/pariwisata','backend\PariwisataController@index');
Route::post('/pariwisata/hapus','backend\PariwisataController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pertanian-import','backend\PertanianController@import');
Route::post('/pertanian-import','backend\PertanianController@aksiimport');
Route::get('/pertanian-export','backend\PertanianController@export');
Route::get('/pertanian','backend\PertanianController@index');
Route::post('/pertanian/hapus','backend\PertanianController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/kehutanan-import','backend\KehutananController@import');
Route::post('/kehutanan-import','backend\KehutananController@aksiimport');
Route::get('/kehutanan-export','backend\KehutananController@export');
Route::get('/kehutanan','backend\KehutananController@index');
Route::post('/kehutanan/hapus','backend\KehutananController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/energi-dan-sumber-daya-mineral-import','backend\EnergisumberdayaController@import');
Route::post('/energi-dan-sumber-daya-mineral-import','backend\EnergisumberdayaController@aksiimport');
Route::get('/energi-dan-sumber-daya-mineral-export','backend\EnergisumberdayaController@export');
Route::get('/energi-dan-sumber-daya-mineral','backend\EnergisumberdayaController@index');
Route::post('/energi-dan-sumber-daya-mineral/hapus','backend\EnergisumberdayaController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/perindustrian-import','backend\PerindustrianController@import');
Route::post('/perindustrian-import','backend\PerindustrianController@aksiimport');
Route::get('/perindustrian-export','backend\PerindustrianController@export');
Route::get('/perindustrian','backend\PerindustrianController@index');
Route::post('/perindustrian/hapus','backend\PerindustrianController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/perdagangan-import','backend\PerdaganganController@import');
Route::post('/perdagangan-import','backend\PerdaganganController@aksiimport');
Route::get('/perdagangan-export','backend\PerdaganganController@export');
Route::get('/perdagangan','backend\PerdaganganController@index');
Route::post('/perdagangan/hapus','backend\PerdaganganController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/perikanan-import','backend\PerikananController@import');
Route::post('/perikanan-import','backend\PerikananController@aksiimport');
Route::get('/perikanan-export','backend\PerikananController@export');
Route::get('/perikanan','backend\PerikananController@index');
Route::post('/perikanan/hapus','backend\PerikananController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/perencanaan-pembangunan-import','backend\PerencanaanPembangunanController@import');
Route::post('/perencanaan-pembangunan-import','backend\PerencanaanPembangunanController@aksiimport');
Route::get('/perencanaan-pembangunan-export','backend\PerencanaanPembangunanController@export');
Route::get('/perencanaan-pembangunan','backend\PerencanaanPembangunanController@index');
Route::post('/perencanaan-pembangunan/hapus','backend\PerencanaanPembangunanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-keuangan-import','backend\KeuanganController@import');
Route::post('/data-keuangan-import','backend\KeuanganController@aksiimport');
Route::get('/data-keuangan-export','backend\KeuanganController@export');
Route::get('/data-keuangan','backend\KeuanganController@index');
Route::post('/data-keuangan/hapus','backend\KeuanganController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-kepegawaian-import','backend\KepegawaianController@import');
Route::post('/data-kepegawaian-import','backend\KepegawaianController@aksiimport');
Route::get('/data-kepegawaian-export','backend\KepegawaianController@export');
Route::get('/data-kepegawaian','backend\KepegawaianController@index');
Route::post('/data-kepegawaian/hapus','backend\KepegawaianController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-penelitian-pengembangan-import','backend\PenelitianPengembanganController@import');
Route::post('/data-penelitian-pengembangan-import','backend\PenelitianPengembanganController@aksiimport');
Route::get('/data-penelitian-pengembangan-export','backend\PenelitianPengembanganController@export');
Route::get('/data-penelitian-pengembangan','backend\PenelitianPengembanganController@index');
Route::post('/data-penelitian-pengembangan/hapus','backend\PenelitianPengembanganController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-pengawasan-import','backend\PengawasanController@import');
Route::post('/data-pengawasan-import','backend\PengawasanController@aksiimport');
Route::get('/data-pengawasan-export','backend\PengawasanController@export');
Route::get('/data-pengawasan','backend\PengawasanController@index');
Route::post('/data-pengawasan/hapus','backend\PengawasanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/sekertariat-dewan-import','backend\DewanController@import');
Route::post('/sekertariat-dewan-import','backend\DewanController@aksiimport');
Route::get('/sekertariat-dewan-export','backend\DewanController@export');
Route::get('/sekertariat-dewan','backend\DewanController@index');
Route::post('/sekertariat-dewan/hapus','backend\DewanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/sekertariat-daerah-import','backend\SekertariatDaerahController@import');
Route::post('/sekertariat-daerah-import','backend\SekertariatDaerahController@aksiimport');
Route::get('/sekertariat-daerah-export','backend\SekertariatDaerahController@export');
Route::get('/sekertariat-daerah','backend\SekertariatDaerahController@index');
Route::post('/sekertariat-daerah/hapus','backend\SekertariatDaerahController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/kesehatan-import','backend\KesehatanController@import');
Route::post('/kesehatan-import','backend\KesehatanController@aksiimport');
Route::get('/kesehatan-export','backend\KesehatanController@export');
Route::get('/kesehatan','backend\KesehatanController@index');
Route::post('/kesehatan/hapus','backend\KesehatanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/ketentraman-ketertiban-import','backend\KeamananKetertibanController@import');
Route::post('/ketentraman-ketertiban-import','backend\KeamananKetertibanController@aksiimport');
Route::get('/ketentraman-ketertiban-export','backend\KeamananKetertibanController@export');
Route::get('/ketentraman-ketertiban','backend\KeamananKetertibanController@index');
Route::post('/ketentraman-ketertiban/hapus','backend\KeamananKetertibanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pekerjaan-umum-import','backend\PekerjaanUmumController@import');
Route::post('/pekerjaan-umum-import','backend\PekerjaanUmumController@aksiimport');
Route::get('/pekerjaan-umum-export','backend\PekerjaanUmumController@export');
Route::get('/pekerjaan-umum','backend\PekerjaanUmumController@index');
Route::post('/pekerjaan-umum/hapus','backend\PekerjaanUmumController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/perumahan-rakyat-import','backend\PerumahanRakyatController@import');
Route::post('/perumahan-rakyat-import','backend\PerumahanRakyatController@aksiimport');
Route::get('/perumahan-rakyat-export','backend\PerumahanRakyatController@export');
Route::get('/perumahan-rakyat','backend\PerumahanRakyatController@index');
Route::post('/perumahan-rakyat/hapus','backend\PerumahanRakyatController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pendidikan-import','backend\PendidikanController@import');
Route::post('/pendidikan-import','backend\PendidikanController@aksiimport');
Route::get('/pendidikan-export','backend\PendidikanController@export');
Route::get('/pendidikan','backend\PendidikanController@index');
Route::post('/pendidikan/hapus','backend\PendidikanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/sosial-import','backend\SosialController@import');
Route::post('/sosial-import','backend\SosialController@aksiimport');
Route::get('/sosial-export','backend\SosialController@export');
Route::get('/sosial','backend\SosialController@index');
Route::post('/sosial/hapus','backend\SosialController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/tenaga-kerja-import','backend\TenagaKerjaController@import');
Route::post('/tenaga-kerja-import','backend\TenagaKerjaController@aksiimport');
Route::get('/tenaga-kerja-export','backend\TenagaKerjaController@export');
Route::get('/tenaga-kerja','backend\TenagaKerjaController@index');
Route::post('/tenaga-kerja/hapus','backend\TenagaKerjaController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pemberdayaan-perempuan-import','backend\PemberdayaanPerempuanController@import');
Route::post('/pemberdayaan-perempuan-import','backend\PemberdayaanPerempuanController@aksiimport');
Route::get('/pemberdayaan-perempuan-export','backend\PemberdayaanPerempuanController@export');
Route::get('/pemberdayaan-perempuan','backend\PemberdayaanPerempuanController@index');
Route::post('/pemberdayaan-perempuan/hapus','backend\PemberdayaanPerempuanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pangan-import','backend\PanganController@import');
Route::post('/pangan-import','backend\PanganController@aksiimport');
Route::get('/pangan-export','backend\PanganController@export');
Route::get('/pangan','backend\PanganController@index');
Route::post('/pangan/hapus','backend\PanganController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pertanahan-import','backend\PertanahanController@import');
Route::post('/pertanahan-import','backend\PertanahanController@aksiimport');
Route::get('/pertanahan-export','backend\PertanahanController@export');
Route::get('/pertanahan','backend\PertanahanController@index');
Route::post('/pertanahan/hapus','backend\PertanahanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/lingkungan-hidup-import','backend\LingkunganHidupController@import');
Route::post('/lingkungan-hidup-import','backend\LingkunganHidupController@aksiimport');
Route::get('/lingkungan-hidup-export','backend\LingkunganHidupController@export');
Route::get('/lingkungan-hidup','backend\LingkunganHidupController@index');
Route::post('/lingkungan-hidup/hapus','backend\LingkunganHidupController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-sipil-import','backend\SipilController@import');
Route::post('/data-sipil-import','backend\SipilController@aksiimport');
Route::get('/data-sipil-export','backend\SipilController@export');
Route::get('/data-sipil','backend\SipilController@index');
Route::post('/data-sipil/hapus','backend\SipilController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-pemberdayaan-masyarakat-import','backend\PemberdayaanMasyarakatController@import');
Route::post('/data-pemberdayaan-masyarakat-import','backend\PemberdayaanMasyarakatController@aksiimport');
Route::get('/data-pemberdayaan-masyarakat-export','backend\PemberdayaanMasyarakatController@export');
Route::get('/data-pemberdayaan-masyarakat','backend\PemberdayaanMasyarakatController@index');
Route::post('/data-pemberdayaan-masyarakat/hapus','backend\PemberdayaanMasyarakatController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/pengendalian-penduduk-import','backend\PengendalianPendudukController@import');
Route::post('/pengendalian-penduduk-import','backend\PengendalianPendudukController@aksiimport');
Route::get('/pengendalian-penduduk-export','backend\PengendalianPendudukController@export');
Route::get('/pengendalian-penduduk','backend\PengendalianPendudukController@index');
Route::post('/pengendalian-penduduk/hapus','backend\PengendalianPendudukController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-perhubungan-import','backend\PerhubunganController@import');
Route::post('/data-perhubungan-import','backend\PerhubunganController@aksiimport');
Route::get('/data-perhubungan-export','backend\PerhubunganController@export');
Route::get('/data-perhubungan','backend\PerhubunganController@index');
Route::post('/data-perhubungan/hapus','backend\PerhubunganController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-kominfo-import','backend\KominfoController@import');
Route::post('/data-kominfo-import','backend\KominfoController@aksiimport');
Route::get('/data-kominfo-export','backend\KominfoController@export');
Route::get('/data-kominfo','backend\KominfoController@index');
Route::post('/data-kominfo/hapus','backend\KominfoController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-modal-import','backend\ModalController@import');
Route::post('/data-modal-import','backend\ModalController@aksiimport');
Route::get('/data-modal-export','backend\ModalController@export');
Route::get('/data-modal','backend\ModalController@index');
Route::post('/data-modal/hapus','backend\ModalController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-olahraga-import','backend\OlahragaController@import');
Route::post('/data-olahraga-import','backend\OlahragaController@aksiimport');
Route::get('/data-olahraga-export','backend\OlahragaController@export');
Route::get('/data-olahraga','backend\OlahragaController@index');
Route::post('/data-olahraga/hapus','backend\OlahragaController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-statistik-import','backend\StatistikController@import');
Route::post('/data-statistik-import','backend\StatistikController@aksiimport');
Route::get('/data-statistik-export','backend\StatistikController@export');
Route::get('/data-statistik','backend\StatistikController@index');
Route::post('/data-statistik/hapus','backend\StatistikController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-persandian-import','backend\PersandianController@import');
Route::post('/data-persandian-import','backend\PersandianController@aksiimport');
Route::get('/data-persandian-export','backend\PersandianController@export');
Route::get('/data-persandian','backend\PersandianController@index');
Route::post('/data-persandian/hapus','backend\PersandianController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-kebudayaan-import','backend\KebudayaanController@import');
Route::post('/data-kebudayaan-import','backend\KebudayaanController@aksiimport');
Route::get('/data-kebudayaan-export','backend\KebudayaanController@export');
Route::get('/data-kebudayaan','backend\KebudayaanController@index');
Route::post('/data-kebudayaan/hapus','backend\KebudayaanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-perpustakaan-import','backend\PerpustakaanController@import');
Route::post('/data-perpustakaan-import','backend\PerpustakaanController@aksiimport');
Route::get('/data-perpustakaan-export','backend\PerpustakaanController@export');
Route::get('/data-perpustakaan','backend\PerpustakaanController@index');
Route::post('/data-perpustakaan/hapus','backend\PerpustakaanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-kearsipan-import','backend\KearsipanController@import');
Route::post('/data-kearsipan-import','backend\KearsipanController@aksiimport');
Route::get('/data-kearsipan-export','backend\KearsipanController@export');
Route::get('/data-kearsipan','backend\KearsipanController@index');
Route::post('/data-kearsipan/hapus','backend\KearsipanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-koperasi-import','backend\KoperasiController@import');
Route::post('/data-koperasi-import','backend\KoperasiController@aksiimport');
Route::get('/data-koperasi-export','backend\KoperasiController@export');
Route::get('/data-koperasi','backend\KoperasiController@index');
Route::post('/data-koperasi/hapus','backend\KoperasiController@destroy');
