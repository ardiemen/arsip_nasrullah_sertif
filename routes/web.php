<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;
//Luar
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\UserChartController;
// Admin
use App\Http\Controllers\BookingDataController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TypeServiceController;
use App\Http\Controllers\Admin\CustomerServiceController;
// Pemilik
use App\Http\Controllers\Pemilik\PerkembanganController;
use App\Http\Controllers\Pemilik\InvoiceServiceController;
use App\Http\Controllers\Pemilik\LaporanServiceController;
use App\Http\Controllers\Pemilik\LaporanSparepartController;
use App\Http\Controllers\Pemilik\LaporanTransaksiController;
use App\Http\Controllers\Visitor;


// model

use App\Models\DetailService;
use App\Models\JenisService;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


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
    return redirect()->route('arsips.index');
});


Route::resource('arsips', ArsipController::class)->except('destroy');
Route::get('arsips/delete/{arsip}', [ArsipController::class, 'destroy'])->name('arsips.destroy');

Route::get('about', function() {
    return view('about.index');
})->name('about.index');



    