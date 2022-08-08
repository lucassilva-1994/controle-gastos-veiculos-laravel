<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::controller(UsersController::class)->group(function(){
    Route::get("/","index")->name("user.index");
    Route::get("user/new","new")->name("user.new");
    Route::post("user/create", "create")->name("user.create");
    Route::get("/user/validate/{token}","validateUser")->name("user.validate");
    Route::post("user/auth","auth")->name("user.auth");
    //Redefinir senha
    Route::get("user/resetpassword","resetPassword")->name("user.resetpassword");
    Route::post("user/updatetoken", "updateToken")->name("user.updatetoken");
    Route::get("user/newpassword/{token}","newPassword")->name("user.newpassword");
    Route::post("user/updatepassword","updatePassword")->name("user.updatepassword");
});