<?php

use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\SkillsController;
use App\Http\Controllers\Backend\StaticController;
use App\Http\Controllers\Backend\WorkController;

Route::group(["prefix" => "admin", "as" => "backend", "namespace" => "App\Http\Controllers"], function () {

    Route::get("/login", "Auth\LoginController@showLoginForm")->name("backend.login.index");
    Route::post("/login", "Auth\LoginController@login");
    Route::post("/logout", "Auth\LoginController@logout")->name("backend.logout.index");;

    Route::controller(SettingsController::class)->group(function () {
        Route::group(["prefix" => "settings"], function () {
            Route::get("/", "show")->name(".show");
            Route::post("/update", "update")->name(".update");
            Route::post("/add", "add")->name(".add");
            Route::post("/delete", "delete")->name(".delete");
        });
    });

    Route::controller(MenuController::class)->group(function () {
        Route::group(["prefix" => "menus"], function () {
            Route::get("/", "show")->name(".show");
            Route::post("/update", "update")->name(".update");
            Route::post("/add", "add")->name(".add");
            Route::post("/delete", "delete")->name(".delete");
        });
    });

    Route::controller(StaticController::class)->group(function () {
        Route::group(["prefix" => "statics"], function () {
            Route::get("/list", "show")->name(".show");
            Route::get("/add", "addStatic")->name(".addStatic");
            Route::get("/update/{slug}", "updateStatic")->name(".updateStatic");
            Route::put("/update/{slug}", "update")->name(".update");
            Route::post("/add", "add")->name(".add");
            Route::get("/delete/{slug}", "delete")->name(".delete");
        });
    });
    Route::controller(SkillsController::class)->group(function () {
        Route::group(["prefix" => "skills"], function () {
            Route::get("/list", "show")->name(".show");
            Route::get("/add", "addSkill")->name(".addSkill");
            Route::get("/update/{slug}", "updateSkill")->name(".updateSkill");
            Route::put("/update/{slug}", "update")->name(".update");
            Route::post("/add", "add")->name(".add");
            Route::get("/delete/{slug}", "delete")->name(".delete");
        });
    });

    Route::controller(ModuleController::class)->group(function () {
        Route::group(["prefix" => "modules"], function () {
            Route::get("/list", "show")->name(".show");
            Route::get("/add", "addModule")->name(".addModule");
            Route::get("/update/{slug}", "updateModule")->name(".updateModule");
            Route::put("/update/{slug}", "update")->name(".update");
            Route::post("/add", "add")->name(".add");
            Route::get("/delete/{slug}", "delete")->name(".delete");
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
