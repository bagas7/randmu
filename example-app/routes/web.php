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
    return view('home');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/services-manage_consult', function () {
    return view('services-manage_consult');
});

Route::get('/layanan-konsult_manage', function () {
    return view('layanan-konsult_manage');
});

Route::get('/services-invest_advisory', function () {
    return view('services-invest_advisory');
});

Route::get('/services-auditing_assurance', function () {
    return view('services-auditing_assurance');
});

Route::get('/services-financial_accounting', function () {
    return view('services-financial_accounting');
});

Route::get('/services-taxplanning', function () {
    return view('services-taxplanning');
});

Route::get('/services-hr', function () {
    return view('services-hr');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/kontak', function () {
    return view('kontak');
});
