<?php

use App\Models\MasterStatus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Laporan1Controller;
use App\Http\Controllers\Laporan2Controller;
use App\Http\Controllers\MerchartController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\MasterStatusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::resource('/master_status', MasterStatusController::class);
Route::resource('/city', CityController::class);
Route::resource('/merchant', MerchartController::class);
Route::resource('/products', ProductsController::class);
Route::resource('/order_status', OrderStatusController::class);
Route::resource('/users', UsersController::class);
Route::resource('/order_items', OrderItemsController::class);
Route::resource('/laporan1', Laporan1Controller::class);
Route::resource('/laporan2', Laporan2Controller::class);
Route::get('/laporanex1',[Laporan1Controller::class,'export_excel'])->name('laporanex1');
Route::get('/laporanex2',[Laporan1Controller::class,'export_excel'])->name('laporanex2');
