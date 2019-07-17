<?php

use Illuminate\Http\Request;

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

// GET API
Route::group(['prefix' => 'v1'], function () {
    Route::get('getpaket', 'getController@getPaket');
    Route::get('getpaket/{id}', 'getController@getPaketbyid');
    Route::get('getdestinasi/{id_paket}', 'getController@getDestinasi');
    Route::get('getfasilitas/{id_paket}', 'getController@getFasilitas');
    Route::get('gettestimoni/{id_paket}', 'getController@getTestimoni');

// POST API
    Route::post('insert/paket', 'postController@storePaket');
    Route::post('insert/destinasi/{id_paket}', 'postController@storeDestinasi');
    Route::post('insert/fasilitas/{id_paket}', 'postController@storeFasilitas');
    Route::post('insert/testimoni/{id_paket}', 'postController@storeTestimoni');

// UPDATE API
    Route::post('update/paket/{id}', 'updateController@updatePaket');
    Route::post('update/destinasi/{id}', 'updateController@updateDestinasi');
    Route::post('update/fasilitas/{id}', 'updateController@updateFasilitas');
    Route::post('update/testimoni/{id}', 'updateController@updateTestimoni');

//DELETE API
    Route::get('delete/paket/{id}','deleteController@deletePaket');
    Route::get('delete/destinasi/{id}','deleteController@deleteDestinasi');
    Route::get('delete/fasilitas/{id}','deleteController@deleteFasilitas');
    Route::get('delete/testimoni/{id}','deleteController@deleteTestimoni');
});
