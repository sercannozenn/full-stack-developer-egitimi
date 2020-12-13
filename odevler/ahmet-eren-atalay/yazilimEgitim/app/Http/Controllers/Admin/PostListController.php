<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostsList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostListController extends Controller
{
    public function index()
    {
       $post = PostsList::all();

        return view('admin.post_list',compact('post'));
    }

    public function delete(Request $request)
    {
        $listID = $request->id;

        $post = PostsList::where('id',$listID)->delete();
        dd($post);

        return response()->json(['message' => 'Başarılı'], 200);
    }

    public function edit($id)
    {
        $list = PostsList::find($id);

        return response()->json([
            'list' => $list
        ], 200);
    }

    public function update(Request $request, $id)
    {

        $list = PostsList::find($id);

        $list->title = $request->title;
        $list->content = $request->content;
        $status = $request->status;
        $list->status = $status ? 1 : 0;
        $list->save();

        alert()->success('Başarılı', 'Kategori güncellendi')
            ->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('admin.post.list');
    }

    public function changeStatus(Request $request)
    {
        try {
            $listID = $request->id;

            $listPost = PostsList::find($listID);

            $status = $listPost->status;

            $listPost->status = $status ? 0 : 1;

            $listPost->save();


            return response()->json(['message' => 'Başarılı', 'status' => $listPost->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Başarısız', 'status' => $status], 500);
        }
    }

}
