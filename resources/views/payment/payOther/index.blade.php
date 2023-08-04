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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Transaksi Lainnya</h3>
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
                                    <h4 class="card-title">Data Transaksi Lainnya</h4>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <a href="{{route('Pembayaran-Lainnya.create')}}" class="btn btn-primary btn-round btn-md text-white">
                                        <i class="fa fa-plus"></i>
                                        Add data
                                    </a>
                                    <a href="ExportDataPaymentOther" class="btn btn-success btn-round btn-md text-white">
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
                                        <th>No. Transaksi</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Nominal Pembayaran</th>
                                        <th>Periode Pembayaran</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Bukti Transaksi</th>
                                        <th>Keterangan</th>
                                        <th>Editor</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1;
                                    @endphp
                                    @forelse($bayar as $row)
                                    <tr>
                                        <td>{{ $id++}}</td>
                                        <td>{{ $row->kode_transaksi}}</td>
                                        <td>{{ $row->kategori_bayar}}</td>
                                        <td>{{ $row->nominal_bayar}}</td>
                                        <td>{{ $row->periode_bayar}}</td>
                                        <td>{{ $row->tanggal_bayar}}</td>
                                        <td><a href="{{ asset('BuktiBayar/Lainnya/'.  $row->bukti_bayar )}}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a></td>
                                        <td>{{ $row->keterangan}}</td>
                                        <td>{{ $row->editor}}</td>
                                        <td>
                                            <a href="{{ route('Pembayaran-Lainnya.edit', $row->id)}}" class="btn btn-warning btn-sm" style="width: 50px; margin-top:5px;"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('Pembayaran-Lainnya.destroy', $row->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" style="width: 50px; margin-top:5px;" onclick="return confirm('Apakah anda ingin menghapus data? {{$row->nama_tentor}}')">
                                                    <i class=" fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <a href="{{ route('invoice-Lainnya.edit', $row->id)}}" class="btn btn-primary btn-sm" style="width: 50px; margin-top:5px;"><i class="fas fa-file-invoice-dollar"></i></a>
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


@include('includes.backend.footer')
@endsection
