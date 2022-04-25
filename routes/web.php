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
    return "22222222";
});

Route::group(['namespace'=>'Doctor'],function (){
    Route::get('/backend/doctor', 'IndexController')->name('doctor.index');
    Route::post('/backend/doctor', 'StoreController')->name('doctor.store');
    Route::get('/backend/doctor/create', 'CreateController')->name('doctor.create');
    Route::get('/backend/doctor/{doc}', 'ShowController')->name('doctor.show');
    Route::get('/backend/doctor/{doc}/edit', 'EditController')->name('doctor.edit');
    Route::patch('/backend/doctor/{doc}', 'UpdateController')->name('doctor.update');
    Route::delete('/backend/doctor/{doc}', 'DestroyController')->name('doctor.delete');

});
Route::group(['namespace'=>'Profile'],function () {
    Route::get('/backend/profile', 'IndexController')->name('profile.index');
    Route::post('/backend/profile', 'StoreController')->name('profile.store');
    Route::get('/backend/profile/create', 'CreateController')->name('profile.create');
    Route::get('/backend/profile/{doc}', 'ShowController')->name('profile.show');
    Route::get('/backend/profile/{doc}/edit', 'EditController')->name('profile.edit');
    Route::patch('/backend/profile/{doc}', 'UpdateController')->name('profile.update');
    Route::delete('/backend/profile/{doc}', 'DestroyController')->name('profile.delete');
});
