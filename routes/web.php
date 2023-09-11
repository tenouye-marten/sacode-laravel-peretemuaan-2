<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardControler;
use App\Http\Controllers\DataSiswaControler;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dasbor', [DashboardControler::class, 'index']);
Route::get('/about', [DashboardControler::class, 'about']);
