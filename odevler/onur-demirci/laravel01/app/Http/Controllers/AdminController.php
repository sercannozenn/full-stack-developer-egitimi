<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function addArticlePage() {
        return view('admin.add_article');
    }

    public function addArticle(Request $request) {
    //    dd($request->all());
        $title = $request->article_title;
        $content = $request->article_content;
        $publish = $request->publish_time;
        $publishNow = $request->publish_now;



        if($request->has('article_image'))
        {
            $image = $request->file('article_image');
            $filenameExt = $image->getClientOriginalExtension();
            $image_name = 'img_'. rand(999999,9999999) . '.' . $filenameExt;
            $image->move(public_path('assets/img/article_images/'),$image_name);
        }
        else {
            $image_name = "resim gelmedi";
        }
        if (is_null($publishNow)) {
            $publish_time = $publish;
        }
        else {
            $publish_time = now();
        }

        Articles::create([
           'user_id' => auth()->user()->id,
           'article_title' => $title,
           'article_image' => $image_name,
           'article_content' => $content,
           'publish_time' => $publish_time
        ]);
        return redirect('admin/')->with('success',"Makale başarıyla kaydedildi. Yayınlanma tarihinde yayınlanacak");
    }

    public function editArticlePage() {
        $articles = DB::select('select articles.id, users.name, articles.article_title, articles.article_content, articles.publish_time, articles.created_at, articles.updated_at from users, articles where users.id=articles.user_id');
        return view('admin.edit_article',['articles'=>$articles]);
    }
}
