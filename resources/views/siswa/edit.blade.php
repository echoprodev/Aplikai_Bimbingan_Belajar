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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Form Edit Data -> <i>{{
                                $murid->nama_siswa
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
                            <h4 class="card-title">Edit Data Siswa</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('siswa.update', $murid->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kode_siswa">Absen Siswa</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="kode_siswa" value="{{$murid->kode_siswa}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_siswa">Nama Lenkap</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="nama_siswa" value="{{$murid->nama_siswa}}">
                            </div>
                            <div class="form-group">
                                <label for="lahir">Tanggal Lahir</label>
                                <input autocomplete="off" type="text" class="form-control tgl" id="text" name="lahir" value="{{$murid->lahir}}">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" autocomplete="off" id="" class="form-control">
                                    <option label="Pilih Jenis Kelamin"></option>
                                    <option value="Laki-Laki" {{$murid->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''}}>
                                        Laki-Laki
                                    </option>
                                    <option value="Perempuan" {{$murid->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>
                                        Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="asal_sekolah" value="{{$murid->asal_sekolah}}">
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select name="kelas" autocomplete="off" id="" class="form-control">
                                    <option label="Pilih kelas"></option>
                                    <option value="TK - A" {{$murid->kelas == 'TK - A' ? 'selected' : ''}}>
                                        TK - A
                                    </option>
                                    <option value="TK - B" {{$murid->kelas == 'TK - B' ? 'selected' : ''}}>
                                        TK - B
                                    </option>
                                    <option value="SD - 1" {{$murid->kelas == 'SD - 1' ? 'selected' : ''}}>
                                        SD - 1
                                    </option>
                                    <option value="SD - 2" {{$murid->kelas == 'SD - 2' ? 'selected' : ''}}>
                                        SD - 2
                                    </option>
                                    <option value="SD - 3" {{$murid->kelas == 'SD - 3' ? 'selected' : ''}}>
                                        SD - 3
                                    </option>
                                    <option value="SD - 4" {{$murid->kelas == 'SD - 4' ? 'selected' : ''}}>
                                        SD - 4
                                    </option>
                                    <option value="SD - 5" {{$murid->kelas == 'SD - 5' ? 'selected' : ''}}>
                                        SD - 5
                                    </option>
                                    <option value="SD - 6" {{$murid->kelas == 'SD - 6' ? 'selected' : ''}}>
                                        SD - 6
                                    </option>
                                    <option value="SMP - 7" {{$murid->kelas == 'SMP - 7' ? 'selected' : ''}}>
                                        SMP - 7
                                    </option>
                                    <option value="SMP - 8" {{$murid->kelas == 'SMP - 8' ? 'selected' : ''}}>
                                        SMP - 8
                                    </option>
                                    <option value="SMP - 9" {{$murid->kelas == 'SMP - 9' ? 'selected' : ''}}>
                                        SMP - 9
                                    </option>
                                    <option value="SMA - 10" {{$murid->kelas == 'SMA - 10' ? 'selected' : ''}}>
                                        SMA - 10
                                    </option>
                                    <option value="SMA - 11" {{$murid->kelas == 'SMA - 11' ? 'selected' : ''}}>
                                        SMA - 11
                                    </option>
                                    <option value="SMA - 12" {{$murid->kelas == 'SMA - 12' ? 'selected' : ''}}>
                                        SMA - 12
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No.hp/Whatsapp</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="no_hp" value="{{$murid->no_hp}}">
                            </div>
                            <div class="form-group">
                                <label for="alamat_rumah">Alamat</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="alamat_rumah" value="{{$murid->alamat_rumah}}">
                            </div>
                            <div class="form-group">
                                <label for="wali_siswa">Nama Wali Murid</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="wali_siswa" value="{{$murid->wali_siswa}}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_pertemuan">Jumlah Pertemuan</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="jumlah_pertemuan" value="{{$murid->jumlah_pertemuan}}">
                            </div>
                            <div class="form-group">
                                <label for="pembayaran">Tagihan Pembayaran</label>
                                <input autocomplete="off" type="text" class="form-control" name="pembayaran" value="{{$murid->pembayaran}}">
                            </div>
                            <div class="form-group">
                                <label for="jadwal_les">Jadwal Les</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="jadwal_les" value="{{$murid->jadwal_les}}">
                            </div>
                            <div class="form-group">
                                <label for="sumber_info">Sumber Informasi</label>
                                <input autocomplete="off" type="text" class="form-control" id="text" name="sumber_info" value="{{$murid->sumber_info}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Nama Tentor</label>
                                <select name="nama_tentor" id="" class="form-control">
                                    @foreach ($tentor as $row)
                                    <option value="{{ $row->nama_tentor}}" {{$murid->nama_tentor == $row->nama_tentor  ? 'selected' : ''}}> {{ $row->nama_tentor }} - ({{ $row->status }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tgl_join">Tanggal Bergabung</label>
                                <input autocomplete="off" type="text" class="form-control tgl" name="tgl_join" value="{{$murid->tgl_join}}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" autocomplete="off" id="" class="form-control">
                                    <option label="Pilih Status Siswa"></option>
                                    <option value="Aktif" {{$murid->status == 'Aktif' ? 'selected' : ''}}>
                                        Aktif
                                    </option>
                                    <option value="Off" {{$murid->status == 'Off' ? 'selected' : ''}}>
                                        Off
                                    </option>
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
