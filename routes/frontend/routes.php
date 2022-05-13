<?php 

Route::redirect('/', '/anasayfa');
Route::get('/anasayfa', "App\Http\Controllers\HomeController@home")->name(".home");
Route::get('/portfolyo', "App\Http\Controllers\WorkController@workGetPortfolio")->name(".workGetPortfolio");












?>