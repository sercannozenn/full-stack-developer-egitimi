<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\Posts;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function listPosts() {
        $posts = Posts::all();

        return view('admin.post_list',compact('posts'));
    }

    public function addPostPage() {
        $categories = PostCategory::all();

        return view('admin.post_add',compact('categories'));
    }

    public function savePost(Request $request) {

        $post_title = $request->title;
        $post_category = $request->category;
        $tag_ids = json_encode($request->tag_ids);
        $publish = $request->publish_date;
        $publishNow = $request->publishNow;
        $post_content = $request->post_content;
        $status = $request->status;
        $slug = Str::slug($post_title,"-");


        if (is_null($publishNow)) {
            $publish_time = $publish;
        } else {
            $publish_time = now();
        }

        $data = [
            'title' => $post_title,
            'content' => $post_content,
            'user_id' => Auth::id(),
            'status' => $status ? 1 : 0,
            'slug' => $slug,
            'tags_id'=> $tag_ids,
            'publish_date' => $publish_time,
            'category_id' => $post_category
        ];

        Posts::create($data);
        alert()->success('Başarılı', 'Makale eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('admin.index');


    }

    public function editPostPage($id) {
        $post = Posts::find($id);
        $categories = PostCategory::all();
        $tags = Tags::all();

        return view('admin.edit_post',compact('post','categories','tags'));
    }

    public function editPost(Request $request, $id) {
        $post = Posts::find($id);
        $post->title = $request->title;
        $post->content = $request->post_content;
        $status = $post->status;
        $post->status = $status ? 1 :0;
        $post->slug = Str::slug($request->title,"-");
        $post->category_id = $request->category;
        $post->tags_id = json_encode($request->tag_ids);
        $publishNow = $request->publishNow;

        if (is_null($publishNow)) {
            $post->publish_date = $post->publish_date;
        } else {
            $post->publish_date = now();
        }

        $post->save();
        alert()->success('Başarılı', 'Makaledeki değişiklikler kaydedildi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('admin.post.list');
    }

    public function deletePost(Request $request) {
        $postID = $request->id;

        Posts::where('id', $postID)->delete();

        return response()->json(['message' => 'Başarılı'], 200);
    }

    public function changePostStatus(Request $request) {
        try
        {
            $postID = $request->id;

            $post = Posts::find($postID);

            $status = $post->status;

            $post->status = $status ? 0 : 1;
            $post->save();

            return response()->json(['message' => 'Başarılı', 'status' => $post->status], 200);
        }
        catch (\Exception $exception)
        {
            return response()->json(['message' => 'Başarısız', 'status' => $status], 500);
        }
    }

    public function getTags(Request $request) {
        $term = $request->term;
        $tags = DB::table('tags')
            ->select('id','name')
            ->where('name','like',"%$term%")
            ->get();

        return $tags;
    }
}
