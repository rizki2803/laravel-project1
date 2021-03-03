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

Route::get('/guest_master', 'GuestController@index');

Route::get('/contact', [GuestController::class, 'createForm']);

Route::post('/contact', [GuestController::class, 'guestForm'])->name('guest.store');