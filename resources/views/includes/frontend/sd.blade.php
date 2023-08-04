<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program Belajar TK-SD-MI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front/img/flashschool/favicon.png') }}">
    <!-- Load Require CSS -->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{ asset('assets/front/css/boxicon.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/templatemo.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/custom.css') }}">
    <!--

    TemplateMo 561 Purple Buzz

    https://templatemo.com/tm-561-purple-buzz

    -->
</head>

<body>
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
                            <a class="nav-link btn-outline-primary rounded-pill px-3"
                                href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="#program">Program
                                Belajar</a>
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
                    <a class="btn btn-primary btn-sm rounded-pill btn-block shadow px-4 py-2"
                        href="{{ route('login') }}" style="margin-right: 5px;" target="_blank">Login</a>
                    <div class="dropdown">
                        <button class="btn btn-primary btn-sm rounded-pill btn-block shadow px-4 py-2" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Daftar
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item"
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSdaGwdy_YOL157sWmkzZjidMw-OiVzXYwg9RGJKgUbaCuIAAQ/viewform"
                                    target="_blank">Tentor</a></li>
                            <li><a class="dropdown-item"
                                    href="https://api.whatsapp.com/send?phone=6282124024035&text=Saya%20tertarik%20dengan%20paket belajar%20Normal 1 bulan di%20flashschool, Bagaimana caranya mendaftar?"
                                    target="_blank">Siswa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Start pricing -->
    <div class="container-lg py-5">
        <div class="col-md-12 mt-2 text-center py-5">
            <img class="card-img service" src="{{ asset('assets/front/img/flashschool/cover-tk-sd-mi-01.jpg') }}">
            <h1 class="pricing-header h2 semi-bold-600"></h1>
            <p class="pricing-footer">
                Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut facilisis.
            </p>
        </div>


        <div class="row px-lg-3">


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">Free Plan</h2>
                        <p>$0</p>
                        <ul class="pricing-table-body text-start text-dark px-4 list-unstyled light-300">
                            <li><i class="bx bxs-circle me-2"></i>5 Users</li>
                            <li><i class="bx bxs-circle me-2"></i>2 TB space</li>
                            <li><i class="bx bxs-circle me-2"></i>Community Forums</li>
                            <li><i class="bx bxs-circle me-2"></i>Email Support</li>
                        </ul>
                        <div class="pricing-table-footer pt-5">
                            <a href="#" class="btn rounded-pill px-4 btn-outline-primary light-300">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
                <div class="pricing-table card bg-secondary h-100 card-rounded shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center text-white align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-white py-3"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">Standard Plan</h2>
                        <p>$120/Year</p>
                        <ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>25 to 99 Users</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>10 TB space</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Source Files</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Live Chat</li>
                        </ul>
                        <div class="pricing-table-footer pt-5 pb-2">
                            <a href="#" class="btn rounded-pill px-4 btn-outline-light light-300">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">Enterprise</h2>
                        <p>$840/Year</p>
                        <ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li><i class="bx bxs-circle me-2"></i>100 users or more</li>
                            <li><i class="bx bxs-circle me-2"></i>80 TB space</li>
                            <li><i class="bx bxs-circle me-2"></i>Full Access Sources</li>
                            <li><i class="bx bxs-circle me-2"></i>Live Chat</li>
                            <li><i class="bx bxs-circle me-2"></i>Customizations</li>
                        </ul>
                        <div class="pricing-table-footer pt-1">
                            <a href="#" class="btn rounded-pill px-4 btn-outline-primary light-300">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Content -->





    <!-- Start Pricing Horizontal Section -->
    <section class="bg-light pt-sm-0 py-5">
        <div class="container py-5">

            <h1 class="h2 semi-bold-600 text-center mt-2">Our Pricing</h1>
            <p class="text-center pb-5 light-300">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                facilisis.</p>

            <!-- Start Pricing Horizontal -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 semi-bold-600 pb-4 light-300">Free</h5>
                </div>
                <div
                    class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                        <li><i class="bx bxs-circle me-2"></i>5 Users</li>
                        <li><i class="bx bxs-circle me-2"></i>2 TB space</li>
                        <li><i class="bx bxs-circle me-2"></i>Community Forums</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <p>$0</p>
                        <a href="#" class="btn rounded-pill px-4 btn-outline-primary mb-3">Get Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Horizontal -->

            <!-- Start Pricing Horizontal -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5 bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 semi-bold-600 pb-4 light-300">Standard</h5>
                </div>
                <div
                    class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                        <li><i class="bx bxs-circle me-2"></i>25 to 99 Users</li>
                        <li><i class="bx bxs-circle me-2"></i>10 TB space</li>
                        <li><i class="bx bxs-circle me-2"></i>Live Chat</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <p>$120/Year</p>
                        <a href="#" class="btn rounded-pill px-4 btn-outline-primary mb-3">Get Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Horizontal -->

            <!-- Start Pricing Horizontal -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 semi-bold-600 pb-4 light-300">Enterprise</h5>
                </div>
                <div
                    class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                        <li><i class="bx bxs-circle me-2"></i>100 users or more</li>
                        <li><i class="bx bxs-circle me-2"></i>80 TB space</li>
                        <li><i class="bx bxs-circle me-2"></i>Full Access</li>
                        <li><i class="bx bxs-circle me-2"></i>Customizations</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <p>$840/Year</p>
                        <a href="#" class="btn rounded-pill px-4 btn-outline-primary mb-3">Get Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Horizontal -->

        </div>
    </section>
    <!--End Pricing Horizontal Section-->

    <section class="container py-5">

        <h1 class="h2 semi-bold-600 text-center pt-5">Pricing</h1>
        <p class="text-center pb-5 light-300">
            Vector illustration from <a rel="nofollow" href="https://storyset.com/" target="_blank">StorySet</a>.
            Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut facilisis.
        </p>

        <div class="row d-flex align-items-center pb-5">

            <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                <img class="rounded float-right" src="./assets/img/pricing.svg">
            </div>

            <div class="col-lg-6">

                <!-- Start Pricing List -->
                <div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
                    <div class="row p-2">
                        <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
                            <i class="display-3 bx bx-package"></i>
                        </div>
                        <div class="pricing-list-body col-md-5 align-items-center pl-3 pt-2">
                            <ul class="list-unstyled text-center light-300">
                                <li class="h5 semi-bold-600 mb-0 mt-3">Free</li>
                                <li>Deserunt mollit laborum.</li>
                            </ul>
                        </div>
                        <div class="pricing-list-footer col-4 text-center m-auto align-items-center">
                            <a href="#" class="btn rounded-pill px-4 btn-primary light-300">$0</a>
                        </div>
                    </div>
                </div>
                <!-- End Pricing List -->

                <!-- Start Pricing List -->
                <div class="pricing-list shadow-sm py-sm-0 py-5">
                    <div class="row p-2">
                        <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
                            <i class="display-3 bx bx-package"></i>
                        </div>
                        <div class="pricing-list-body col-md-5 align-items-center pl-3 pt-2">
                            <ul class="list-unstyled text-center light-300">
                                <li class="h5 semi-bold-600 mb-0 mt-3">Standard</li>
                                <li>Adipiscing elit, sed do</li>
                            </ul>
                        </div>
                        <div class="pricing-list-footer col-sm-4 col-5 text-center m-auto align-items-center">
                            <a href="#" class="btn rounded-pill px-4 btn-primary light-300">$120/Year</a>
                        </div>
                    </div>
                </div>
                <!-- End Pricing List -->

                <!-- Start Pricing List -->
                <div class="pricing-list shadow-sm rounded-botton rounded-3 py-sm-0 py-5">
                    <div class="row p-2">
                        <div class="pricing-list-icon col-sm-3 text-center m-auto text-secondary ml-5 py-2">
                            <i class="display-3 bx bx-package"></i>
                        </div>
                        <div class="pricing-list-body col-md-5 align-items-center pl-3 pt-2">
                            <ul class="list-unstyled text-center light-300">
                                <li class="h5 semi-bold-600 mb-0 mt-3">Enterprise</li>
                                <li>Sed do eiusmod tempor</li>
                            </ul>
                        </div>
                        <div class="pricing-list-footer col-sm-4 col-5 text-center m-auto align-items-center">
                            <a href="#" class="btn rounded-pill px-4 btn-primary light-300">$840/Year</a>
                        </div>
                    </div>
                </div>
                <!-- End Pricing List -->
                <p class="text-center"><a class="btn px-4 mt-4 mx-auto btn-outline-primary" href="#">Get Now</a>
                </p>


            </div>
        </div>
    </section>


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


    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Templatemo -->
    <script src="{{ asset('assets/js/templatemo.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
