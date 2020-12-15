<?php

namespace App\Http\Controllers;

use App\Models\TagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TagController extends Controller
{
    public function index()
    {
        $data= TagModel::all();

        return view('admin.tag_list',compact('data'));
    }

    public function create()
    {
        return view('admin.tag_add');
    }

    public function store(Request $request)
    {
        $validate=$request->validate([
            'data'=>'required|min:3'
        ]);
        $data = $request->data;
        $userID=Auth::user()->id;
        $post = trim( $data,"close");

        $PostData = new TagModel();
        $PostData->status=1;
       $PostData->name =$post;
        $PostData->user_id = $userID;

        $PostData->save();

        return response()->json(['message' => 'Başarılı', 'status' => $PostData->status], 200)->isRedirect('admin/etiket/add');


    }
    public function delete(Request $request)
    {
        $categoryID = $request->id;
        TagModel::findOrFail($categoryID)->delete();
        return response()->json(['message' => 'Başarılı'], 200);
    }

    public function edit($id)
    {

        $tag = TagModel::findOrFail($id);

        return response()->json([
            'tag' => $tag
        ], 200);
    }
}
