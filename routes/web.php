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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* GX */

Route::get('gx/hub-spot', [App\Http\Controllers\Gx\HubspotController::class, 'index'])->name('gx.hubspot');
Route::get('gx/kirim', [App\Http\Controllers\Gx\KirimController::class, 'index'])->name('gx.kirim');
Route::get('gx/kirim/sync', [App\Http\Controllers\Gx\KirimController::class, 'sync'])->name('gx.kirim.sync');
Route::get('gx/kirim/email/delete/{email}', [App\Http\Controllers\Gx\KirimController::class,'destroy'])->name('gx.kirim.email.delete');

/* GX -end */
