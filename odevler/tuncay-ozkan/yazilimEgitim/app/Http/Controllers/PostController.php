<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = PostModel::all();


        return view('admin.post_list', compact('data'));
    }

    public function add()
    {
        $category=PostCategory::all();
        return view('admin.post_add',compact('category'));
    }

    public function store(Request $request)
    {

    }

    public function changeStatus(Request $request)
    {
        $id = $request->id;
        $data = PostModel::findOrFail($id);
        $status = $data->status;
        if ($status == 1) {
            $data->status = 2;
            $data->save();
            return response()->json(['message' => 'Başarılı', 'status' => $data->status], 200);
        } else {
            $data->status = 1;
            $data->save();
            return response()->json(['message' => 'Başarılı', 'status' => $data->status], 200);

        }


    }
}
