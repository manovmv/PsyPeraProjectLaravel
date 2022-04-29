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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Doctor', 'middleware' => 'admin'],function (){
    Route::get('/doctor', 'IndexController')->name('doctor.index');
    Route::post('/doctor', 'StoreController')->name('doctor.store');
    Route::get('/doctor/create', 'CreateController')->name('doctor.create');
    Route::get('/doctor/{doc}', 'ShowController')->name('doctor.show');
    Route::get('/doctor/{doc}/edit', 'EditController')->name('doctor.edit');
    Route::patch('/doctor/{doc}', 'UpdateController')->name('doctor.update');
    Route::delete('/doctor/{doc}', 'DestroyController')->name('doctor.delete');

});
Route::group(['namespace'=>'Profile', 'middleware' => 'admin'],function () {
    Route::get('/profile', 'IndexController')->name('profile.index');
    Route::post('/profile', 'StoreController')->name('profile.store');
    Route::get('/profile/create', 'CreateController')->name('profile.create');
    Route::get('/profile/{doc}', 'ShowController')->name('profile.show');
    Route::get('/profile/{doc}/edit', 'EditController')->name('profile.edit');
    Route::patch('/profile/{doc}', 'UpdateController')->name('profile.update');
    Route::delete('/profile/{doc}', 'DestroyController')->name('profile.delete');
});


