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
                                $tentor->nama_tentor
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
                            <h4 class="card-title">Add Data Tentor</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('tentor.update', $tentor->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kode_tentor">Kode Tentor</label>
                                <input type="text" class="form-control" id="text" name="kode_tentor" value="{{
                                $tentor->kode_tentor
                            }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_tentor">Nama Lengkap</label>
                                <input type="text" class="form-control" id="text" name="nama_tentor" value="{{
                                $tentor->nama_tentor
                            }}">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" autocomplete="off" id="" class="form-control">
                                    <option label="Pilih Jenis Kelamin"></option>
                                    <option value="Laki-Laki" {{$tentor->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''}}>
                                        Laki-Laki
                                    </option>
                                    <option value="Perempuan" {{$tentor->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>
                                        Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lahir">Tanggal Lahir</label>
                                <input autocomplete="off" type="text" class="form-control tgl" name="lahir" placeholder="dd-mm-yyyy" value="{{$tentor->lahir}}">
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select name="agama" autocomplete="off" id="" class="form-control">
                                    <option label="Pilih Agama"></option>
                                    <option value="Islam" {{$tentor->agama == 'Islam' ? 'selected' : ''}}>
                                        Islam
                                    </option>
                                    <option value="Hindu" {{$tentor->agama == 'Hindu' ? 'selected' : ''}}>
                                        Hindu
                                    </option>
                                    <option value="Budha" {{$tentor->agama == 'Budha' ? 'selected' : ''}}>
                                        Budha
                                    </option>
                                    <option value="Katolik" {{$tentor->agama == 'Katolik' ? 'selected' : ''}}>
                                        Katolik
                                    </option>
                                    <option value="Kristen" {{$tentor->agama == 'Kristen' ? 'selected' : ''}}>
                                        Kristen
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keahlian">Keahlian Mengajar</label>
                                <input type="text" class="form-control" id="text" name="keahlian" value="{{
                                $tentor->keahlian
                            }}">
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan/Menempuh Pendidikan</label>
                                <input type="text" class="form-control" id="text" name="pendidikan" value="{{
                                $tentor->pendidikan
                            }}">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="text" name="alamat" value="{{
                                $tentor->alamat
                            }}">
                            </div>
                            <div class="form-group">
                                <label for="tgl_join">Tanggal Bergabung</label>
                                <input type="text" class="form-control tgl" name="tgl_join" value="{{
                                $tentor->tgl_join
                            }}">
                            </div>
                            <div class="form-group">
                                <label for="jenjang_mengajar">Jenjang Mengajar</label>
                                <select name="jenjang_mengajar" id="" class="form-control">
                                    <option value="SD" {{$tentor->jenjang_mengajar == 'SD' ? 'selected' : ''}}>
                                        SD
                                    </option>
                                    <option value="SD-SMP" {{$tentor->jenjang_mengajar == 'SD-SMP' ? 'selected' : ''}}>
                                        SD-SMP
                                    </option>
                                    <option value="SD-SMP-SMA" {{$tentor->jenjang_mengajar == 'SD-SMP-SMA' ? 'selected' : ''}}>
                                        SD-SMP-SMA
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="aktif" {{$tentor->status == 'aktif' ? 'selected' : ''}}>
                                        Aktif
                                    </option>
                                    <option value="off" {{$tentor->status == 'off' ? 'selected' : ''}}>
                                        Off
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kd_cabang">Cabang Flash School</label>
                                <select name="kd_cabang" id="" class="form-control">
                                    @foreach ($cabang as $row)
                                    @if ($row->id == $tentor->kd_cabang)
                                    <option value={{ $row->wilayah_cabang}} selected='selected'>{{ $row->wilayah_cabang }}</option>
                                    @else
                                    <option value="{{ $row->wilayah_cabang}}">
                                        {{ $row->wilayah_cabang }}
                                    </option>
                                    @endif
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
