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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Transaksi Tentor</h3>
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
        <!-- Table -->
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="row">
                                <div class="col-sm-12 col-md-6" style="width: 1450px;">
                                    <h4 class="card-title">Data Transaksi Tentor</h4>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <a href="{{route('Demo.create')}}" class="btn btn-primary btn-round btn-md text-white">
                                        <i class="fa fa-plus"></i>
                                        Add data
                                    </a>
                                    <a href="ExportDataPaymenTentor" class="btn btn-success btn-round btn-md text-white">
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
                                        <th>kode Transaksi</th>
                                        <th>Nama Tentor</th>
                                        <th>Nominal Gaji Tentor</th>
                                        <th>Periode Pembayaran Gaji</th>
                                        <th>Tanggal Pembayaran Gaji</th>
                                        <th>Keterangan</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Editor</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1;
                                    @endphp
                                    @forelse($upah as $row)
                                    <tr>
                                        <td>{{ $id++}}</td>
                                        <td>{{ $row->kode_transaksi}}</td>
                                        <td>{{ $row->nama_tentor}}</td>
                                        <td>{{ $row->nominal_gaji}}</td>
                                        <td>{{ $row->periode_bayar}}</td>
                                        <td>{{ $row->tanggal_bayar}}</td>
                                        <td>{{ $row->keterangan}}</td>
                                        <td><a href="{{ asset('BuktiBayar/Tentor/' .$row->bukti_bayar)}}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a></td>
                                        <td>{{ $row->editor}}</td>
                                        <td>
                                            <a href="{{ route('Fee-Tentor.edit', $row->id)}}" class="btn btn-warning btn-sm" style="width: 50px; margin-top:5px;"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('Fee-Tentor.destroy', $row->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" style="width: 50px; margin-top:5px;" onclick="return confirm('Apakah anda ingin menghapus data? {{$row->nama_tentor}}')">
                                                    <i class=" fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <a href="{{ route('invoice-Tentor.edit', $row->id)}}" class="btn btn-primary btn-sm" style="width: 50px; margin-top:5px;"><i class="fas fa-file-invoice-dollar"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="14" class="text-center">
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
