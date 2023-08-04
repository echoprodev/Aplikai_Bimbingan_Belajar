<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Murid;
use App\Models\Tentor;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function admhome()
    {
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_murid = Murid::where('status', 'aktif')->count();
        return view('dashAdm',
    [
        'data_tentor' => $data_tentor,
        'data_cabang' => $data_cabang,
        'data_admin' => $data_admin,
        'data_murid' => $data_murid,
    ]);
    }
    public function devhome()
    {
        $data_tentor = Tentor::where('status', 'aktif')->count();
        $data_murid = Murid::where('status', 'aktif')->count();
        $data_cabang = Cabang::all()->count();
        $data_admin = User::all()->count();
        return view('dashDev',
    [
        'data_tentor' => $data_tentor,
        'data_cabang' => $data_cabang,
        'data_admin' => $data_admin,
        'data_murid' => $data_murid,
    ]);
    }
}
