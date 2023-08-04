<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('assets/front/img/flashschool/account.png') }}" class="avatar-img rounded-circle">
                    <img src="{{ asset('assets/img/flashschool/account.png')}}" alt="..." >
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{Auth::user()->name}}
                            @if (Auth::user()->role == 'development')
                            <span class="user-level">Development</span>
                            @else
                            <span class="user-level">Administrator</span>
                            @endif
                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>
                @if (Auth::user()->role == 'development')
                <!-- Data Tentor -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Data Tentor</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('tentor.create')}}">
                                    <span class="sub-item">Tambah Data Tentor</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('tentor.index')}}">
                                    <span class="sub-item">Lihat Data Tentor</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Data Siswa -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-user-graduate"></i>
                        <p>Data Siswa</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('siswa.create')}}">
                                    <span class="sub-item">Tambah Data Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Demo-Siswa.index')}}">
                                    <span class="sub-item">Data Siswa <strong>(Demo)</strong></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('siswa.index')}}">
                                    <span class="sub-item">Lihat Data Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('siswa-off.index')}}">
                                    <span class="sub-item">Data Siswa Berhenti</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Data Admin -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-users"></i>
                        <p>Data Admin</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('operator.create')}}">
                                    <span class="sub-item">Tambah Data Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('password.index')}}">
                                    <span class="sub-item">Ubah Password Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('operator.index')}}">
                                    <span class="sub-item">Lihat Data Admin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Data Cabang -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#maps">
                        <i class="fas fa-building"></i>
                        <p>Data Cabang</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('cabang.create')}}">
                                    <span class="sub-item">Tambah Data Cabang</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cabang.index')}}">
                                    <span class="sub-item">Lihat Data Cabang</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Data Transaksi -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#mutasi">
                        <i class="fas fa-money-bill-wave"></i>
                        <p>Data Transaksi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mutasi">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('Pembayaran-Siswa.index')}}">
                                    <span class="sub-item">Transaksi Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Fee-Tentor.index')}}">
                                    <span class="sub-item">Transaksi Tentor</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Pembayaran-Lainnya.index')}}">
                                    <span class="sub-item">Transaksi Lainnya</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Demo.index')}}">
                                    <span class="sub-item">Demo Transaksi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- List Harga --}}
                <li class="nav-item">
                    <a data-toggle="collapse" href="#price">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Paket Belajar</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="price">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('Price-List.create')}}">
                                    <span class="sub-item">Tambah Data Paket Belajar</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Price-List.index')}}">
                                    <span class="sub-item">Lihat Paket Belajar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Informasi Pelayanan -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#pelayanan">
                        <i class="fas fa-info-circle"></i>
                        <p>Kualitas Pelayanan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pelayanan">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('Customer-Day.index')}}">
                                    <span class="sub-item">Customer Day</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Tentor-Day.index')}}">
                                    <span class="sub-item">Tentor Day</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @else
                <!-- Data Tentor -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Data Tentor</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('tentor.create')}}">
                                    <span class="sub-item">Tambah Data Tentor</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('tentor.index')}}">
                                    <span class="sub-item">Lihat Data Tentor</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Data Siswa -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#siswa">
                        <i class="fas fa-user-graduate"></i>
                        <p>Data Siswa</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="siswa">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('siswa.create')}}">
                                    <span class="sub-item">Tambah Data Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('siswa.index')}}">
                                    <span class="sub-item">Lihat Data Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('siswa-off.index')}}">
                                    <span class="sub-item">Data Siswa Berhenti</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Data Transaksi -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#mutasi">
                        <i class="fas fa-user-graduate"></i>
                        <p>Data Transaksi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mutasi">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{route('Pembayaran-Siswa.index')}}">
                                    <span class="sub-item">Transaksi Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Fee-Tentor.index')}}">
                                    <span class="sub-item">Transaksi Tentor</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Pembayaran-Lainnya.index')}}">
                                    <span class="sub-item">Transaksi Lainnya</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Informasi Pelayanan -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#pelayanan">
                        <i class="fas fa-info-circle"></i>
                        <p>Kualitas Pelayanan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pelayanan">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('Customer-Day.index')}}">
                                    <span class="sub-item">Customer Day</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Tentor-Day.index')}}">
                                    <span class="sub-item">Tentor Day</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
