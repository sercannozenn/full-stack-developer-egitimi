<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use function MongoDB\BSON\toJSON;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Post = Post::all();
        $category = PostCategory::all();
        $tag = PostTag::all();
        return view('admin.post_list',compact(['Post','category','tag']));
    }

    public function addView(){
        $PostTag = PostTag::where('status',1)->get(); //MAKALE EKLEME KISMINDA SADECE AKTİF ETİKETLERİ ÇEKTİM
        $PostCategory = PostCategory::where('status',1)->get(); //AYNI ŞEKİLDE SADECE AKTİF ETTİĞİMİZ KATEGORİLERİ ÇEKTİM
        return  view('admin.post_add',compact(['PostTag','PostCategory']));
    }

    public function create()
    {
        //
    }

    public function store(PostRequest $request)
    {
        $title = $request->title;
        $category = $request->category_id;
        $tags = $request->tags_id;
        $tags = json_encode($tags);
        $image = $request->image;
        $publishDate = $request->publish_date;
        $status = $request->status;
        $ckEditor = $request->ckeditor;
        $slug = Str::slug($title, '-');
        if ($request->hasFile('image')){
            $imageName = rand(1,10000).$slug.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $image = 'uploads/'.$imageName;
        }


        $userID = Auth::user();

        $data = [
          'title' => $title,
          'user_id' =>$userID->id,
          'category_id' => $category,
          'tags_id' => $tags,
          'publish_date' => $publishDate,
          'status' => $status ? 1:0,
          'image' => $image,
          'content' => $ckEditor,
          'slug' => $slug
        ];

        Post::create($data);

        alert()->success('Başarılı', 'Makale eklendi')
            ->showConfirmButton('Tamam', '#3085d6');

        return redirect()->route('view.index');

    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $tags = $request->tags_id;
        $tags = json_encode($tags);
        $post->tags_id = $tags;
        $post->content = $request->ckeditor;
        $post->publish_date = $request->publish_date;

        $post->slug = Str::slug($post->title,'-');

        $request->status ? $status=1 : $status=0;
        $post->status = $status;
        if ($request->image){
            if ($post->image){
            unlink($post->image);
            $post->image='';
            }
            $imageName = rand(1,10000).$post->slug.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $image = 'uploads/'.$imageName;
            $post->image = $image;
        }
        $post->save();

        alert()->success('Başarılı', 'Makale güncellendi')
            ->showConfirmButton('Tamam', '#3085d6');
        return redirect()->route('view.index');
    }


    public function delete(Request $request)
    {
        $postID = $request->id;
        $post = Post::where('id', $postID)->delete();

        return response()->json(['message' => $post], 200);

    }

    public function changeStatus(Request $request)
    {
        try
        {
            $post = Post::find($request->id);
            $post->status = $post->status ? 0 : 1;
            $post->save();

            return response()->json(['message' => 'Başarılı', 'status' => $post->status], 200);
        }
        catch (\Exception $exception)
        {
            return response()->json(['message' => 'Başarısız', 'status' => $post->status], 500);
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return response()->json([
            'post' => $post
        ], 200);
    }


   public function destroy($id)
    {
        //
    }
}
