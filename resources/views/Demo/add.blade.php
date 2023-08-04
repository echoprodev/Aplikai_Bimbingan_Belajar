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
                            <h4 class="card-title">Pilih Data Tentor</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="" id="pilih-data" class="form-control" autocomplete="off">
                                <option label="Cari Data Siswa"></option>
                                @foreach ($siswa as $row)
                                <option value="{{ $row->nama_tentor}}">({{ $row->nama_tentor }}) - {{ $row->periode_bayar }}</option>
                                @endforeach
                            </select>
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
                            <h4 class="card-title">Form Transaksi Gaji Tentor</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('Fee-Tentor.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="kd_tentor">Kode Transaksi</label>
                                <input type="text" class="form-control" id="text" name="kode_transaksi" value="{{'FS-TFT'.$kd}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Nama Tentor</label>
                                <input type="text" class="form-control" id="data-nama" readonly name="nama_tentor" placeholder="Input Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="lahir">Periode Pembayaran</label>
                                <input autocomplete="off" type="text" class="form-control" id="periode" name="periode_bayar" placeholder="mm-yyyy">
                            </div>
                            <div class="form-group">
                                <label for="tgl_join">Tanggal Pembayaran</label>
                                <input autocomplete="off" type="text" class="form-control tgl" name="tanggal_bayar" placeholder="dd-mm-yyyy">
                            </div>

                            <div class="form-group">
                                <label for="nama_tentor">Nominal Gaji</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" name="nominal_gaji" aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Upload Bukti Transaksi</label>
                                <input type="file" id="bukti_gambar" class="form-control" name="bukti_bayar">
                            </div>
                            <div class="form-group">
                                <label for="editor">Editor</label>
                                <input autocomplete="off" type="text" class="form-control" name="editor" value="{{Auth::user()->name}}" readonly>
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
<script>
    var data = document.getElementById("pilih-data");
    data.onchange = function() {
        var nama = document.getElementById("data-nama");
        nama.value = this.value;
    };
</script>
@endsection
