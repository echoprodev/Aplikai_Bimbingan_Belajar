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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Form Add Data Tentor Day</h3>
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
                            <h4 class="card-title">Pilih Data</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="course" class="form-label">Data Siswa</label>
                            <select name="" id="pilih-data" class="form-control" autocomplete="off">
                                <option label="Cari Data Siswa"></option>
                                @foreach ($siswa as $row)
                                <option value="{{ $row->nama_siswa}}">{{ $row->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="course" class="form-label">Data Tentor</label>
                            <select name="" id="data-tentor" class="form-control" autocomplete="off">
                                <option label="Cari Data Tentor"></option>
                                @foreach ($siswa as $data)
                                <option value="{{ $data->nama_tentor }}">({{ $data->kode_siswa }}) - ( Nama: {{ $data->nama_siswa }} ) - ( Nama Tentor: {{ $data->nama_tentor }})</option>
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
                            <h4 class="card-title">Form Kualitas Pelayanan (Tentor)</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('Tentor-Day.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Siswa</label>
                                <input type="text" class="form-control" id="data-nama" name="nama_siswa" autocomplete="off" readonly placeholder="Input Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Tentor</label>
                                <input type="text" class="form-control" id="tentor" name="nama_tentor" readonly placeholder="Input Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Informasi</label>
                                <input type="text" class="form-control" name="informasi">
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


@include('includes.backend.footer')

<script>
    var data = document.getElementById("pilih-data");
    data.onchange = function() {
        var nama = document.getElementById("data-nama");
        nama.value = this.value;
    };
</script>

<script>
    var item = document.getElementById("data-tentor");
    item.onchange = function() {
        var tentor = document.getElementById("tentor");
        tentor.value = this.value;
    };
</script>
@endsection
