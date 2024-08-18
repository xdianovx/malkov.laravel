<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\News;
use App\Models\Page;
use App\Models\Review;
use App\Models\Service;
use App\Models\ShowReel;
use App\Models\Specialist;
use App\Models\Stock;

class WelcomePageController extends Controller
{
    public function index()
    {
        $home_page = Page::whereSlug('glavnaya')->firstOrFail();
        $stocks = Stock::where('slider_active', 'TRUE')->orderBy('id', 'DESC')->get();
        $services = Service::orderBy('id', 'DESC')->take(8)->get();
        $show_reel = ShowReel::where('is_cover', 'TRUE')->first();
        $specialists = Specialist::orderBy('id', 'DESC')->take(8)->get();
        $news = News::orderBy('id', 'DESC')->take(8)->get();
        $block_questions = Block::whereId(1)->where('is_active', 'TRUE')->firstOrFail();
        $block_articles_news = Block::whereId(2)->where('is_active', 'TRUE')->firstOrFail();
        $block_specialists = Block::whereId(3)->where('is_active', 'TRUE')->firstOrFail();
        $block_services = Block::whereId(4)->where('is_active', 'TRUE')->firstOrFail();
        $block_callback_form = Block::whereId(5)->where('is_active', 'TRUE')->firstOrFail();
        $block_reviews = Block::whereId(6)->where('is_active', 'TRUE')->firstOrFail();
        $block_ratings = Block::whereId(7)->where('is_active', 'TRUE')->firstOrFail();
        $reviews = Review::orderBy('id', 'DESC')->take(8)->get();

        return view('welcome', compact(
            'services',
            'stocks',
            'home_page',
            'show_reel',
            'specialists',
            'news',
            'reviews',
            'block_questions',
            'block_articles_news',
            'block_specialists',
            'block_services',
            'block_callback_form',
            'block_reviews',
            'block_ratings'
        ));
    }
}
