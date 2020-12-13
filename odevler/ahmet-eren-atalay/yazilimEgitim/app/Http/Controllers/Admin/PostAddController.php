<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\PostsList;
use App\Models\TagsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostAddController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $PostCategory = PostCategory::all();
        $Tags = TagsList::all();
        $post = null;
        if ($id) {
            $post = PostsList::find($id);

            return view('admin.post_add', compact('PostCategory', 'Tags', 'post'));
        }


        return view('admin.post_add', compact('PostCategory', 'Tags', 'post'));
    }

    public function postadd(Request $request)
    {
        $title = $request->title;
        $content = $request->content;
        $slug = Str::slug($title);
        $user = Auth::user();
        $tags = $request->tags_id;
        $category = $request->category_id;

        $data = [
            'title' => $title,
            'content' => $content,
            'slug' => $slug,
            'user_id' => $user->id,
            'tags_id' => $tags,
            'category_id' => $category,
        ];
        $id = $request->id;
        if ($id) {
            PostsList::where('id', $id)->update($data);
            alert()->success('Başarılı', 'Kategori güncellendi')
                ->showConfirmButton('Tamam', '#3085d6');
            return redirect()->route('admin.post.list');
        }




        PostsList::create($data);


        alert()->success('Başarılı', 'Kategori eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('admin.post.list');


    }
}
