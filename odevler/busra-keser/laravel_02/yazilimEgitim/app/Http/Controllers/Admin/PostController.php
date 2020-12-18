<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts_add');
    }
    public function add(Request $request){
//
//        $title=$request->title;
//        $content=$request->content;
//        $status=$request->status;
//        $user=Auth::user();
//
//        $data=[
//            'title'=>$title,
//            'content'=>$content,
//            'status'=>$status ? 1 : 0,
//            'user_id'=>$user->id
//            ];
//
//        $post = Posts::create($data);
//        dd($post);




    }

}
