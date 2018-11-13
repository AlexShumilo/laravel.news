<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Comment;

class NewsController extends Controller
{
    public function show($category = NULL) {

        if($category == NULL){
            $news = News::with('category')->orderBy('created_at', 'desc')->simplePaginate(5);
        } else {
            $categoryNews = Category::where('category_code', $category)->first();
            $news = News::with('category')->where('category_id', $categoryNews->id)->orderBy('created_at', 'desc')->simplePaginate(5);
        }

        return view('news', ['news'=>$news]);
    }

    public function detail($category, $newsCode) {
        $news = News::where('news_code', $newsCode)->first();
        $comments = Comment::where('news_id', $news->id)->where('checked', true)->orderBy('created_at', 'desc')->simplePaginate(3);
        $news->increment('news_views');

        return view('news_detail', ['news'=>$news, 'comments'=>$comments]);
    }

    public function search(Request $request) {
        $news = News::with('category')->where('news_title', 'like', '%'.$request->news_search.'%')->
            orWhere('news_short_content', 'like', '%'.$request->news_search.'%')->
            orWhere('news_content', 'like', '%'.$request->news_search.'%')->simplePaginate(5);

        return view('news', ['news'=>$news]);
    }
}
