<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        $data=Posts::all();

        return view('front.index',compact('data'));
    }
}
