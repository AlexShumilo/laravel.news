<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;

class IndexController extends Controller
{
    public function show() {

        $data = [
            'topNews' => News::with('category')->where('news_views', '>', 5)->orderBy('news_views', 'desc')->take(5)->get(),
            'lastNews' => News::with(['category', 'comments'])->orderBy('created_at', 'desc')->take(5)->get(),
            'partners' => DB::table('partners')->get()
        ];

        return view('index', $data);

    }
}
