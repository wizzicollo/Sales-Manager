<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master\VendorController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/Master/Vendor', [VendorController::class, 'app'])->name('Master/Vendor');
Route::resource('/Master/Vendor', VendorController::class);
Route::get('Vendor/datatable', 'Master\VendorController@datatables')->name('vendor/datatable');
