<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'frontend\DashboardController@index')->name('dashboard');
Route::get('/tentang-kami', 'frontend\DashboardController@tentangkami')->name('dashboard');
Route::get('/detail-berita/{slug}','frontend\DashboardController@detailberita');
Route::get('/detail-artikel/{slug}','frontend\DashboardController@detailartikel');
Route::get('/semua-berita','frontend\DashboardController@listberita');
Route::get('/semua-artikel','frontend\DashboardController@listartikel');
Route::get('/semua-galeri','frontend\DashboardController@listgaleri');
Route::get('/perangkingan','frontend\DashboardController@perangkingan');
//============================ROUTE INDEX PENCARIAN===============================================

// Route::prefix('profile-data')->group(function(){
//     Route::get('index','frontend\ProfilDataControl@index')->name('index.data');
//     Route::get('data-list/{lnk}/{ld}/{kat}','frontend\ProfilDataControl@listData')->name('data.umum');
//     Route::get('cari-data','frontend\ProfilDataControl@listPertahun')->name('lpertahun');
//     Route::get('/graph-data/{data}/{kode}/{t1}/{t2}','frontend\ProfilDataControl@listGraph');
// });

Route::get('/profile-data','frontend\DataumumController@index');
Route::get('/profile-kecamatan','frontend\KecamatanController@index');
Route::get('/profile-kecamatan/wangi-wangi-selatan','frontend\KecamatanController@wangiselatan');
Route::get('/profile-kecamatan/kaledupa','frontend\KecamatanController@kaledupa');
Route::get('/profile-kecamatan/kaledupa-selatan','frontend\KecamatanController@kaledupaselatan');
Route::get('/profile-kecamatan/tomia','frontend\KecamatanController@tomia');
Route::get('/profile-kecamatan/tomia-timur','frontend\KecamatanController@tomiatimur');
Route::get('/profile-kecamatan/binongko','frontend\KecamatanController@binongko');
Route::get('/profile-kecamatan/togo-binongko','frontend\KecamatanController@togobinongko');
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
Route::get('/data-non-wajib/lingkungan-hidup','frontend\DatanonwajibController@lingkunganhidup');
Route::get('/data-non-wajib/administrasi-kependudukan','frontend\DatanonwajibController@administrasikependudukan');
Route::get('/data-non-wajib/pemberdayaan-masyarakat','frontend\DatanonwajibController@pemberdayaanmasyarakat');
Route::get('/data-non-wajib/data-perhubungan','frontend\DatanonwajibController@dataperhubungan');
Route::get('/data-non-wajib/pengendalian-penduduk','frontend\DatanonwajibController@pengendalianpenduduk');
Route::get('/data-non-wajib/kominfo','frontend\DatanonwajibController@kominfo');
Route::get('/data-non-wajib/koperasi','frontend\DatanonwajibController@koperasi');
Route::get('/data-non-wajib/penanaman-modal','frontend\DatanonwajibController@penanamanmodal');
Route::get('/data-non-wajib/olahraga','frontend\DatanonwajibController@olahraga');
Route::get('/data-non-wajib/statistik','frontend\DatanonwajibController@statistik');
Route::get('/data-non-wajib/persandian','frontend\DatanonwajibController@persandian');
Route::get('/data-non-wajib/budaya','frontend\DatanonwajibController@budaya');
Route::get('/data-non-wajib/perpustakaan','frontend\DatanonwajibController@perpustakaan');
Route::get('/data-non-wajib/kearsipan','frontend\DatanonwajibController@kearsipan');

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
Route::get('/data-non-wajib/lingkungan-hidup/cari','frontend\DatanonwajibController@carilingkunganhidup');
Route::get('/data-non-wajib/administrasi-kependudukan/cari','frontend\DatanonwajibController@cariadministrasikependudukan');
Route::get('/data-non-wajib/pemberdayaan-masyarakat/cari','frontend\DatanonwajibController@caripemberdayaanmasyarakat');
Route::get('/data-non-wajib/data-perhubungan/cari','frontend\DatanonwajibController@caridataperhubungan');
Route::get('/data-non-wajib/pengendalian-penduduk/cari','frontend\DatanonwajibController@caripengendalianpenduduk');
Route::get('/data-non-wajib/kominfo/cari','frontend\DatanonwajibController@carikominfo');
Route::get('/data-non-wajib/koperasi/cari','frontend\DatanonwajibController@carikoperasi');
Route::get('/data-non-wajib/penanaman-modal/cari','frontend\DatanonwajibController@caripenanamanmodal');
Route::get('/data-non-wajib/olahraga/cari','frontend\DatanonwajibController@cariolahraga');
Route::get('/data-non-wajib/statistik/cari','frontend\DatanonwajibController@caristatistik');
Route::get('/data-non-wajib/persandian/cari','frontend\DatanonwajibController@caripersandian');
Route::get('/data-non-wajib/budaya/cari','frontend\DatanonwajibController@caribudaya');
Route::get('/data-non-wajib/perpustakaan/cari','frontend\DatanonwajibController@cariperpustakaan');
Route::get('/data-non-wajib/kearsipan/cari','frontend\DatanonwajibController@carikearsipan');


