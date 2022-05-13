<?php
   
    Route::group(['prefix' => 'admin'], function() {
    Route::get('/', "App\Http\Controllers\BackendHomeController@home")->name(".home");
    Route::get('/settings', "App\Http\Controllers\SettingController@settings")->name(".settings");


    Route::group(['prefix' => 'portfolio'], function() {
        Route::get('/add', "App\Http\Controllers\WorkController@addPortfolio")->name(".addPortfolio");
        Route::get('/list', "App\Http\Controllers\WorkController@listPortfolio")->name(".listPortfolio");
        Route::get('/update/{slug}', "App\Http\Controllers\WorkController@updatePortfolio")->name(".updatePortfolio");
        Route::post('/add', "App\Http\Controllers\WorkController@post")->name(".post");
        Route::put('/update/{slug}', "App\Http\Controllers\WorkController@update")->name(".update");
        Route::get('/delete/{slug}', "App\Http\Controllers\WorkController@delete")->name(".delete");
    });
    
});
