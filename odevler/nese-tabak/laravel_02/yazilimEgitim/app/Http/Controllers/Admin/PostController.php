<?php

namespace App\Http\Controllers\Admin;

use App\Models\PostCategory;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\PostList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        return view('admin.post_list',);

    }

    public function addPost()
    {


        $category = PostCategory::all();
        return view('admin.post_add', compact('category'));

    }

    public function listPost()
    {
        $list = PostList::all();
        return view('admin.post_list',compact('list'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $name = $request->name;
        $title = $request->title;
        $content = $request->text;
        $status = $request->status;
        $category_id =$request->category_id;
//        $tags_id = json_encode(1);
        $user = Auth::user();

        $data = [
            'name' => $name,
            'title' => $title,
            'content' => $content,
            'slug' => Str::slug($name),
            'status' => $status ? 1 : 0,
            'user_id' => $user->id,
//            'tags_id'=>$tags_id,
            'category_id'=>$category_id

        ];
//        dd($data);

        PostList::create($data);

        alert()->success('Başarılı', 'Kategori eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post = PostList::find($id);

        return response()->json([
            'post' => $post
        ], 200);
    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }

    public function changeStatus(Request $request)
    {
        try
        {
            $postID = $request->id;

            $list = PostList::find($postID);

            $status = $list->status;

            $list->status = $status ? 0 : 1;
            $list->save();

            return response()->json(['message' => 'Başarılı', 'status' => $list->status], 200);
        }
        catch (\Exception $exception)
        {
            return response()->json(['message' => 'Başarısız', 'status' => $status], 500);
        }
    }


    public function delete(Request $request)
    {


        $listID = $request->id;
        PostList::find($listID);
        PostList::where('id', $listID)->delete();

        return response()->json(['message' => 'Başarılı'], 200);

    }
}
