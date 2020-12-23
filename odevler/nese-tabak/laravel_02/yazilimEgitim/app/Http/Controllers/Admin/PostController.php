<?php

namespace App\Http\Controllers\Admin;

use App\Models\PostCategory;

use App\Models\TagList;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\PostList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $list = PostList::all();

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

        $title = $request->title;
        $content = $request->text;
        $status = isset($request->status);
        $category_id = $request->category_id;
        $tags_id = $request->tag_ids;
        $publish_date = isset($request->publishNow);
        $user = Auth::user();

        $data = [
            'title' => $title,
            'content' => $content,
            'slug' => Str::slug($title, '-'),
            "status" => $status ? 1 : 0,
            "image" => $image ? $path . $name : null,
            "publish_date" => $publish_date ? now() : $request->publish_date,
            "tags_id" => json_encode(substr($tags_id, 0, -1)),
            'user_id' => $user->id,
            'category_id' => $category_id

        ];
//        dd($data);

        PostList::create($data);

        alert()->success('Başarılı', 'Kategori eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('post.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post = PostList::find($id);
        $category = PostCategory::where('status', 1)->get();

        $tagsID = json_decode($post->tags_id);
        $tagsID = explode(',', $tagsID);
        $tagsIDArr = [];
        foreach ($tagsID as $item)
        {
            $tagsIDArr[] = TagList::find($item);
        }
        $tagsID = $tagsIDArr;
        return view('admin.post_add', compact('category', 'post', 'tagsID'));
    }


    public function update(Request $request, $id)
    {
//        dd($request->all());
//        dd($id);
        $post = PostList::find($id);

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
            $post ->image= $path . $name;
        }

        $title = $request->title;
        $content = $request->text;
        $status = isset($request->status);
        $category_id = $request->category_id;
        $tags_id = $request->tag_ids;
        $publish_date = isset($request->publishNow);
        $user = Auth::user();

        $data = [
            'title' => $title,
            'content' => $content,
            'slug' => Str::slug($title, '-'),
            "status" => $status ? 1 : 0,
            "image" => $image ? $path . $name : null,
            "publish_date" => $publish_date ? now() : $request->publish_date,
            "tags_id" => json_encode(substr($tags_id, 0, -1)),
            'user_id' => $user->id,
            'category_id' => $category_id

        ];
        PostList::where('id', $id)->update($data);


        alert()->success('Başarılı', 'Liste güncellendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('post.index');
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
