<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
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

Route::get('/guest_master', 'GuestController@index');
Route::get('/guest_receptionist', 'ReceptionistController@index');
Route::get('/guest_security', 'SecurityController@index');
Route::get('/guest_category', 'GuestCategoryController@index');
//Route::get('/guest_master', [GuestController::class, 'index']);

Route::get('/contact', [GuestController::class, 'createForm']);

Route::post('/contact', [GuestController::class, 'guestForm'])->name('guest.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
