@extends('layouts.backend')
@section('content')
<div class="content">
    <div class="panel-header bg-dark-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    @if (Auth::user()->role == 'development')
                    <h2 class="text-white pb-2 fw-bold">Dashboard Development</h2>
                    @else
                    <h2 class="text-white pb-2 fw-bold">Dashboard Administrator</h2>
                    @endif
                    <h5 class="text-white op-7 mb-2"></h5>
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> View Data</h3>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <h5 class="text-white mb-2 mr-5 h3" id="tanggal"></h5>
                    <h5 class="text-white mb-2 mr-5 h3" id="jam"></h5>
                    <!-- <a href="#" class="btn btn-secondary btn-round">Add Customer</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-inner mt--5">
        <div class="row">
            <!-- Tentor -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
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
                <div class="card card-stats card-primary card-round">
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
                <div class="card card-stats card-primary card-round">
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
                <div class="card card-stats card-primary card-round">
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
                <div class="card card-stats card-round">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="row">
                                <div class="col-sm-6 col-md-6" style="width: 1500px;">
                                    <h4 class="card-title">Data Siswa</h4>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <a href="{{route('Demo-Siswa.create')}}" class="btn btn-primary btn-round btn-md text-white">
                                        <i class="fa fa-plus"></i>
                                        Add data
                                    </a>
                                    <a href="ExportDataSiswa" class="btn btn-success btn-round btn-md text-white">
                                        <i class="fas fa-file-export"></i>
                                        Export data
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Absen/Kode Siswa</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Asal Sekolah</th>
                                        <th>Kelas</th>
                                        <th>No Whatsapp</th>
                                        <th>Sumber Info</th>
                                        <th>Alamat</th>
                                        <th>Wali Murid</th>
                                        <th>Nama Tentor</th>
                                        <th>Jadwal Bimbel</th>
                                        <th>Jumlah Pertemuan</th>
                                        <th>Jumlah Pembayaran</th>
                                        <th>Tanggal Join</th>
                                        <th>Status</th>
                                        <th>Editor</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1;
                                    @endphp
                                    @forelse($murid as $row)
                                    <tr>
                                        <td>{{ $id++}}</td>
                                        <td>{{ $row->kode_siswa}}</td>
                                        <td>{{ $row->nama_siswa}}</td>
                                        <td>{{ $row->lahir}}</td>
                                        <td>{{ $row->jenis_kelamin}}</td>
                                        <td>{{ $row->asal_sekolah}}</td>
                                        <td>{{ $row->kelas}}</td>
                                        <td>{{ $row->no_hp}}</td>
                                        <td>{{ $row->sumber_info}}</td>
                                        <td>{{ $row->alamat_rumah}}</td>
                                        <td>{{ $row->wali_siswa}}</td>
                                        <td>{{ $row->nama_tentor}}</td>
                                        <td>{{ $row->jadwal_les}}</td>
                                        <td>{{ $row->jumlah_pertemuan}}</td>
                                        <td>{{ $row->pembayaran}}</td>
                                        <td>{{ $row->tgl_join}}</td>
                                        <td>{{ $row->status}}</td>
                                        <td>{{ $row->editor}}</td>
                                        <td>
                                            <a href="{{ route('Demo-Siswa.edit', $row->id)}}" class="btn btn-warning btn-sm" style="width: 50px; margin-top:5px;"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('Demo-Siswa.destroy', $row->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" style="width: 50px; margin-top:5px;" onclick="return confirm('Apakah anda ingin menghapus data ({{$row->nama_siswa}})?')"">
                                                <i class=" fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="21">
                                            Data Masih Kosong
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
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
