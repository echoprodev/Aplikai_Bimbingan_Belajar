@extends('layouts.backend')
@section('content')
<div class="content">
    <div class="panel-header bg-dark-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard Development</h2>
                    <h5 class="text-white op-7 mb-2"></h5>
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Form Edit Data -> <i>{{
                                $cabang->kode_cabang
                            }}</i></h3>
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
                            <h4 class="card-title">Edit Data Cabang</h4>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" action="{{route('cabang.update', $cabang->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode_cabang">Nama Lengkap</label>
                            <input type="text" class="form-control" id="text" name="kode_cabang" value="{{$cabang->kode_cabang}}" placeholder="Input Nama Lenkap">
                        </div>
                        <div class="form-group">
                            <label for="wilayah_cabang">Tempat/Tanggal Lahir</label>
                            <input type="text" class="form-control" id="text" name="wilayah_cabang" value="{{$cabang->wilayah_cabang}}" placeholder="Input Tempat/Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="alamat_cabang">Alamat Cabang</label>
                            <input type="text" class="form-control" id="text" name="alamat_cabang" value="{{$cabang->alamat_cabang}}" placeholder="Input Jenis Kelamin">
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
@endsection
