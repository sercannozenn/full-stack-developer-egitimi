<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use App\Models\PostModel;
use App\Models\TagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $data = PostModel::all();


        return view('admin.post_list', compact('data'));
    }

    public function add()
    {
        $category = PostCategory::all();
        return view('admin.post_add', compact('category'));
    }

    public function store(Request $request)
    {


        $data = new PostModel();
        $data->title = $request->title;
        $data->content = $request->posts;
        $data->user_id = Auth::user()->id;
        $data->status = $request->status ? 1 : 0;
        $data->category_id = $request->category_id;
        $data->tags_id = $request->tags_id;
        $data->slug = Str::slug($request->title);
        if ($request->hasFile('image')) {
            $iname = Str::slug($request->title) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $iname);
            $data->image = 'uploads/' . $iname;
            $data->save();
        }

        $data->save();
      //  return redirect()->back();
        return response()->json(['message' => 'Başarılı', 'status' => $data->status], 200);

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

    public function search(Request $request)
    {
        $data = $request->all();
        $category = null;
        foreach ($data as $item) {
            $category = DB::table('tags')
                ->where('name', 'like', '%' . $item . '%')
                ->get(['tags.name AS text', 'tags.*']);
        }
        return response()->json([
            "results" => $category
        ]);
    }
}
