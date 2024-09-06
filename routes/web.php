<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home' , 'home' , [
    "name" => 'zmat24' ,
    "role" => 'admin' ,
    'users' => [['name' => 'alireza'] , ['name' => 'matin'] , ['name' => 'reza']]
]);

Route::get("/home/controller" , HomePageController::class);


Route::view("/login" , "auth.login")->name("login");
Route::post("/login" , [AuthController::class , "login"])->name('login.post');
