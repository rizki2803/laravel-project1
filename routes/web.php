<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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


Route::get('/try','GuestController@try');
Route::get('/create-account',function(){
    $faker = Faker\Factory::create() ;
        for($i=0;$i<3;$i++){
        $data[$i] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ];
        }
        DB::table('users')->insert($data);
});




Route::get('/survey/guest','GuestController@guest')->name('survey');
Route::post('/survey/store','GuestController@store')->name('survey.store');
Route::get('/', 'GuestController@index')->name('guest_master');

Route::get('/guest_receptionist', 'GuestController@receptionist')->name('guest_receptionist')->middleware('receptionist');

Route::get('/guest_security', 'GuestController@security')->name('guest_security')->middleware('security');
Route::get('/guest_security/upt/{gm_id}', 'GuestController@security_upt')->name('scrt_upt');

Route::get('/guest_mstr', 'GuestController@guest_master')->name('gm_get')->middleware('admin');

Route::get('/guest_category', 'GuestController@guest_cat')->name('gc_get');
Route::post('/guest_category/crt', 'GuestController@guest_cat_crt')->name('gc_crt');
Route::get('/guest_category/store', 'GuestController@guest_cat_store')->name('gc_store');
Route::get('/guest_category/edit/{gc_id}', 'GuestController@guest_cat_edit')->name('gc_edit');
Route::post('/guest_category/upt/{gc_id}', 'GuestController@guest_cat_upt')->name('gc_upt');
Route::get('/guest_category/del/{gc_id}', 'GuestController@guest_cat_del')->name('gc_del');

//Route::get('/guest_master', [GuestController::class, 'index']);

Route::get('/contact', [GuestController::class, 'createForm']);

Route::post('/contact', [GuestController::class, 'guestForm'])->name('guest.store');

Auth::routes();
Route::get('/home   ', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


