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
                    <h3 class="text-white mb-2"><a href="{{route('devhome')}}"><i class="fas fa-home"></i></a> -> Kualiatas Pelayanan -> Tentor Day</h3>
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
        <!-- Table -->
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="row">
                                <div class="col-sm-12 col-md-6" style="width: 1450px;">
                                    <h4 class="card-title">Data Kualitas Pelayanan (Tentor)</h4>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <a href="{{route('Tentor-Day.create')}}" class="btn btn-primary btn-round btn-md text-white">
                                        <i class="fa fa-plus"></i>
                                        Add data
                                    </a>
                                    <a href="ExportTentorrDay" class="btn btn-success btn-round btn-md text-white">
                                        <i class="fas fa-file-export"></i>
                                        Export data
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Tentor</th>
                                        <th>Informasi</th>
                                        <th>Editor</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1;
                                    @endphp
                                    @forelse($tentor as $row)
                                    <tr>
                                        <td>{{ $id++}}</td>
                                        <td>{{ $row->nama_siswa}}</td>
                                        <td>{{ $row->nama_tentor}}</td>
                                        <td>{{ $row->nama_tentor}}</td>
                                        <td>{{ $row->informasi}}</td>
                                        <td>{{ $row->editor}}</td>
                                        <td>
                                            <a href="{{ route('Tentor-Day.edit', $row->id)}}" class="btn btn-warning btn-sm" style="width: 50px; margin-top:5px;"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('Tentor-Day.destroy', $row->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" style="width: 50px; margin-top:5px;" onclick="return confirm('Apakah anda ingin menghapus data? {{$row->nama_tentor}}')">
                                                    <i class=" fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="14" class="text-center">
                                            Data Masih Kosong
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.backend.footer')
@endsection
