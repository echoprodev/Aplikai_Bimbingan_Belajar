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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Invoice Transaksi</h3>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <h5 class="text-white mb-2 mr-5 h3" id="tanggal"></h5>
                    <h5 class="text-white mb-2 mr-5 h3" id="jam"></h5>
                    <!-- <a href="#" class="btn btn-secondary btn-round">Add Customer</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-inner">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <form method="post" action="{{route('Fee-Tentor.update', $siswa->id)}}">
                            @csrf
                            @method('PUT')

                            <table border="0">
                                <tr>
                                    <td class="text-center">
                                        <img class="navbar-brand" src="{{ asset('assets/front/img/flashschool/logo-black.png')}}" alt="" width="150px">
                                    </td>
                                    <td colspan="2" style="font-size: 12px;"><b>Gg. Tpq, Manaruwi, Kec. Bangil, Pasuruan, Jawa Timur <br>www.flashschool.id</b></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-center h3">Bukti Pembayaran Siswa</td>
                                </tr>
                                <tbody>
                                    <tr>
                                        <td colspan="3">====================================</td>
                                    </tr>
                                    <tr>
                                        <td>No. Transaksi</td>
                                        <td>:</td>
                                        <td>{{$siswa->kode_transaksi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Siswa</td>
                                        <td>:</td>
                                        <td>{{$siswa->nama_siswa}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pemabayaran Bulan</td>
                                        <td>:</td>
                                        <td>{{$siswa->periode_bayar}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 150px;">Tanggal Pembayaran</td>
                                        <td>:</td>
                                        <td>{{$siswa->tanggal_bayar}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nominal Pembayaran</td>
                                        <td>:</td>
                                        <td>{{$siswa->nominal_bayar}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Pembayaran</td>
                                        <td>:</td>
                                        <td>{{$siswa->status_bayar}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">====================================</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">{{$siswa->created_at}}</td>
                                        <td>Admin</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td>{{$siswa->editor}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.backend.footer')
@endsection
