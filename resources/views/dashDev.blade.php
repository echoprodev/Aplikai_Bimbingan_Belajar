@extends('layouts.backend')
@section('content')
<div class="content">
    <div class="panel-header bg-dark-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard Development</h2>
                    <h5 class="text-white op-7 mb-2">Tanggal</h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <h5 class="text-white op-7 mb-2 mr-5">Jam</h5>
                    <!-- <a href="#" class="btn btn-secondary btn-round">Add Customer</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-inner mt--5">
        <div class="row">
            <!-- Tentor -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats bg-primary card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fas fa-chalkboard-teacher text-white"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category text-white">Tentor</p>
                                    <h4 class="card-title text-white">{{$data_tentor}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- siswa -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats bg-primary card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fas fa-user-graduate text-white"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category text-white">Siswa</p>
                                    <h4 class="card-title text-white">{{$data_murid}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- admin -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats bg-primary card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category text-white">Admin</p>
                                    <h4 class="card-title text-white">{{$data_admin}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cabang -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats bg-primary card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fas fa-building text-white"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category text-white">Cabang</p>
                                    <h4 class="card-title text-white">{{$data_cabang}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header h1">Profile Saya</div>
                    <div class="card-body">
                        <table>
                            <tr class="h3">
                                <td style="width: 150px;">Nama</td>
                                <td style="width: 15px;">:</td>
                                <td>{{Auth::user()->name}}</td>
                            </tr>
                            <tr class="h3">
                                <td>Email</td>
                                <td>:</td>
                                <td>{{Auth::user()->email}}</td>
                            </tr>
                            <tr class="h3">
                                <td>Hak Akses</td>
                                <td>:</td>
                                <td>{{Auth::user()->role}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="footer fixed-buttom bg-dark">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.themekita.com">
                        ThemeKita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Help
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright ml-auto">
            2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
        </div>
    </div>
</footer>
@endsection
