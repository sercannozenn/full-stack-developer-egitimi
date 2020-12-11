<?php

namespace App\Http\Controllers;

use App\Models\TagModel;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('admin.tag_list');
    }

    public function create()
    {
        return view('admin.tag_add');
    }

    public function store(Request $request)
    {

        $data = $request->data;


        $post = explode('close', $data);
        $json = json_encode($post);
        $PostData = new TagModel();
        $PostData->status=1;
        $PostData->name = $json;
        $PostData->save();
        return response()->json(['message' => 'Başarılı', 'status' => $PostData->status], 200);


    }
}
