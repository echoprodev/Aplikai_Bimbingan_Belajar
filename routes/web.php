<?php

use App\Http\Controllers\CabangConntroller;
use App\Http\Controllers\CastomerDayController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DemoMuridController;
use App\Http\Controllers\ExportCustemerDayController;
use App\Http\Controllers\ExportTentorDayController;
use App\Http\Controllers\ExportMuridController;
use App\Http\Controllers\ExportMuridOff;
use App\Http\Controllers\ExportMutasiController;
use App\Http\Controllers\ExportPaymentOtherController;
use App\Http\Controllers\ExportPaymentSIswaController;
use App\Http\Controllers\ExportPaymentTentorController;
use App\Http\Controllers\ExportTentorController;
use App\Http\Controllers\InvoceController;
use App\Http\Controllers\InvoiceMuridController;
use App\Http\Controllers\InvoiceOther;
use App\Http\Controllers\InvoiceTentorController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\FrontController;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayMuridControlller;
use App\Http\Controllers\PayOtherControlller;
use App\Http\Controllers\PayTentorControlller;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\ProgramBelajarController;
use App\Http\Controllers\SiswaOffCOntroller;
use App\Http\Controllers\TentorController;
use App\Http\Controllers\TentorDayController;
use App\Http\Controllers\TransaksiSiswaController;
use App\Http\Controllers\UbahPasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.frontend');
});

Auth::routes();

// Link Forntend

// end Link Forntend

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admhome'])->name('admhome')->middleware('is.admin');

Route::get('/development', [App\Http\Controllers\HomeController::class, 'devhome'])->name('devhome')->middleware('is.development');


// Akses Development
Route::resource('password', UbahPasswordController::class)->middleware('is.development');
Route::resource('cabang', CabangConntroller::class)->middleware('is.development');
Route::resource('operator', OperatorController::class)->middleware('is.development');

// Akses Development & Admin
Route::resource('tentor', TentorController::class)->middleware('is.admin');
Route::resource('siswa', MuridController::class)->middleware('is.admin');
Route::resource('siswa-off', SiswaOffCOntroller::class)->middleware('is.admin');
// Route Mutasi

// Tentor
Route::resource('Fee-Tentor', PayTentorControlller::class)->middleware('is.admin');
Route::resource('invoice-Tentor', InvoiceTentorController::class)->middleware('is.admin');
Route::get('/BuktiBayar/Siswa', [App\Http\Controllers\ViewFileController::class, 'siswa'])->middleware('is.admin');


// Siswa
Route::resource('Pembayaran-Siswa', PayMuridControlller::class)->middleware('is.admin');
Route::resource('invoice-Siswa', InvoiceMuridController::class)->middleware('is.admin');

// Lainnya
Route::resource('Pembayaran-Lainnya', PayOtherControlller::class)->middleware('is.admin');
Route::resource('invoice-Lainnya', InvoiceOther::class)->middleware('is.admin');

// End Route Mutasi

// Route Export
Route::get('ExportDataSiswa', [ExportMuridController::class, 'export_murid'])->middleware('is.admin');
Route::get('ExportDataTentor', [ExportTentorController::class, 'export_tentor'])->middleware('is.admin');
Route::get('ExportDataPaymentSiswa', [ExportPaymentSIswaController::class, 'export_payment'])->middleware('is.admin');
Route::get('ExportDataPaymenTentor', [ExportPaymentTentorController::class, 'export_payment'])->middleware('is.admin');
Route::get('ExportDataPaymentOther', [ExportPaymentOtherController::class, 'export_payment'])->middleware('is.admin');
Route::get('ExportDataSiswaOff', [ExportMuridOff::class, 'export_muridoff'])->middleware('is.admin');
Route::get('ExportCustemerDay', [ExportCustemerDayController::class, 'export_custemerday'])->middleware('is.admin');
Route::get('ExportTentorrDay', [ExportTentorDayController::class, 'export_tentorday'])->middleware('is.admin');


// Kualitas Pelayanan
Route::resource('Customer-Day', CastomerDayController::class)->middleware('is.admin');
Route::resource('Tentor-Day', TentorDayController::class)->middleware('is.admin');

// Demo
Route::resource('Demo', DemoController::class)->middleware('is.development');
Route::resource('Demo-Siswa', DemoMuridController::class)->middleware('is.development');

// Price List
Route::resource('Price-List', PriceListController::class)->middleware('is.development');
// Program Belajar
Route::get('Program-TK-SD-MI', [ProgramBelajarController::class, 'ProgramSd']);
