<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Blog;
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
        $page = Page::whereSlug('glavnaya')->firstOrFail();
        $stocks = Stock::where('slider_active', 'TRUE')->orderBy('id', 'DESC')->get();
        $services = Service::where('parent_id', null)->orderBy('id', 'DESC')->take(8)->get();
        $show_reel = ShowReel::where('is_cover', 'TRUE')->first();
        $specialists = Specialist::orderBy('id', 'DESC')->take(8)->get();
        $blogs = Blog::orderBy('id', 'DESC')->take(8)->get();
        $block_questions = Block::whereId(1)->firstOrFail();
        $block_articles_blog = Block::whereId(2)->firstOrFail();
        $block_specialists = Block::whereId(3)->firstOrFail();
        $block_services = Block::whereId(4)->firstOrFail();
        $block_callback_form = Block::whereId(5)->firstOrFail();
        $block_reviews = Block::whereId(6)->firstOrFail();
        $block_ratings = Block::whereId(7)->firstOrFail();
        $reviews = Review::orderBy('id', 'DESC')->take(8)->get();

        return view('welcome', compact(
            'services',
            'stocks',
            'page',
            'show_reel',
            'specialists',
            'blogs',
            'reviews',
            'block_questions',
            'block_articles_blog',
            'block_specialists',
            'block_services',
            'block_callback_form',
            'block_reviews',
            'block_ratings'
        ));
    }
}
