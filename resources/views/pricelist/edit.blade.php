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
                            <form method="post" action="{{ route('Price-List.update', $paket->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="">Kategori Paket</label>
                                    <select name="kategori" id="">
                                        <option value="1 Bulan" {{$paket->kategori == '1 Bulan' ? 'selected' : ''}}>1 Bulan</option>
                                        <option value="3 Bulan" {{$paket->kategori == '3 Bulan' ? 'selected' : ''}}>3 Bulan</option>
                                        <option value="6 Bulan" {{$paket->kategori == '6 Bulan' ? 'selected' : ''}}>6 Bulan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Paket Belajar</label>
                                    <select name="paket" id="">
                                        <option value="Normal" {{$paket->paket == 'Normal' ? 'selected' : ''}}>Paket Normal</option>
                                        <option value="Insentif" {{$paket->paket == 'Insentif' ? 'selected' : ''}}>Paket Insentif</option>
                                        <option value="ExtraInsentif" {{$paket->paket == 'ExtraInsentif' ? 'selected' : ''}}>Paket Extra Insentif</option>
                                        <option value="Premium" {{$paket->paket == 'Premium' ? 'selected' : ''}}>Paket Premium</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas Belajar</label>
                                    <select name="kelas" id="">
                                        <option value="TK/SD/MI" {{$paket->kelas == 'TK/SD/MI' ? 'selected' : ''}}>TK/SD/MI</option>
                                        <option value="SMP/MTS" {{$paket->kelas == 'SMP/MTS' ? 'selected' : ''}}>SMP/MTS</option>
                                        <option value="SMA/SMK/MA" {{$paket->kelas == 'SMA/SMK/MA' ? 'selected' : ''}}>SMA/SMK/MA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Paket Belajar</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" id="rupiah" name="harga"
                                            aria-describedby="basic-addon3" value="{{$paket->harga}}">
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
