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
                        <h3 class="text-white mb-2"><a href="{{ route('devhome') }}"><i class="fas fa-home"></i></a> ->
                            Form Add Data</h3>
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
                                <h4 class="card-title">Form Paket Belajar</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('Price-List.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Kategori Paket</label>
                                    <input type="text" class="form-control" name="kategori" placeholder="Input Periode Paket">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Paket Belajar</label>
                                    <input type="text" class="form-control" name="paket" placeholder="Input Paket Belajar">
                                </div>
                                <div class="form-group">
                                    <label for="">Peretmuan</label>
                                    <input type="text" class="form-control" name="pertemuan" placeholder="Input Pertemuan">
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas Belajar</label>
                                    <input type="text" class="form-control" name="kelas" placeholder="Input Paket Belajar">
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Paket Belajar</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" id="rupiah" name="harga"
                                            aria-describedby="basic-addon3" placeholder="Input Harga Paket Belajar">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="editor">Editor</label>
                                    <input autocomplete="off" type="text" class="form-control" name="editor"
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm text-white ml-auto" type="submit">Simpan
                                        Data</button>
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
