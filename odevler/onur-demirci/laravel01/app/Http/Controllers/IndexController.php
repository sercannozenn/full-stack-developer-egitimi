<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $articles = DB::table('articles')
            ->join('users', 'users.id', '=', 'articles.user_id')
//            ->where('status', 1)
            ->select('*', 'articles.id as articleID','articles.created_at as article_created','articles.updated_at as article_updated')
            ->groupBy('articles.id')
            ->orderBy('articles.id', 'DESC')
            ->limit(12)
            ->get();

        return view('front.index',compact('articles'));
    }
}
