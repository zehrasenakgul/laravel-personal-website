<?php

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WorkController;

Route::group(["prefix" => "admin", "as" => "backend", "namespace" => "App\Http\Controllers"], function () {

    Route::get("/", "BackendHomeController@home")->name(".home");

    Route::controller(SettingsController::class)->group(function () {
        Route::group(["prefix" => "settings"], function () {
            Route::get("/", "show")->name(".show");
            Route::post("/update", "update")->name(".update");
            Route::post("/add", "add")->name(".add");
            Route::post("/delete", "delete")->name(".delete");
        });
    });

    Route::controller(WorkController::class)->group(function () {
        Route::prefix('portfolio')->group(function () {
            Route::get("/add", "addPortfolio")->name(".addPortfolio");
            Route::get("/list", "listPortfolio")->name(".listPortfolio");
            Route::get("/update/{slug}", "updatePortfolio")->name(".updatePortfolio");
            Route::post("/add", "post")->name(".post");
            Route::put("/update/{slug}", "update")->name(".update");
            Route::get("/delete/{slug}", "delete")->name(".delete");
        });
    });
});
