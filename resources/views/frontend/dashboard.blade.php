@extends('layouts/frontend/base')

@section('content')

<body>
    <div class="container-fluid">
{{-- 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                @if($hitung > 0)
                @php $i=0; @endphp
                @foreach($banner as $slider)
                @if($i == 0)
                <div class="carousel-item active text-right">
                    @else
                    <div class="carousel-item text-right">
                        @endif
                        <img src="{{asset('images/slider/'.$slider->gambar)}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block right-caption text-left" style="
          padding-bottom: 200px;">
                            <h1 style=" display: inline-block;background-color:black;padding:5px;opacity: 0.5;">
                                {{$slider->judul}}</h1>
                            <br>
                            <h5 style=" display: inline-block;background-color:black;padding:5px;opacity: 0.5;">
                                {{$slider->isi}}</h5>
                        </div>
                    </div>
                    @php $i++; @endphp
                    @endforeach
                    @endif
                    <div class="row mb-0" style="margin-top: 570px;padding-left: 10%;padding-right: 10%;" id="card">
                        <div class="col-md-4" style="padding:0px;">
                            <div class="card pb-0 mb-1" style="background-color: #133251;">
                                <div class="card-body text-white row">
                                    <div class="col-lg-2 col-12 text-center" style="vertical-align: middle;">
                                        <i class="fa fa-database fa-2x mr-2"></i>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                        <b> Penyedia Data Yang Cepat</b>
                                        <br><span>long established fact that</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding-left:2px; padding-right: 2px;">
                            <div class="card mb-1 pb-0" style="background-color: #133251;">
                                <div class="card-body text-white row">
                                    <div class="col-lg-2 col-12 text-center" style="vertical-align: middle;">
                                        <i class="fa fa-desktop fa-2x mr-2"></i>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                        <b> Penyedia Data Yang Cepat</b>
                                        <br><span>long established fact that</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding:0px;">
                            <div class="card pb-0 mb-1" style="background-color: #133251;">
                                <div class="card-body text-white row">
                                    <div class="col-lg-2 col-12 text-center" style="vertical-align: middle;">
                                        <i class="fa fa-laptop fa-2x mr-2"></i>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                        <b> Penyedia Data Yang Cepat</b>
                                        <br><span>long established fact that</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0" style="margin-top: 510px;padding-left: 6%;padding-right: 6%;" id="minicard">
                        <div class="col-12" style="padding:0px;height: 50px;">
                            <div class="card" style="background-color: #133251;">
                                <div class="card-body text-white text-center" style="padding:10px;">
                                    <h5 class="card-text"><b><i class="fa fa-database"></i> Penyedia Data Yang Cepat</b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="padding:0px;height: 50px;">
                            <div class="card" style="background-color: #133251;">
                                <div class="card-body text-white text-center" style="padding:10px;">
                                    <h5 class="card-text"><b><i class="fa fa-desktop"></i> Data Multiguna Untuk
                                            Kebijakan</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="padding:0px;height: 50px;">
                            <div class="card" style="background-color: #133251;">
                                <div class="card-body text-white text-center" style="padding:10px;">
                                    <h5 class="card-text"><b><i class="fa fa-laptop"></i> Data Yang Tepat Dan Akurat</b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" style="width: 100px;" href="#carouselExampleIndicators" role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" style="width: 100px;" href="#carouselExampleIndicators" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div>
        </div> --}}
        <!-- section 1 -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="img/Section1BG.png" class="d-block w-100" alt="...">
              <style>
                .carousel-caption {
                      top: 30%;
                      bottom: auto;
                  }
              </style>
              <div class="carousel-caption d-flex justify-content-center ">
                <div class="text-center col-8">
                  <h1 class="text-white">Menghubungkan, Mengamankan, dan Mengelola Data Anda!</h1>
                  <p class="text-white">Membantu anda mengelola data dengan mudah, termasuk pengumpulan,
                      penyimpanan dan pengorganisasian data.</p>    
            </div>
          </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

    <!-- section 2 -->
        <section class="container section-2">
            <div class="d-flex section-2-container">
            <div class="poin1 d-flex section-2-item">
                <img src="img/Icon.png" alt="">
                <span class="text-center">Penyedia Data Yang Cepat</span>
            </div>
            <div class="poin2 d-flex section-2-item">
                <img src="img/Icon(1).png" alt="">
                <span class="text-center">Penyedia Data Yang Cepat</span>
            </div>
            <div class="poin3 d-flex section-2-item">
                <img src="img/Icon(2).png" alt="">
                <span class="text-center">Penyedia Data Yang Cepat</span>
            </div>
            </div>
        </section>
        {{-- <div class="container-fluit"
            style="background-color: #E9EEEF;padding-right: 7%;padding-left: 7%;padding-top: 3%;">
            <div class="row" style="background-color: #E9EEEF;padding-bottom: 3%;margin-right: 3%;margin-left: 3%;">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="display-5"><b>Lorem Ipsum is simply dummy text</b></h4>
                            <p class="lead" style="font-size:17px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center" style="background-color: #005FB9;">
                            <h4 class="text-white">
                                <b>
                                    Peringkat Pengisian Data OPD
                                </b>
                            </h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-white" style="background-color: #133251;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size:15px;">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <h2>Berita Terkini</h2>
                </div>
                @foreach($data as $berita)
                <div class="col-md-3">
                    <a href="{{ url('/detail-berita/'.$berita->slug)}}" style="color:#133251;">
                        <div class="card pl-1 pt-1 pr-1 pb-1 mb-0">
                            <img src="{{asset('images/berita/'.$berita->gambar)}}" class="card-img-top imgcustom"
                                alt="...">
                        </div>
                        <div class="card-body text-center pt-2">
                            {{$berita->judul}}
                        </div>
                    </a>
                </div>
                @endforeach

                <div class="col-md-12 mt-4">
                    <h2>Artikel Terbaru</h2>
                </div>
                @foreach($data2 as $artikel)
                <div class="col-md-3">
                    <a href="{{ url('/detail-artikel/'.$artikel->slug)}}" style="color:#133251;">
                        <div class="card pl-1 pt-1 pr-1 pb-1 mb-0">
                            <img src="{{asset('images/artikel/'.$artikel->gambar)}}" class="card-img-top imgcustom"
                                alt="...">
                        </div>
                        <div class="card-body text-center pt-2">
                            {{$artikel->judul}}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div> --}}
        <section class="container" id="berita">
            <h3>Berita dan Siaran</h3>
            <p style="color: #AAAAAA;">Berita dan informasi seputar Pemerintahan Kabupaten Wakatobi</p>
            <div class="row mt-3">
              <!-- Picture Slider  -->
              <div class="col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card">
                        <img src="img/CardPicture.png" class="card-img" alt="...">
                        <div class="card-img-overlay card-container">
                          <h5 class="card-title">Bersinergi Kembangkan Wakatobi</h5>
                          <div class="d-flex">
                            <img src="img/Vector.png" alt="">
                            <p class="card-text">Rabu, 05 Juli 2023 </p>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card">
                        <img src="img/CardPicture.png" class="card-img" alt="...">
                        <div class="card-img-overlay card-container">
                          <h5 class="card-title">Bersinergi Kembangkan Wakatobi</h5>
                          <div class="d-flex">
                            <img src="img/Vector.png" alt="">
                            <p class="card-text">Rabu, 05 Juli 2023 </p>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card">
                        <img src="img/CardPicture.png" class="card-img" alt="...">
                        <div class="card-img-overlay card-container">
                          <h5 class="card-title">Bersinergi Kembangkan Wakatobi</h5>
                          <div class="d-flex">
                            <img src="img/Vector.png" alt="">
                            <p class="card-text">Rabu, 05 Juli 2023 </p>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              <!-- News Content -->
              <div class="col-lg-6">
                <div class="kategori d-flex">
                  <div class="kategori-btn d-flex">
                    <div class="btn1 me-4">Terbaru</div>
                    <div class="btn2">Populer</div>
                  </div>
                  <a href="">Lihat Semua</a>
                </div>
                <div class="news-content-container">
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                  <div class="news-content-item d-flex">
                    <img class="frame" src="img/image12.png" alt="">
                    <div class="news-content-text">
                      <h6>Bersinergi Kembangkan Wakatobi</h6>
                      <div class="d-flex">
                        <img src="img/date_range.png" alt="">
                        <p class="card-text">Hari ini </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!-- Section 4 -->
        <div class="row" id="galeri">
            <section id="galeri">
                <div class="container">
                    <h3>Galeri</h3>
                    <p>Kumpulan Galeri dari Kegiatan Pemerintahan Kabupaten Wakatobi</p>
                    <div class="row mt-3">
                    <div class="col-lg-6">
                        <a href="">
                        <div class="card card-galeri">
                            <img src="img/image4.png" class="card-img" alt="...">
                            <img class="yt" src="img/logos_youtube-icon.png" alt="">
                            <div class="card-img-overlay card-container">
                            <h5 class="card-title">Bersinergi Kembangkan Wakatobi</h5>
                            <div class="d-flex">
                                <img src="img/Vector.png" alt="">
                                <p class="card-text">Rabu, 05 Juli 2023 </p>
                            </div>
                            
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-6 galeri-items">
                        <div class=" galeri-item"><img src="img/Frame29.png" alt=""></div>
                        <div class="  galeri-item"><img src="img/Frame30.png" alt=""></div>
                    </div>
                    </div>
                </div>
                </section>
        </div>
        <!-- Section 5 -->
            <section id="artikel">
            <div class="container">
                <div class="d-flex justify-content-between"><div>
                <h3>Artikel Populer</h3>
                <p style="color: #AAAAAA;">Artikel seputar Pemerintahan Kabupaten Wakatobi</p>
                </div>
                <div class="page-button">
                <img src="img/Frame75.png" alt="">
                <img src="img/Frame74.png" alt="">
                </div>
            </div>
                <div class="row mt-3">
                    <div class="col-lg-5 artikel-img">
                    <img src="img/Frame72.png" alt="">
                    </div>
                    <div class="col-lg-7  box">
                    <h3>HUT Republik Indonesia yang ke-77</h3>
                    <p>Hari Ulang Tahun Republik Indonesia ke-77 adalah perayaan yang memperingati kemerdekaan Indonesia dari penjajahan. Setiap tanggal 17 Agustus, seluruh rakyat Indonesia merayakan dengan semangat dan kebanggaan.</p>
                    <p>
                        Perayaan ini mengingatkan kita akan perjuangan para pahlawan yang telah berjuang untuk memperoleh kemerdekaan. Kemerdekaan Indonesia yang kita nikmati saat ini adalah hasil dari perjuangan dan pengorbanan mereka.
                    </p>
                    </div>
                </div>
            </div>
            </section>
        <!-- Section 6 -->
        <section id="tentang-kami" class="mb-3">
            <div class="container">
            <h3>Tentang Kami</h3>
            <p style="color: #AAAAAA;">Informasi dari Portal Resmi Kabupaten Wakatobi</p>
            <div class="row">
                <div class="col-lg-6 ">
                <img src="img/Frame28.png" alt="">
                </div>
                <div class="col-lg-6 about-content-item">
                <div class="content">
                <h3>Kabupaten Wakatobi</h3>
                <p>Pengolahan data Kabupaten Wakatobi merupakan proses penting dalam mengelola informasi dan statistik terkait wilayah tersebut. Kabupaten Wakatobi menggunakan teknologi dan sistem informasi modern untuk mengumpulkan, menyimpan, menganalisis, dan mengelola data yang beragam.
                    Pengolahan data ini meliputi data demografi penduduk, data ekonomi, data kependudukan, data lingkungan, data kesehatan, dan data lainnya yang relevan. </p>
                </div>
                <div class="d-flex button-container"> <a href=""><div class="button-about">Lihat Lebih Banyak</div></a></div>
                </div>
                
            </div>
            </div>
        </section>
    </div>
{{-- 
    <div class="container-fluit" style="padding-right: 7%;padding-left: 7%;padding-top: 1%;">
        <div class="row" style="padding-bottom: 3%;margin-right: 3%;margin-left: 3%;">
            <div class="col-md-12 mt-2">
                <h2>Galeri</h2>
            </div>
            @foreach($data3 as $galeri)
            <div class="col-md-3">
                <a href="#" data-toggle="modal" data-target="#galeri{{$galeri->id}}">
                    <img src="{{asset('images/galeri/'.$galeri->gambar)}}" class="card-img-top img-thumnail imgcustom"
                        alt="..." style="border: solid #E6E9E8 4px;">
                    <div class="card-body text-center" style="background-color:none;">
                        {{$galeri->judul}}
                    </div>
                </a>
                <div class="modal fade" id="galeri{{$galeri->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$galeri->judul}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('images/galeri/'.$galeri->gambar)}}"
                                    class="card-img-top img-thumnail imgcustom" alt="..."
                                    style="border: solid #E6E9E8 4px;">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div> --}}
<div class="continer-fluid" style="margin-top: 15px">
    <div class="row">
        @include('layouts/frontend/footer')
    </div>
</div>
    <script>
        let nav = document.querySelector('nav')
        function remove() {
            nav.classList.remove('bg-dark', 'shadow')
        }
        remove()
        window.addEventListener('scroll',function () {
        nav.classList.remove('bg-dark', 'shadow')
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow')
        } else {
            nav.classList.remove('bg-dark', 'shadow')
        }
        });
    </script>
    <script src="{{asset('customjs/script.js')}}"></script>
</body>
@endsection