Route::get('/pertanahan/cari','frontend\DatanonwajibController@caripertanahan');
Route::get('/pemberdayaan/cari','frontend\DatanonwajibController@caripemberdayaan');
Route::get('/kesehatan/cari','frontend\DatawajibController@cari');
Route::get('/pendidikan/cari','frontend\DatawajibController@caripendidikan');
Route::get('/sosial/cari','frontend\DatawajibController@carisosial');
Route::get('/ketentraman-ketertiban/cari','frontend\DatawajibController@cariketentraman');
Route::get('/pekerjaan-umum/cari','frontend\DatawajibController@caripekerjaan');
Route::get('/perumahan-pemukiman/cari','frontend\DatawajibController@cariperumahan');
Route::get('/program-unggulan/cari','frontend\DatawajibController@cariunggulan');
Route::get('/profile-kecamatan/wangi-wangi/cari','frontend\KecamatanController@hasilwangi');
Route::get('/profile-kecamatan/wangi-wangi-selatan/cari','frontend\KecamatanController@hasilwangiselatan');
Route::get('/profile-kecamatan/kaledupa/cari','frontend\KecamatanController@hasilkaledupa');
Route::get('/profile-kecamatan/kaledupa-selatan/cari','frontend\KecamatanController@hasilkaledupaselatan');
Route::get('/profile-kecamatan/tomia/cari','frontend\KecamatanController@hasiltomia');
Route::get('/profile-kecamatan/tomia-timur/cari','frontend\KecamatanController@hasiltomiatimur');
Route::get('/profile-kecamatan/binongko/cari','frontend\KecamatanController@hasilbinongko');
Route::get('/profile-kecamatan/togo-binongko/cari','frontend\KecamatanController@hasiltogobinongko');
Auth::routes();
Route::get('/home', 'backend\HomeController@index')->name('home');
Route::get('/edit-profile', 'backend\HomeController@editprofile')->name('editprofile');
Route::post('/edit-profile/{id}', 'backend\HomeController@aksieditprofile');

//============================ROUTE Grafik===============================================
Route::get('wangi-wangi/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\KecamatanController@carigrafikwangi');
Route::get('wangi-wangi-selatan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\KecamatanController@carigrafikwangiselatan');
Route::get('kaledupa/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\KecamatanController@carigrafikkaledupa');
Route::get('kaledupa-selatan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\KecamatanController@carigrafikkaledupaselatan');
Route::get('tomia/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\KecamatanController@carigrafiktomia');
Route::get('tomia-timur/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\KecamatanController@carigrafiktomiatimur');
Route::get('binongko/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\KecamatanController@carigrafikbinongko');
Route::get('togo-binongko/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\KecamatanController@carigrafiktogobinongko');

Route::get('pendidikan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikpendidikan');
Route::get('geografis/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataumumController@carigrafikgeografis');
Route::get('indikator/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataumumController@carigrafikindikator');
Route::get('pajak-retribusi/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataumumController@carigrafikpajak');
Route::get('kesehatan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikkesehatan');
Route::get('sosial/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafiksosial');
Route::get('ketentraman-ketertiban/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikkeamanan');
Route::get('pekerjaan-umum/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikpekerjaanumum');
Route::get('perumahan-pemukiman/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikperumahan');
Route::get('program-unggulan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatawajibController@carigrafikprogramunggulan');
Route::get('tenaga-kerja/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafiktenagakerja');
Route::get('perencanaan-pembangunan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpenunjangController@carigrafikperencanaanpembangunan');
Route::get('keuangan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpenunjangController@carigrafikkeuangan');
Route::get('kepegawaian/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpenunjangController@carigrafikpegawai');
Route::get('penelitan-pengembangan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpenunjangController@carigrafikpenelitian');
Route::get('pengawasan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpenunjangController@carigrafikpengawasan');
Route::get('sekertariat-dewan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpenunjangController@carigrafikdewan');
Route::get('sekertariat-daerah/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpenunjangController@carigrafikdaerah');
Route::get('pariwisata/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpilihanController@carigrafikpariwisata');
Route::get('pertanian/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpilihanController@carigrafikpertanian');
Route::get('kehutanan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpilihanController@carigrafikkehutanan');
Route::get('perikanan-kelautan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpilihanController@carigrafikperikanan');

