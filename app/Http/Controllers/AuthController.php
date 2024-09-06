<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        dd($request->all() , $request->age , $request->input("fsdfsdfsdfds" , "zmat24"));
    }
}
