<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Review\StoreRequest;
use App\Models\Block;
use App\Models\Page;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewPageController extends Controller
{
    public function index()
    {
        $reviews_page = Page::whereSlug('otzyvy')->firstOrFail();
        $reviews = Review::where('is_active', 'on')->orderBy('id', 'DESC')->paginate(8)->withQueryString();
        $block_callback_form = Block::whereId(5)->firstOrFail();
        $block_questions = Block::whereId(1)->firstOrFail();
        return view('reviews', compact(
            'reviews',
            'reviews_page',
            'block_callback_form',
            'block_questions'
        ));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['date'] = date('Y-m-d');
        $data['is_active'] = 'off';
        Review::firstOrCreate($data);

        return redirect()->route('reviews')->with('status', 'item-created');
    }
    // public function show($news_slug)
    // {
    //     $item = Review::whereSlug($news_slug)->firstOrFail();
    //     $reviews = Review::orderBy('id', 'DESC')->take(8)->get();
    //     $block_callback_form = Block::whereId(5)->firstOrFail();
    //     $block_articles_news = Block::whereId(2)->firstOrFail();

    //     return view('news-single', compact(
    //         'item',
    //         'reviews',
    //         'block_callback_form',
    //         'block_articles_news'
    //     ));
    // }
}
