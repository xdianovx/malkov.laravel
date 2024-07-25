<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Page;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewPageController extends Controller
{
    public function index()
    {
        $reviews_page = Page::whereSlug('otzyvy')->firstOrFail();
        $reviews = Review::orderBy('id', 'DESC')->get();
        $block_callback_form = Block::whereId(5)->where('is_active', 'TRUE')->firstOrFail();
        $block_questions = Block::whereId(1)->where('is_active', 'TRUE')->firstOrFail();
        return view('reviews', compact(
            'reviews',
            'reviews_page',
            'block_callback_form',
            'block_questions'
        ));
    }
    // public function show($news_slug)
    // {
    //     $item = Review::whereSlug($news_slug)->firstOrFail();
    //     $reviews = Review::orderBy('id', 'DESC')->take(8)->get();
    //     $block_callback_form = Block::whereId(5)->where('is_active', 'TRUE')->firstOrFail();
    //     $block_articles_news = Block::whereId(2)->where('is_active','TRUE')->firstOrFail();

    //     return view('news-single', compact(
    //         'item',
    //         'reviews',
    //         'block_callback_form',
    //         'block_articles_news'
    //     ));
    // }
}
