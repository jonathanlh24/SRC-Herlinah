<?php

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

    
Route::get('/', function () {
    return view('login');
});
Route::post('/login', [userController::class,'login']);

Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [userController::class, 'signup']);

Route::get('/dash_pemilikToko', function () {
    return view('pages.pemilik_toko.dash_pemilik');
});

Route::get('/dataBarang', function () {
    return view('pages.pemilik_toko.data_barang');
});

Route::get('/dataStaff', function () {
    return view('pages.pemilik_toko.data_staff');
});