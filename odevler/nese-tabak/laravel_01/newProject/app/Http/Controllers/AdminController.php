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
        return view('admin.adminPanel');
    }

    public function showAddPost()
    {
        return view('admin.addPost');
    }

    public function addPost(Request $request)
    {


        $name = $request->name;
        $content = $request->content;
        $status = $request->status;

        $data =
            [
                'name' => $name,
                'content' => $content
            ];

        if (!is_null($status))
        {
            $data['status'] = 1;
        }

        Posts::create($data);

        dd("Kayıt Oluşturuldu", $request->all());

    }


}
