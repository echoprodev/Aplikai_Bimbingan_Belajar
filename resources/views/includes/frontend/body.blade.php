<!-- Header -->
<nav id="main_nav" class="navbar navbar-expand-lg navbar-light fixed-top shadow" style="background-color: #e2e0ff">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand h1" href="{{ url('/') }}">
            <img src="{{ asset('assets/front/img/flashschool/favicon-01.png') }}" alt="" width="250px">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
            id="navbar-toggler-success">
            <div class="flex-fill mx-xl-5 mb-2">
                <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark"
                    style="font-size: 18px">
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="#program">Program Belajar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="#galeri">Galeri Belajar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <a class="btn btn-primary btn-sm rounded-pill btn-block shadow px-4 py-2" href="{{ route('login') }}" style="margin-right: 5px;" target="_blank">Login</a>
                <div class="dropdown">
                    <button class="btn btn-primary btn-sm rounded-pill btn-block shadow px-4 py-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Daftar
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSdaGwdy_YOL157sWmkzZjidMw-OiVzXYwg9RGJKgUbaCuIAAQ/viewform" target="_blank">Tentor</a></li>
                        <li><a class="dropdown-item" href="https://api.whatsapp.com/send?phone=6282124024035&text=Saya%20tertarik%20dengan%20paket belajar%20Normal 1 bulan di%20flashschool, Bagaimana caranya mendaftar?" target="_blank">Siswa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Close Header -->


