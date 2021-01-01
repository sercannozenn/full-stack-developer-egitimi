<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\Posts;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $list = Posts::all();

        return view('admin.post_list', compact('list'));
    }

    public function create()
    {
        $category = PostCategory::where('status', 1)->get();

        return view('admin.post_add', compact('category'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        if ($image)
        {
            $name = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $explode = explode('.', $name);
            $name = $explode[0] . '_' . now()->format('d-m-Y_H-i-s') . '.' . $extension;
            $publicPath = 'public/';
            $path = 'postImage/';
            Storage::putFileAs($publicPath . $path, $image, $name);
        }

        Posts::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title, '-'),
            "user_id" => Auth::id(),
            "category_id" => $request->category_id,
            "tags_id" => json_encode(substr($request->tag_ids, 0, -1)),
            "content" => $request->text,
            "status" => isset($request->status) ? 1 : 0,
            "image" => $image ? $path . $name : null,
            "publish_date" => isset($request->publishNow) ? now() : $request->publish_date,
        ]);
        alert()->success('Başarılı', 'Post eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('post.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = Posts::find($id);
        $category = PostCategory::where('status', 1)->get();

        $tagsID = json_decode($post->tags_id);
        $tagsID = explode(',', $tagsID);
        $tagsIDArr = [];
        foreach ($tagsID as $item)
        {
            $tagsIDArr[] = Tag::find($item);
        }
        $tagsID = $tagsIDArr;
        return view('admin.post_add', compact('category', 'post', 'tagsID'));

    }

    public function update(Request $request, $id)
    {
        $post = Posts::find($id);

        $image = $request->file('image');

        if ($image)
        {
            $name = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $explode = explode('.', $name);
            $name = $explode[0] . '_' . now()->format('d-m-Y_H-i-s') . '.' . $extension;
            $publicPath = 'public/';
            $path = 'postImage/';
            Storage::putFileAs($publicPath . $path, $image, $name);
            $post->image = $path . $name;
        }

        $post->title = $request->title;
        $post->slug = Str::slug($request->title, '-');
        $post->category_id = $request->category_id;
        $post->tags_id = json_encode(substr($request->tag_ids, 0, -1));
        $post->content = $request->text;
        $post->status = isset($request->status) ? 1 : 0;
        $publishDate = $post->publish_date;

        if (isset($request->publishNow))
        {
            /**
             *
             * Eğer şimdi yayınla aktifse ve publish_date boşsa şu anı ver.
             *
             * Eğer şimdi yayınla aktifse
             * Veritabanındaki publish_date doluysa ve veritabanındaki publish date şu andan büyükse
             * publish_date i şimdi yap
             *
             * Eğer şimdi yayınla aktifse
             * Veritabanındaki publish_date doluysa ve veritabanındaki publish_date şu andan küçükse
             * publish date i elleme
             *
             */
            if (is_null($publishDate) || ($publishDate && ($publishDate > now())))
            {
                $post->publish_date = now();
            }
        }
        else if ($publishDate && $publishDate > now())
        {
            $post->publish_date = $request->publish_date;
        }
//        $post->publish_date = isset($request->publishNow) && ($post->publish_date) ? now() : $request->publish_date;
        $post->save();

        alert()->success('Başarılı', 'Post güncellendi.')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        Posts::where('id', $id)->delete();

        return response()->json(['status' => 1], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->id;

        $post = Posts::find($id);

        $post->status = $post->status ? 0 : 1;
        $post->save();

        return response()->json(['status' => $post->status], 200);
    }
}
