<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $post;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function showAddPost()
    {
        return view('admin.addPost');
    }

    public function addPost(Request $request)
    {

        $name = $request->title;
        $content = $request->content;
        $status = $request->status;

//        $post = new Posts();
//        $post->name = $name;
//        $post->content = $content;
//        $post->status = $status;
//        if (!is_null($status))
//        {
//            $post->status = 1;
//        }
//        $post->save();

        $data = [
            'name' => $name,
            'content' => $content
        ];
        if (!is_null($status))
        {
            $data['status'] = 1;
        }


        Posts::create($data);


        dd("Kayıt oluşturuldu");

    }
}
