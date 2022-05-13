<?php

Route::group(["prefix" => "admin","as" => "backend", "namespace"=> "App\Http\Controllers"], function() {
    Route::get("/", "BackendHomeController@home")->name(".home");

    Route::group(["prefix" => "settings"], function() {
        Route::get("/", "SettingsController@show")->name(".show");
        Route::post("/update", "SettingsController@update")->name(".update");
    });

    Route::group(["prefix" => "portfolio", "as" => "work"], function() {
        Route::get("/add", "WorkController@addPortfolio")->name(".addPortfolio");
        Route::get("/list", "WorkController@listPortfolio")->name(".listPortfolio");
        Route::get("/update/{slug}", "WorkController@updatePortfolio")->name(".updatePortfolio");
        Route::post("/add", "WorkController@post")->name(".post");
        Route::put("/update/{slug}", "WorkController@update")->name(".update");
        Route::get("/delete/{slug}", "WorkController@delete")->name(".delete");
    });
    
});
