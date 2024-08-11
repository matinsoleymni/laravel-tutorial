<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // ! method for get all posts
    public function all()
    {
        return "all posts 24";
    }

    // ! method for render create new post page
    public function create()
    {
        return "welcome to create page";
    }

    // ! method for delete post
    public function delete(string $id)
    {
        return "post deleted, id : {$id}";
    }
}
