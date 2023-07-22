<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        @if(Auth::user()->level=='Super Admin')
        <li class="nav-item">
            <a href="{{url('/admin')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Admin
                </p>
            </a>
        </li>
        @endif
        <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th-large"></i>
                <p>
                    Konten
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('menu')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('submenu')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Submenu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('halaman')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Halaman</p>
                    </a>
                </li>
            </ul>
        </li> -->
        @if(Auth::user()->level=='Super Admin'||Auth::user()->level=='Admin')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>
                    Berita
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('kategori-berita')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('berita')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Isi Berita</p>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin'||Auth::user()->level=='Admin')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-paint-brush"></i>
                <p>
                    Artikel
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('kategori-artikel')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('artikel')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('komentar')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Komentar</p>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP'|| Auth::user()->level=='BPPRD')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Data Umum
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP')
                <li class="nav-item">
                    <a href="{{url('data-geografis')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Geografis</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP')
                <li class="nav-item">
                    <a href="{{url('indikator-data-strategis')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Indikator Data Strategis</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='BPPRD')
                <li class="nav-item">
                    <a href="{{url('pajak-retribusi-daerah')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pajak & Retribusi Daerah</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin' ||
        Auth::user()->level=='DISPENDIKBUD'||
        Auth::user()->level=='DINKES'||
        Auth::user()->level=='RSUD'||
        Auth::user()->level=='DINAS PUPR'||
        Auth::user()->level=='SATPOL PP & PMK'||
        Auth::user()->level=='BPBD'||
        Auth::user()->level=='BKBP'||
        Auth::user()->level=='DPRKP'||
        Auth::user()->level=='DINSOS')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Data Wajib Dasar
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DINKES'|| Auth::user()->level=='RSUD')
                <li class="nav-item">
                    <a href="{{url('kesehatan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Kesehatan</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='DISPENDIKBUD'||Auth::user()->level=='Super Admin')
                <li class="nav-item">
                    <a href="{{url('pendidikan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pendidikan</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DINSOS')
                <li class="nav-item">
                    <a href="{{url('sosial')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Sosial</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='SATPOL PP & PMK'||Auth::user()->level=='BPBD'|| Auth::user()->level=='BKBP')
                <li class="nav-item">
                    <a href="{{url('ketentraman-ketertiban')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ketenteraman & Ketertiban</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DINAS PUPR')
                <li class="nav-item">
                    <a href="{{url('pekerjaan-umum')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pekerjaan Umum <br> & Penataan Ruang</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DPRKP')
                <li class="nav-item">
                    <a href="{{url('perumahan-rakyat')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Perumahan Rakyat<br>& Kawasan Pemukiman</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin'||
        Auth::user()->level=='DINKOP UKM TK'||
        Auth::user()->level=='DPPPAPMD'||
        Auth::user()->level=='DKP'||
        Auth::user()->level=='DISKOMINFO SP'||
        Auth::user()->level=='DLH'||
        Auth::user()->level=='DISPENDUK CAPIL'||
        Auth::user()->level=='DPPPAPMD'||
        Auth::user()->level=='DPPKB'||
        Auth::user()->level=='DISHUB'||
        Auth::user()->level=='DPMPTSP'||
        Auth::user()->level=='DISPORA'||
        Auth::user()->level=='DISPENDIKBUD'||
        Auth::user()->level=='DISPUSIP')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Data Wajib Non Dasar
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DINKOP UKM TK')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('tenaga-kerja')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tenaga Kerja</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DKP')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('pangan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pangan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('pertanahan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pertanahan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISPENDIKBUD')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-kebudayaan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Kebudayaan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISPUSIP')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-perpustakaan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Perpustakaan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISPUSIP')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-kearsipan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Kearsipan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DINKOP UKM TK')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-koperasi')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Koperasi</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-kominfo')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Kominfo</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISPORA')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-olahraga')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Olahraga</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-statistik')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Statistik</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-persandian')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Persandian</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DPMPTSP')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-modal')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Penanaman Modal</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISHUB')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-perhubungan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Perhubungan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DLH')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('lingkungan-hidup')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lingkungan Hidup</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DPPPAPMD')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('pemberdayaan-perempuan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pemberdayaan Perempuan <br> & Perlindungan Anak</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISPENDUK CAPIL')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-sipil')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Administrasi Kempendudukan <br> & Pencatatan Sipil</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DPPPAPMD')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-pemberdayaan-masyarakat')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pemberdayaan Masyarakat</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DPPKB')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('pengendalian-penduduk')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pengendalian <br> Penduduk & KB</p>
                    </a>
                </li>
            </ul>
            @endif
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin'||
        Auth::user()->level=='DKP'||
        Auth::user()->level=='DISPAR'||
        Auth::user()->level=='DISTAN'||
        Auth::user()->level=='DISPERINDAG'||
        Auth::user()->level=='DISKOMINFO SP')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Data Urusan Pilihan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISPAR')
                <li class="nav-item">
                    <a href="{{url('pariwisata')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pariwisata</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISTAN')
                <li class="nav-item">
                    <a href="{{url('pertanian')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pertanian</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISTAN')
                <li class="nav-item">
                    <a href="{{url('kehutanan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kehutanan</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISPERINDAG')
                <li class="nav-item">
                    <a href="{{url('perindustrian')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Perindustrian</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISPERINDAG')
                <li class="nav-item">
                    <a href="{{url('perdagangan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Perdagangan</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DKP')
                <li class="nav-item">
                    <a href="{{url('perikanan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Perikanan & Kelautan</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP')
                <li class="nav-item">
                    <a href="{{url('energi-dan-sumber-daya-mineral')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Energi & <br> Sumber Daya Mineral</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin'||
        Auth::user()->level=='BPPPD'||
        Auth::user()->level=='BPKAD'||
        Auth::user()->level=='BKPSDM'||
        Auth::user()->level=='INSPEKTORAT'||
        Auth::user()->level=='SEKDPRD'||
        Auth::user()->level=='SEKDA')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Data Urusan Penunjang
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='BPPPD')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('perencanaan-pembangunan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Perencanaan Pembangunan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='BPKAD')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-keuangan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Keuangan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='BKPSDM')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-kepegawaian')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Kepegawaian</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='BPPPD')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-penelitian-pengembangan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Penelitian & Pengembangan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='INSPEKTORAT')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('data-pengawasan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pengawasan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='SEKDPRD')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('sekertariat-dewan')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sekertariat Dewan</p>
                    </a>
                </li>
            </ul>
            @endif
            @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='SEKDA')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('sekertariat-daerah')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sekertariat Daerah</p>
                    </a>
                </li>
            </ul>
            @endif
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin'|| Auth::user()->level=='DISKOMINFO SP')
        <li class="nav-item">
            <a href="{{url('program-unggulan')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Program Unggulan Daerah
                </p>
            </a>
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin'||Auth::user()->level=='Admin')
        <li class="nav-item">
            <a href="{{url('/galeri')}}" class="nav-link">
                <i class="nav-icon fas fa-images"></i>
                <p>
                    Galeri
                </p>
            </a>
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin'||Auth::user()->level=='Admin')
        <li class="nav-item">
            <a href="{{url('/slider')}}" class="nav-link">
                <i class="nav-icon fas fa-image"></i>
                <p>
                    Slider
                </p>
            </a>
        </li>
        @endif
        @if(Auth::user()->level=='Super Admin')
        <li class="nav-item">
            <a href="{{url('/setting-web')}}" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Setting Web
                </p>
            </a>
        </li>
        @endif
    </ul>
</nav>