<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function addPost()
    {
        return view('admin.addpost');
    }

    public function getAllPost()
    {
        return view('admin.getallpost');
    }
}
