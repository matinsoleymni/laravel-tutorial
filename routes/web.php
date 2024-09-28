<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/users/create" , function() {
    $user = User::create([
        'name' => "zmat24",
        'email' => "zmat24@gmail.com",
        'password' => 11223344
    ]);

    dd($user);
});

Route::get("/posts/create" , function(){
    $post = new Post();
    $post->title = "welcome to laravel course 2";
    $post->description = "learn laravel and enjoy 2";
    $post->content = "learn laravel zero to hero 2";
    $post->user_id = 1;
    $post->save();
});


Route::get("/posts/{id?}" , function($id = 0){
    if($id)
    {
        $post = Post::findOrFail($id);
        // $user = User::find($post->user_id);
        // dd($post , $user);
        dd($post , $post->writer);
    }

    $posts = Post::all();
    dd($posts);
});


Route::get("/posts/select/{title}" , function($title){
    $post = Post::where("title" , $title)->where("user_id" , "=" , 1)->firstOrFail();
    dd($post);
});

Route::get("/users/{id?}" , function($id = 0){
    if($id)
    {
        $user = User::findOrFail($id);
        dd($user->posts);
    }

    $users = User::all();
    dd($users);
});
