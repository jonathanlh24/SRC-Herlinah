<?php

use App\Http\Controllers\pemilikController;
use App\Http\Controllers\userController;
use App\Models\User;
use Illuminate\Http\Request;
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

// START - LOGIN & SIGN UP    
Route::get('/', function () {
    return view('login');
});
Route::post('/login', [userController::class,'login']);
    
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [userController::class, 'signup']);

// PEMILIK TOKO
Route::get('/dash_pemilikToko', [pemilikController::class,'home']);
Route::get('/dataStaff', [pemilikController::class, 'dataStaff']);
Route::get('/dataBarang', [pemilikController::class,'dataBarang']); 

Route::post('/viewReport', function () {
    return view('pages.pemilik_toko.viewReport');
});

// STAFF TOKO
Route::get('/dash_staffToko', function () {
    return view('pages.staff_toko.dash_staff');
});

Route::post('/tambahtransaksi', function () {
    return view('pages.staff_toko.transaksi');
});