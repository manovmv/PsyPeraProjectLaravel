<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::group(['namespace'=>'Doctor', 'middleware' => 'jwt.auth'],function (){
    Route::get('/doctor', 'IndexController');
    Route::post('/doctor', 'StoreController');
    Route::get('/doctor/create', 'CreateController');
    Route::get('/doctor/{doc}', 'ShowController');
    Route::get('/doctor/{doc}/edit', 'EditController');
    Route::patch('/doctor/{doc}', 'UpdateController');
    Route::delete('/doctor/{doc}', 'DestroyController');

});
