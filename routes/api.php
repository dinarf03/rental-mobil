<?php

use Illuminate\Http\Request;

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
// Route::get('mobil', 'MobilController@mobil');
//
// Route::get('mobilall', 'MobilController@mobilAuth')->middleware('jwt.verify');
Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['jwt.verify'])->group(function(){
  Route::get('car', 'CarController@index');
  Route::post('car', 'CarController@create');
  Route::get('/car/{id}', 'CarController@detail');
  Route::put('/car/{id}', 'CarController@update');
  Route::delete('/car/(id)', 'CarController@delete');
  Route::post('/pembayaran/{id}', 'BookingController@total');
});
