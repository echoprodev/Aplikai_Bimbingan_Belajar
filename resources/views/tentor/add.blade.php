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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Form Add Data Tentor</h3>
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
                            <h4 class="card-title">Add Data Tentor</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('tentor.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="kd_tentor">Kode Tentor</label>
                                <input type="text" class="form-control" id="text" name="kode_tentor" value="{{'FS-T'.$kd}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Nama Lengkap</label>
                                <input type="text" class="form-control" id="text" name="nama_tentor" placeholder="Input Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" autocomplete="off" id="" class="form-control">
                                    <option label="Pilih Jenis Kelamin"></option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lahir">Tanggal Lahir</label>
                                <input autocomplete="off" type="text" class="form-control tgl" name="lahir" placeholder="dd-mm-yyyy">
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select name="agama" autocomplete="off" id="" class="form-control">
                                    <option label="Pilih Agama"></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Kristen">Kristen</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keahlian">Keahlian Mengajar</label>
                                <input type="text" class="form-control" id="text" name="keahlian" placeholder="Input keahlian">
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan/Menempuh Pendidikan</label>
                                <input type="text" class="form-control" id="text" name="pendidikan" placeholder="Input pendidikan">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="text" name="alamat" placeholder="Input alamat">
                            </div>
                            <div class="form-group">
                                <label for="tgl_join">Tanggal Bergabung</label>
                                <input autocomplete="off" type="text" class="form-control tgl" name="tgl_join" placeholder="dd-mm-yyyy">
                            </div>
                            <div class="form-group">
                                <label for="jenjang_mengajar">Jenjang Mengajar</label>
                                <select name="jenjang_mengajar" id="" class="form-control">
                                    <option label="Pilih Jenjang Mengajar" disabled></option>
                                    <option value="SD">SD</option>
                                    <option value="SD-SMP">SD-SMP</option>
                                    <option value="SD-SMP-SMA">SD-SMP-SMA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="aktif">Aktif</option>
                                    <option value="off">Off</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kd_cabang">Cabang Flash School</label>
                                <select name="kd_cabang" id="" class="form-control">
                                    <option label="Pilih Area Bekerja"></option>
                                    @foreach ($cabang as $row)
                                    <option value="{{ $row->wilayah_cabang}}">{{ $row->wilayah_cabang }}</option>
                                    @endforeach
                                </select>
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
