<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberController;
use App\Http\Controllers\paketController;
use App\Http\Controllers\outletController;
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
    return view('layouts/index');
});

Route::resource('member', memberController::class);
Route::resource('paket', paketController::class);
Route::resource('outlet', outletController::class);
