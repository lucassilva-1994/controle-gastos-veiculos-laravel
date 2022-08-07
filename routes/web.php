<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::controller(UsersController::class)->group(function(){
    Route::get("/","index")->name("user.index");
    Route::get("/new","new")->name("user.new");
    Route::post("/create", "create")->name("user.create");
});