<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-white display-3 mb-0 pb-5 mx-0 px-0 typo-space-line">
                                Bimbingan Belajar <strong>Flash School</strong>
                                <br>A Better Future Starts Here
                            </h1>
                            <p class="banner-body text-white py-3 mx-0 px-0" style="font-size: 20px">
                                Lembaga Bimbingan Belajar berdiri sejak tahun 2017.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-white display-3 mb-0 pb-5 mx-0 px-0 typo-space-line">
                                Yuk Belajar Bersama <strong>Flash School</strong>
                                <br>A Better Future Starts Here
                            </h1>
                            <p class="banner-body text-white py-3 mx-0 px-0" style="font-size: 20px">
                                Lembaga Bimbingan Belajar Flash School Menyediakan layanan Class & Private Course.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-white display-3 mb-0 pb-5 mx-0 px-0 typo-space-line">
                                Kenapa Harus Belajar di <strong>Flash School?</strong>
                            </h1>
                            <p class="banner-body text-white py-3" style="font-size: 20px">
                                1. Tentor Berkualitas (S1 PTN & PTS Ternama).<br>
                                2. Les Private Harga Terjangkau.<br>
                                3. Fokus & Terpantau.<br>
                                4. Bebas Pilih Jam Belajar.<br>
                            </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button"
                    data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button"
                    data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->



    <!-- Start Service -->
    <section class="service-wrapper py-3">
        <div class="container-fluid pb-3" id="program">
            <div class="row">
                <h2 class="h2 text-center col-12 py-5 semi-bold-600">Program Belajar</h2>
                <div class="service-header col-2 col-lg-3 text-end">
                    <i class='bx bx-gift h3 mt-1'></i>
                </div>
                <div class="service-heading col-10 col-lg-9 text-start float-end">
                    <h2 class="h3 pb-4 typo-space-line">Mari Belajar Bersama Flash School</h2>
                </div>
            </div>
            <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 px-2" style="font-size: 18px">
                Lembaga Bimbingan Belajar Memiliki Program Belajar Mulai dari Tk, SD/Mi, SMP/MTS, SMA/SMK/MA
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

            <!-- Start Recent Work -->
            <div class="col-xl-4 col-md-4 col-sm-6 project ui branding">
                <div class="card">
                    <img class="service card-img" src="{{ asset('assets/front/img/flashschool/tk-sd-mi-01.jpg') }}"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kelas 1, 2, 3, 4 ,5 dan 6</h5>
                        <p class="card-text">Belajar Semua Mata Pelajaran, Mengerjakan PR, Calltung, Mengaji,
                            Bahasa Asing, Belajar Persiapan UTS, UAS dan Ujian Nasional.</p>
                        <a href="{{url('Program-TK-SD-MI')}}" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Lihat Program</a>
                    </div>
                </div>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-xl-4 col-md-4 col-sm-6 project ui graphic">
                <div class="card">
                    <img class="service card-img" src="{{ asset('assets/front/img/flashschool/smp-mts-01.jpg') }}"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kelas 7, 8 , dan 9</h5>
                        <p class="card-text">Belajar Semua Mata Pelajaran, Mengerjakan PR, Calltung, Mengaji,
                            Bahasa Asing, Belajar Persiapan UTS, UAS dan Ujian Nasional.</p>
                        <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Lihat Program</a>
                    </div>
                </div>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-xl-4 col-md-4 col-sm-6 project ui graphic">
                <div class="card">
                    <img class="service card-img" src="{{ asset('assets/front/img/flashschool/sma-smk-ma-01.jpg') }}"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kelas 10, 11 dan 12</h5>
                        <p class="card-text">Belajar Semua Mata Pelajaran, Mengerjakan PR, Calltung, Mengaji,
                            Bahasa Asing, Belajar Persiapan UTS, UAS, Ujian Nasional dan SBMPN.</p>
                        <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Lihat Program</a>
                    </div>
                </div>
            </div><!-- End Recent Work -->

        </div>
    </section>
    <!-- End Service -->






    <!-- Start View Work -->
    <section style="background-color: #e2e0ff">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12  align-items-center">
                    <img src="{{ asset('assets/front/img/flashschool/favicon-01.png') }}" alt="" width="250px">
                </div>
                <div class="col-lg-7 col-12 pt-2">
                    <h3><strong>A Better Future Starts Here</strong></h3>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    <a href="https://api.whatsapp.com/send?phone=6289515779010&text=Saya%20tertarik%20untuk%20belajar%20di%20flashschool"
                        target="_blank" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->

    <!-- Start Recent Work -->
    <section class="py-5 mb-5">
        <div class="container" id="galeri">
            <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Galeri Belajar</h2>
            </div>
            <div class="row gy-5 g-lg-5 mb-4">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg">
                        <img class="service card-img" src="{{ asset('assets/front/img/flashschool/galeri01.jpeg') }}">
                        <div class="recent-work-vertical align-items-end">
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg">
                        <img class="service card-img" src="{{ asset('assets/front/img/flashschool/galeri02.jpeg') }}">
                        <div class="recent-work-vertical align-items-end">
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg">
                        <img class="service card-img" src="{{ asset('assets/front/img/flashschool/galeri03.jpeg') }}">
                        <div class="recent-work-vertical align-items-end">
                        </div>
                    </a>
                </div><!-- End Recent Work -->
            </div>
        </div>
    </section>
    <!-- End Recent Work -->



    <!-- Start Footer -->
    <footer class="pt-4" style="background-color: #e2e0ff">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-8 col-12 align-left">
                    <img src="{{ asset('assets/front/img/flashschool/favicon-01.png') }}" alt="" width="250px">
                    <p class=" my-lg-4 my-2">
                        Lembaga Bimbingan Belajar Flash School Berdiri Sejak Tahun 2017, Menyediakan Layanan Class &
                        Private Course.
                    </p>
                </div>

                <div class="col-lg-4 col-md-4 my-sm-0 mt-4 text-center" id="kontak">
                    <h3 class="h4 pb-lg-3 ">HUBUNGI KAMI VIA</h2>
                        <a href="https://www.instagram.com/flash.school/?hl=id" target="_blank">
                            <img src="{{ asset('assets/front/img/flashschool/instagram.png') }}" alt=""
                                width="50px"></a>
                        <a>atau</a>
                        <a href="https://api.whatsapp.com/send?phone=6289515779010&text=Saya%20tertarik%20untuk%20belajar%20di%20flashschool"
                            target="_blank">
                            <img src="{{ asset('assets/front/img/flashschool/whatsapp.png') }}" alt=""
                                width="50px"></a>
                </div>
            </div>
        </div>

        <div class="w-100 py-3" style="background-color: #62C7E3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-12 col-sm-12">
                        <p class="text-center ">
                            <strong>Flash School © Copyright 2022</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
