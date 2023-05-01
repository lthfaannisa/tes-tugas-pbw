<?php

use Illuminate\Support\Facades\Route;

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



/**
 * Route::get('/', function () {
 * return view('welcome');
 * });
 */

 Route::get('/', function () {
    return view('LoginPage');
});

Route::get('/lowongan-pekerjaan', function () {
    return view('LowonganPekerjaan');
});

Route::get('/bantuan-page', function () {
    return view('BantuanPage');
});

Route::get('/dashboard-page', function () {
    return view('DashboardPage');
});

Route::get('/data-alumni-page', function () {
    return view('DataAlumniPage');
});

Route::get('/profil-page', function () {
    return view('ProfilPage');
});