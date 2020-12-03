<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.adminPanel');
    }

    public function  showAddPost()
    {
        return view('admin.addPost');
    }
    public function  addPost(Request $request)
    {
        dd($request->all());
    }


}
