<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function addArticlePage()
    {
        return view('admin.add_article');
    }

    public function addArticle(Request $request)
    {
        //    dd($request->all());
        $title = $request->article_title;
        $content = $request->article_content;
        $publish = $request->publish_time;
        $publishNow = $request->publish_now;


        if ($request->has('article_image')) {
            $image = $request->file('article_image');
            $filenameExt = $image->getClientOriginalExtension();
            $image_name = 'img_' . rand(999999, 9999999) . '.' . $filenameExt;
            $image->move(public_path('assets/img/article_images/'), $image_name);
        } else {
            $image_name = null;
        }

        if (is_null($publishNow)) {
            $publish_time = $publish;
        } else {
            $publish_time = now();
        }

        Articles::create([
            'user_id' => auth()->user()->id,
            'article_title' => $title,
            'article_image' => $image_name,
            'article_content' => $content,
            'publish_time' => $publish_time
        ]);
        $success_message = "Makale başarıyla kaydedildi. Yayınlanma tarihinde yayınlanacak";
        return redirect('admin/')->with('success',$success_message);
    }

    public function editArticlePage()
    {
//        $articles = DB::select('select articles.id, users.name, articles.article_title, articles.article_content, articles.publish_time, articles.created_at, articles.updated_at from users, articles where users.id=articles.user_id');


        $articles = DB::table('articles')
            ->join('users', 'users.id', '=', 'articles.user_id')
//            ->where('status', 1)
            ->select('*', 'articles.id as articleID','articles.created_at as article_created','articles.updated_at as article_updated')
            ->groupBy('articles.id')
            ->orderBy('articles.id', 'DESC')
            ->get();
//
//        $articles = Articles::join('users', 'users.id', '=', 'articles.user_id')
////            ->where('status', 1)
//            ->select('*', 'articles.id as id')
//            ->groupBy('articles.id')
//            ->orderBy('id', 'DESC')
//            ->get();


//        return view('admin.edit_article', ['articles' => $articles]);
        return view('admin.edit_article', compact('articles'));
    }

    public function editArticle($id)
    {
        $edit_article = DB::table('articles')
            ->join('users', 'users.id', '=', 'articles.user_id')
//            ->where('status', 1)
            ->select('*', 'articles.id as articleID','articles.created_at as article_created','articles.updated_at as article_updated')
            ->where('articles.id','=',$id)
            ->get();
        return view('admin.article_editor',compact('edit_article'));
    }
    public function articleChanged(Request $request) {
        $edited_title = $request->new_article_title;
        $edited_content = $request->new_article_content;
        $edited_publish = $request->new_publish_time;
        $edited_publishNow = $request->new_publish_now;
        $edited_article = $request->article_id;

        if (is_null($edited_publishNow)) {
            $new_publish_time = $edited_publish;
        } else {
            $new_publish_time = now();
        }

        if ($request->has('new_article_image')) {
            $new_image = $request->file('new_article_image');
            $fileExt = $new_image->getClientOriginalExtension();
            $new_image_name = 'img_' . rand(999999, 9999999) . '.' . $fileExt;
            $new_image->move(public_path('assets/img/article_images/'), $new_image_name);

            DB::table('articles')
                ->where('id', $edited_article)
                ->update([
                    'article_title' => $edited_title,
                    'article_image' => $new_image_name,
                    'article_content' => $edited_content,
                    'publish_time' => $new_publish_time
                ]);
        }
        else {
            DB::table('articles')
                ->where('id', $edited_article)
                ->update([
                    'article_title' => $edited_title,
                    'article_content' => $edited_content,
                    'publish_time' => $new_publish_time
                ]);
        }


        $success_message = "Makale üzerindeki değişiklikler başarıyla kaydedildi.";
        return redirect('admin/')->with('success',$success_message);
    }
}
