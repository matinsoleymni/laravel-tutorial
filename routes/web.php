<?php

use Illuminate\Support\Facades\Route;

// ! route with get http verb
Route::get("/app" , function (){
    return "hello world";
});

// ! route with post http verb
Route::post("/login/verify" , function(){
    return "user verified";
});

// ! route with put http verb
Route::put("/login/verify/put" , function(){
    return "user verified";
});

// ! route with get and post [match] http verb
Route::match(['get' , 'post'] , "/" , function (){
    return "this is a match route";
});

// ! route with every http verbs
Route::any("/any" , function(){
    return "this is a any route";
});

// ! route with required parameters
// Route::get("/user/{id}" , function($id){
//     return "user with id {$id}";
// });

// ! route with optional parameters
Route::get("/user/{id?}" , function($id = 1){
    return "user with id {$id}";
});

// ! redirect route
Route::redirect("/redirect" , "/" , 301);
