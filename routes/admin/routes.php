<?php


Route::namespace("Admin")->group(function(){

    Route::prefix("/")->group(function(){
        Route::get("/","DashboardController@index")
                                         ->name("admin.dashboard");
    });

});

Auth::routes();

Route::get("logout","Auth\LoginController@logout")->name("logout");