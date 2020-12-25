<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\Posts;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function listPosts()
    {
        $posts = Posts::all();

        return view('admin.post_list', compact('posts'));
    }

    public function addPostPage()
    {
        $categories = PostCategory::where('status', 1)->get();

        return view('admin.post_add', compact('categories'));
    }

    public function savePost(Request $request)
    {
        $image = $request->file('postImage');

        if ($image)
        {
            $image_name = $image->getClientOriginalName();
            $image_ext = $image->getClientOriginalExtension();
            $explode = explode('.',$image_name);
            $image_name = $explode[0]. '-' . now()->format('d-m-Y_H-i-s') . '.' . $image_ext;
            $public_path = "public/";
            $path = "postImage/";
            Storage::putFileAs($public_path.$path,$image,$image_name);


        }

        $post_title = $request->title;
        $post_category = $request->category;
        $tag_ids = json_encode($request->tag_ids);
        $publish = $request->publish_date;
        $publishNow = $request->publishNow;
        $post_content = $request->post_content;
        $status = $request->status;
        $slug = Str::slug($post_title, "-");


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
            'image' => $image ? $path . $image_name : null,
            'slug' => $slug,
            'tags_id' => $tag_ids,
            'publish_date' => $publish_time,
            'category_id' => $post_category
        ];

        Posts::create($data);
        alert()->success('Başarılı', 'Makale eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('admin.index');


    }

    public function editPostPage($id)
    {
        $post = Posts::find($id);
        $categories = PostCategory::where('status', 1)->get();
        $tags = Tags::all();

        return view('admin.edit_post', compact('post', 'categories', 'tags'));
    }

    public function editPost(Request $request, $id)
    {
        $id = $request->id;
        $post = Posts::find($id);
        $image = $request->file('postImage');

        if ($image)
        {
            $image_name = $image->getClientOriginalName();
            $image_ext = $image->getClientOriginalExtension();
            $explode = explode('.',$image_name);
            $image_name = $explode[0]. '-' . now()->format('d-m-Y_H-i-s') . '.' . $image_ext;
            $public_path = "public/";
            $path = "postImage/";
            Storage::delete($public_path.$path.$post->image);
            Storage::putFileAs($public_path.$path,$image,$image_name);

            $post->image = $path.$image_name;
        }


        $post->title = $request->title;
        $post->content = $request->post_content;
        $status = $post->status;
        $post->status = $status ? 1 : 0;
        $post->slug = Str::slug($request->title, "-");
        $post->category_id = $request->category;
        $post->tags_id =  ($request->tag_ids);
        $publishNow = $request->publishNow;

        if (is_null($publishNow) && is_null($request->publish_date)) {
            $post->publish_date = $post->publish_date;
        }
        elseif ($request->publish_date){
            $post->publish_date = $request->publish_date;
        }
        else {
            $post->publish_date = now();
        }

        $post->save();
        alert()->success('Başarılı', 'Makaledeki değişiklikler kaydedildi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('admin.post.list');
    }

    public function deletePost(Request $request)
    {
        $postID = $request->id;

        Posts::where('id', $postID)->delete();

        return response()->json(['message' => 'Başarılı'], 200);
    }

    public function changePostStatus(Request $request)
    {
        try {
            $postID = $request->id;

            $post = Posts::find($postID);

            $status = $post->status;

            $post->status = $status ? 0 : 1;
            $post->save();

            return response()->json(['message' => 'Başarılı', 'status' => $post->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Başarısız', 'status' => $status], 500);
        }
    }

    public function getTags(Request $request)
    {
        $term = $request->term;
        $tags = DB::table('tags')
            ->select('id', 'name')
            ->where('name', 'LIKE', "%" . $term . "%")
            ->where('status','=','1')
            ->get();

        return $tags;
    }
}
