<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\PostCategory;
use App\Models\Tags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function index()
    {
        $post_list = Posts::all();

        return view('admin.post_list', compact('post_list'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        dd($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function addPost() {
        $tags = Tags::all();
        $categories = PostCategory::all();
        return view('admin.post_add',compact('tags','categories'));
    }
}
