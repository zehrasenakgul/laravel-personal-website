<?php

Route::redirect('/', '/anasayfa');

Route::group(['prefix' => 'anasayfa', "as" => "anasayfa", "namespace" => "App\Http\Controllers"], function () {
    Route::get('/', "HomeController@home")->name(".home");
});

Route::group(['prefix' => 'portfolyo', "as" => "portfolyo", "namespace" => "App\Http\Controllers"], function () {
    Route::get('/', "WorkController@workGetPortfolio")->name(".workGetPortfolio");
});

Route::post('/sendMessage', "App\Http\Controllers\StaticController@sendMessage")->name(".sendMessage");

Route::get('/{slug}', "App\Http\Controllers\StaticController@pages")->name(".static");
Route::get('/portfolyo/{slug}', "App\Http\Controllers\WorkController@details")->name(".details");
