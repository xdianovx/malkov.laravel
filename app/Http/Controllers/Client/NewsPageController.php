<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Page;

class NewsPageController extends Controller
{
    public function index()
    {

        $news_page = Page::whereSlug('novosti')->firstOrFail();
        $news = News::orderBy('id', 'DESC')->get();

        return view('news', compact(
            'news',
            'news_page',
        ));
    }
    public function show($news_slug)
    {
        $item = News::whereSlug($news_slug)->firstOrFail();
        $news = News::orderBy('id', 'DESC')->take(8)->get();

        return view('news-single', compact(
            'item',
            'news',
        ));
    }
}
