<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\News;
use App\Models\Page;

class NewsPageController extends Controller
{
    public function index()
    {

        $news_page = Page::whereSlug('novosti')->firstOrFail();
        $news = News::orderBy('id', 'DESC')->get();
        $block_callback_form = Block::whereId(5)->where('is_active', 'TRUE')->firstOrFail();
        $block_questions = Block::whereId(1)->where('is_active', 'TRUE')->firstOrFail();

        return view('news', compact(
            'news',
            'news_page',
            'block_callback_form',
            'block_questions'
        ));
    }
    public function show($news_slug)
    {
        $item = News::whereSlug($news_slug)->firstOrFail();
        $news = News::orderBy('id', 'DESC')->take(8)->get();
        $block_callback_form = Block::whereId(5)->where('is_active', 'TRUE')->firstOrFail();
        $block_articles_news = Block::whereId(2)->where('is_active','TRUE')->firstOrFail();

        return view('news-single', compact(
            'item',
            'news',
            'block_callback_form',
            'block_articles_news'
        ));
    }
}
