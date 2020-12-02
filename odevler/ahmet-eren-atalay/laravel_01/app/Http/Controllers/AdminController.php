<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {


        $data=Posts::all();

        return view('admin.index',compact('data'));
    }

    public function showAddPost()
    {
        return view('admin.addPost');
    }

    public function addPost(Request $request)
    {

        $title = $request->title;
        $content = $request->content;
        $status=$request->status;

        $data = [
            'title' => $title,
            'content' => $content
        ];

        if(!is_null($status))
        {
            $data['status'] = 1;
        }

        Posts::create($data);

        return redirect("/");
    }


}
