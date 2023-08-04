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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Form Add Data Siswa</h3>
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
                            <h4 class="card-title">Add Data Siswa</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('siswa.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="kode_siswa">Absen Siswa</label>
                                <input type="text" class="form-control" id="text" name="kode_siswa" value="{{'FS-S'.$kd}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_siswa">Nama Lenkap</label>
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Input Nama Lenkap">
                            </div>
                            <div class="form-group">
                                <label for="lahir">Tanggal Lahir</label>
                                <input type="text" class="form-control tgl" name="lahir" placeholder="dd-mm-yyyy">
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
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" class="form-control" id="text" name="asal_sekolah" placeholder="Input Asal Sekolah">
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select name="kelas" autocomplete="off" id="" class="form-control">
                                    <option label="Pilih Kelas"></option>
                                    <option value="TK - A">TK - A</option>
                                    <option value="TK - B">TK - B</option>
                                    <option value="SD - 1">SD - 1</option>
                                    <option value="SD - 2">SD - 2</option>
                                    <option value="SD - 3">SD - 3</option>
                                    <option value="SD - 4">SD - 4</option>
                                    <option value="SD - 5">SD - 5</option>
                                    <option value="SD - 6">SD - 6</option>
                                    <option value="SMP - 7">SMP - 7</option>
                                    <option value="SMP - 8">SMP - 8</option>
                                    <option value="SMP - 9">SMP - 9</option>
                                    <option value="SMA - 10">SMA - 10</option>
                                    <option value="SMA - 11">SMA - 11</option>
                                    <option value="SMA - 12">SMA - 12</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No.hp/Whatsapp</label>
                                <input type="text" class="form-control" id="text" name="no_hp" placeholder="Input No. Whatsapp">
                            </div>
                            <div class="form-group">
                                <label for="sumber_info">Sumber Informasi</label>
                                <input type="text" class="form-control" id="text" name="sumber_info" placeholder="Input Sumber Informasi yang didapat">
                            </div>
                            <div class="form-group">
                                <label for="alamat_rumah">Alamat</label>
                                <input type="text" class="form-control" id="text" name="alamat_rumah" placeholder="Input Alamat Rumah">
                            </div>
                            <div class="form-group">
                                <label for="wali_siswa">Nama Wali Murid</label>
                                <input type="text" class="form-control" id="text" name="wali_siswa" placeholder="Input Nama Wali Murid">
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Tentor</label>
                                <select name="nama_tentor" id="" class="form-control">
                                    <option label="Pilih Tentor"></option>
                                    @foreach ($tentor as $row)
                                    <option value="{{ $row->nama_tentor}}">({{ $row->kode_tentor }}) - {{ $row->nama_tentor }} - ({{ $row->status }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jadwal_les">Jadwal Les</label>
                                <input type="text" class="form-control" id="text" name="jadwal_les" placeholder="Input Jadwal Les">
                            </div>
                            <div class="form-group">
                                <label for="paket_data">Jumlah Pertemuan</label>
                                <select name="" id="paket_data">
                                    @foreach ($paket as $row)
                                    <option value="{{ $row->pertemuan}}">{{ $row->kategori }} - {{ $row->paket }} - {{ $row->kelas }}</option>
                                    @endforeach
                                    <input type="text" class="form-control" id="jumlah" name="jumlah_pertemuan" readonly>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="basic-url">Pembayaran</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" id="rupiah" name="pembayaran" aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tgl_join">Tanggal Bergabung</label>
                                <input type="text" class="form-control tgl" name="tgl_join" placeholder="dd-mm-yyyy">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option label="Pilih Status Siswa"></option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="off">off</option>
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