Route::get('perdagangan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpilihanController@carigrafikperdagangan');
Route::get('perindustrian/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpilihanController@carigrafikperindustrian');
Route::get('sumber-daya/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpilihanController@carigrafiksumberdaya');
Route::get('pangan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DataurusanpilihanController@carigrafikpangan');
Route::get('pertanahan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikpertanahan');
Route::get('pemberdayaan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikpemberdayaan');
Route::get('lingkungan-hidup/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafiklingkunganhidup');
Route::get('sipil/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafiksipil');
Route::get('pemberdayaan-masyarakat/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikpemberdayaanmasyarakat');
Route::get('data-perhubungan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikperhubungan');
Route::get('pengendalian-penduduk/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikpengendalianpenduduk');
Route::get('kominfo/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikkominfo');
Route::get('koperasi/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikkoperasi');
Route::get('modal/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikmodal');
Route::get('olahraga/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikolahraga');
Route::get('statistik/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikstatistik');
Route::get('persandian/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikpersandian');
Route::get('budaya/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikbudaya');
Route::get('perpustakaan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikperpustakaan');
Route::get('kearsipan/cari-grafik/{kode}/{tahunawal}/{tahunakhir}','frontend\DatanonwajibController@carigrafikkearsipan');


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


Route::get('/download-center','backend\DownloadCenterController@index');
Route::post('/download-center','backend\DownloadCenterController@store');
Route::get('/download-center/get-tahun/{namafile}','backend\DownloadCenterController@gettahun');


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

//----------------------------------------------------------------------------------------
Route::get('/data-kaledupa-import','backend\KaledupaController@import');
Route::post('/data-kaledupa-import','backend\KaledupaController@aksiimport');
Route::get('/data-kaledupa-export','backend\KaledupaController@export');
Route::get('/data-kaledupa','backend\KaledupaController@index');
Route::post('/data-kaledupa/hapus','backend\KaledupaController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-kaledupa-selatan-import','backend\KaledupaSelatanController@import');
Route::post('/data-kaledupa-selatan-import','backend\KaledupaSelatanController@aksiimport');
Route::get('/data-kaledupa-selatan-export','backend\KaledupaSelatanController@export');
Route::get('/data-kaledupa-selatan','backend\KaledupaSelatanController@index');
Route::post('/data-kaledupa-selatan/hapus','backend\KaledupaSelatanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-togobinongko-import','backend\TogobinongkoController@import');
Route::post('/data-togobinongko-import','backend\TogobinongkoController@aksiimport');
Route::get('/data-togobinongko-export','backend\TogobinongkoController@export');
Route::get('/data-togobinongko','backend\TogobinongkoController@index');
Route::post('/data-togobinongko/hapus','backend\TogobinongkoController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-binongko-import','backend\BinongkoController@import');
Route::post('/data-binongko-import','backend\BinongkoController@aksiimport');
Route::get('/data-binongko-export','backend\BinongkoController@export');
Route::get('/data-binongko','backend\BinongkoController@index');
Route::post('/data-binongko/hapus','backend\BinongkoController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-tomia-import','backend\TomiaController@import');
Route::post('/data-tomia-import','backend\TomiaController@aksiimport');
Route::get('/data-tomia-export','backend\TomiaController@export');
Route::get('/data-tomia','backend\TomiaController@index');
Route::post('/data-tomia/hapus','backend\TomiaController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-tomiatimur-import','backend\TomiatimurController@import');
Route::post('/data-tomiatimur-import','backend\TomiatimurController@aksiimport');
Route::get('/data-tomiatimur-export','backend\TomiatimurController@export');
Route::get('/data-tomiatimur','backend\TomiatimurController@index');
Route::post('/data-tomiatimur/hapus','backend\TomiatimurController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-wangi-import','backend\WangiController@import');
Route::post('/data-wangi-import','backend\WangiController@aksiimport');
Route::get('/data-wangi-export','backend\WangiController@export');
Route::get('/data-wangi','backend\WangiController@index');
Route::post('/data-wangi/hapus','backend\WangiController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/data-wangiselatan-import','backend\WangiselatanController@import');
Route::post('/data-wangiselatan-import','backend\WangiselatanController@aksiimport');
Route::get('/data-wangiselatan-export','backend\WangiselatanController@export');
Route::get('/data-wangiselatan','backend\WangiselatanController@index');
Route::post('/data-wangiselatan/hapus','backend\WangiselatanController@destroy');

//----------------------------------------------------------------------------------------
Route::get('/rangking','backend\RangkingController@index');
Route::get('/rangking/tampil','backend\RangkingController@show');
