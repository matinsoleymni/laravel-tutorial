<?php

use App\Http\Controllers\PhotosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ! api get route
Route::get("/cars" , function(){
    return response()->json(['message' => "welcome to api"]);
});

// ! get parameter from request body
Route::post("/cars" , function(Request $request){
    return response()->json(['code' => 200 , 'message' => $request->name ?? "benz"]);
});

// ! api resources controller
Route::apiResource("photos" , PhotosController::class);
