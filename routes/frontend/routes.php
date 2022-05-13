<?php 

Route::redirect('/', '/anasayfa');

Route::group(['prefix' => 'anasayfa',"as" => "anasayfa", "namespace" =>"App\Http\Controllers" ], function() {
    Route::get('/', "HomeController@home")->name(".home");
});

Route::group(['prefix' => 'portfolyo',"as" => "portfolyo", "namespace" =>"App\Http\Controllers" ], function() {
    Route::get('/', "WorkController@workGetPortfolio")->name(".workGetPortfolio");
});













?>