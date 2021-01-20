<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    public function index()
    {
        $data['data'] = Posts::get();
        return view('userpages.index',$data);
    }
}
