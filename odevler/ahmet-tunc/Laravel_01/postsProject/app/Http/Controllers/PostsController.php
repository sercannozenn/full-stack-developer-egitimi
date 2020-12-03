<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function showAddPost()
    {
        return view('admin.addpost');
    }

    public function addPost(Request $request)
    {
        dd($request->all());
        $title = $request->title;
        $content = $request->content;
        $status = $request->status;

        if (is_null($status))
        {
            $status = 0;
        }
        else
        {
            $status = 1;
        }

        Posts::create([
            'title' => $title,
            'content' => $content,
            'status' => $status
        ]);
        dd("kayıt oluşturuldu");
    }

    public function getAllPost()
    {
        return view('admin.getallpost');
    }
}
