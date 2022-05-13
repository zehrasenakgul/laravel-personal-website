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

Route::redirect('/', '/anasayfa');

Route::get('/anasayfa', "App\Http\Controllers\HomeController@home")->name(".home");

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', "App\Http\Controllers\BackendHomeController@home")->name(".home");

    Route::group(['prefix' => 'portfolio'], function() {
        Route::get('/add', "App\Http\Controllers\WorkController@addPortfolio")->name(".addPortfolio");
        Route::get('/list', "App\Http\Controllers\WorkController@listPortfolio")->name(".listPortfolio");
        Route::get('/update/{slug}', "App\Http\Controllers\WorkController@updatePortfolio")->name(".updatePortfolio");
        Route::post('/add', "App\Http\Controllers\WorkController@post")->name(".post");
        Route::put('/update/{slug}', "App\Http\Controllers\WorkController@update")->name(".update");
        Route::get('/delete/{slug}', "App\Http\Controllers\WorkController@delete")->name(".delete");
    });
    
});





 Route::get('/portfolyo', "App\Http\Controllers\WorkController@workGetPortfolio")->name(".workGetPortfolio");
// Route::get('/anasayfa', "App\Http\Controllers\WorkController@workGetIndex");
// Route::get('/portfolyo-delete', "App\Http\Controllers\WorkController@workDelete");
// Route::get('/portfolyo-update', "App\Http\Controllers\WorkController@workUpdate");


