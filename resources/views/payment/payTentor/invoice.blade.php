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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Form Add Data</h3>
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
                        <form method="post" action="{{route('Fee-Tentor.update', $gaji->id)}}">
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
                                    <td colspan="3" class="text-center h3">Bukti Pembayaran Fee Tentor</td>
                                </tr>
                                <tbody>
                                    <tr>
                                        <td colspan="3">===================================</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 170px;">No. Transaksi</td>
                                        <td>:</td>
                                        <td>{{$gaji->kode_transaksi}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 170px;">Nama Tentor</td>
                                        <td>:</td>
                                        <td>{{$gaji->nama_tentor}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 170px;">Fee Bulan</td>
                                        <td>:</td>
                                        <td>{{$gaji->periode_bayar}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 170px;">Tanggal Menerima Fee</td>
                                        <td>:</td>
                                        <td>{{$gaji->tanggal_bayar}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 170px;">Nominal Fee</td>
                                        <td>:</td>
                                        <td>{{$gaji->nominal_gaji}}</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 170px;">Status Fee</td>
                                        <td>:</td>
                                        <td>{{$gaji->status_bayar}}</td>
                                    </tr>
                                </tbody>
                                <tr>
                                    <td colspan="3">====================================</td>
                                </tr>
                                <tr>
                                    <td colspan="2">{{$gaji->created_at}}</td>
                                    <td>Admin</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>{{$gaji->editor}}</td>
                                </tr>
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
