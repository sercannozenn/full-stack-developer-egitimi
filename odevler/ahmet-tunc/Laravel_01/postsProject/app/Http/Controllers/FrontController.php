<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data['postCount'] = Posts::get();
        $data['userCount'] = User::get();
        return view('admin.index',$data);
    }
}
