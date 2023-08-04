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

    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Form Edit Transaksi Siswa</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('Pembayaran-Lainnya.update', $other->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kd_tentor">No. Transaksi</label>
                                <input type="text" class="form-control" id="text" name="kode_transaksi" value="{{$other->kode_transaksi}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="status">Jenis Transaksi</label>
                                <select name="kategori_bayar" id="" class="form-control">
                                    <option value="Pemasukkan"{{$other->kategori_bayar == 'Pemasukkan' ? 'selected' : ''}}>Pemasukkan</option>
                                    <option value="Pengeluaran" {{$other->kategori_bayar == 'Pengeluaran' ? 'selected' : ''}}>Pengeluaran</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lahir">Periode Pembayaran</label>
                                <input autocomplete="off" type="text" class="form-control" id="periode" name="periode_bayar" value="{{$other->periode_bayar}}">
                            </div>
                            <div class="form-group">
                                <label for="tgl_join">Tanggal Pembayaran</label>
                                <input autocomplete="off" type="text" class="form-control tgl" name="tanggal_bayar" value="{{$other->tanggal_bayar}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Nominal Pembayaran</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" name="nominal_bayar" value="{{$other->nominal_bayar}}" aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="{{$other->keterangan}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Bukti Transaksi</label>
                                <input type="file" id="bukti_gambar" class="form-control" value="{{ asset('BuktiBayar/Lainnya/'. $other->bukti_bayar)}}" name="bukti_bayar">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('BuktiBayar/Lainnya/'. $other->bukti_bayar)}}" alt="" width="50%">
                            </div>
                            <div class="form-group">
                                <label for="editor">Editor</label>
                                <input autocomplete="off" type="text" class="form-control" name="editor" value="{{$other->editor}}" readonly>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm text-white ml-auto" type="submit">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.backend.footer')
@endsection
