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

Route::get('/services', function () {
    return view('services');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portofolio', function () {
    return view('portofolio');
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

Route::get('/layanan-penasihat_investasi', function () {
    return view('layanan-penasihat_investasi');
});

Route::get('/services-auditing_assurance', function () {
    return view('services-auditing_assurance');
});

Route::get('/layanan-audit_jaminan', function () {
    return view('layanan-audit_jaminan');
});

Route::get('/services-financial_accounting', function () {
    return view('services-financial_accounting');
});

Route::get('/layanan-akuntansi_keuangan', function () {
    return view('layanan-akuntansi_keuangan');
});

Route::get('/services-taxplanning', function () {
    return view('services-taxplanning');
});

Route::get('/layanan-pajak', function () {
    return view('layanan-pajak');
});

Route::get('/services-hr', function () {
    return view('services-hr');
});

Route::get('/layanan-sdm', function () {
    return view('layanan-sdm');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login-id', function () {
    return view('login-id');
});

Route::post('/login/authenticate','App\Http\Controllers\LoginController@authenticate')->middleware('guest');

Route::post('/logout',[loginController::class,'logout'])->middleware('auth');

Route::get('/register', function () {
    return view('register');
});

Route::get('/register-id', function () {
    return view('register-id');
});