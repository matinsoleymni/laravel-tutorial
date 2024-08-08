<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ! route with get http verb
Route::get("/app24" , function (){
    return "hello world";
})->name("app");

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
Route::get("/user/{name}" , function($name){
    return "user with id {$name}";
});

// ! route with optional parameters
Route::get("/user/{id?}" , function($id = 1){
    return "user with id {$id}";
});

// ! redirect route
Route::redirect("/redirect" , "/" , 301);

// ! route with dependency injection
Route::get("/contact" , function(Request $request){
    dd($request);
    return "hello";
})->name("contact");

// ! route with parament and where
Route::get("/posts/{id}" , function(string $id){
    return $id;
})->where("id" , "[0-9]+");

// ! named routes
Route::get("/namedRoute" , function(){
    return "this is named route";
})->name("namedRoute");

// ! route with parament and dependency injection and advanced wheres
Route::get("/posts/{slug}/{category}" , function(Request $request , string $slug , string $category){
    return redirect()->route("contact");
})->whereAlphaNumeric(['slug'])->whereIn('category' , ['tech' , 'programming' , 'laravel' , 'php']);

// ! group routes
Route::group(["prefix" => "auth"] , function(){
    Route::get("/forget-password" , function(){
        return "hello forget password";
    })->name("forget-password");
});

// ! group routes anther way
Route::prefix("auth")->group(function(){
    Route::get("/otp" , function(){
        $otp = true;
        if($otp)
        {
            // ? redirect user to named route
            return redirect()->route("forget-password");
        }
        return redirect("/");
    });
});
