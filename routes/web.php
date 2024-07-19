<?php

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

Route::get('/', [App\Http\Controllers\ReserverenController::class, 'index']);

Auth::routes(['register' => false]);

Route::post('/reserveren', [App\Http\Controllers\ReserverenController::class, 'store'])->name('store');

// weg halen als livewire werkt
Route::post('/reserveren/check', [App\Http\Controllers\ReserverenController::class, 'checker'])->name('checker');

// Admin routes
Route::get('/admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
Route::get('/admin/reserveringen/nieuw', [App\Http\Controllers\admin\BookingController::class, 'nieuw']);
Route::put('/admin/accept/reserveer/{id}', [App\Http\Controllers\admin\BookingController::class, 'accepteren']);
Route::get('/admin/reserveringen/edit/{id}', [App\Http\Controllers\admin\BookingController::class, 'show']);
Route::put('/admin/reserveringen/edit/succes/{id}', [App\Http\Controllers\admin\BookingController::class, 'edit'])->name('edit');
Route::get('/admin/reserveringen/delete/{id}', [App\Http\Controllers\admin\BookingController::class, 'delete']);

Route::put('/admin/undo/accept/reserveer/{id}', [App\Http\Controllers\admin\BookingController::class, 'undo']);

Route::get('/admin/reserveringen/gereserveerd', [App\Http\Controllers\admin\BookingController::class, 'gereserveerd']);
Route::get('/admin/reserveringen/archief', [App\Http\Controllers\admin\BookingController::class, 'archief']);


Route::get('/admin/reserveringen/aanmaken', [App\Http\Controllers\admin\BookingController::class, 'aanmaken']);
Route::post('/admin/reserveringen/aanmaken', [App\Http\Controllers\admin\BookingController::class, 'create'])->name('admin-aanmaken');


