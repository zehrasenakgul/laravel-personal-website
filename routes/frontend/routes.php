<?php

Route::redirect('/', '/anasayfa');

Route::group(['prefix' => 'anasayfa', "as" => "anasayfa", "namespace" => "App\Http\Controllers\Frontend"], function () {
    Route::get('/', "HomeController@home")->name(".home");
});
Route::get('/portfolyo', "App\Http\Controllers\Frontend\WorkController@workGetPortfolio")->name(".workGetPortfolio");
Route::post('/sendMessage', "App\Http\Controllers\Frontend\StaticController@sendMessage")->name(".sendMessage");
Route::get('/{slug}', "App\Http\Controllers\Frontend\StaticController@pages")->name(".static");
Route::get('/portfolyo/{slug}', "App\Http\Controllers\Frontend\WorkController@details")->name(".details");
