<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

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

        if (is_null($publishNow)) {
            $publish_time = $publish;
        }
        else {
            $publish_time = now();
        }

        Articles::create([
           'user_id' => auth()->user()->id,
           'article_title' => $title,
           'article_content' => $content,
           'publish_time' => $publish_time
        ]);
        return view('admin.add_article');
    }
}
