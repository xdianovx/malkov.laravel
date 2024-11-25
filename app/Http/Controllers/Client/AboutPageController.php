<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\ModernOffice;
use App\Models\Page;
use App\Models\Service;
use App\Models\Stock;

class AboutPageController extends Controller
{
    public function index()
    {

        $about_page = Page::whereSlug('o-nas')->firstOrFail();
        $block_services = Block::whereId(4)->firstOrFail();
        $block_questions = Block::whereId(1)->firstOrFail();
        $services = Service::orderBy('id', 'DESC')->take(8)->get();
        $block_modern_offices = Block::whereId(8)->firstOrFail();
        $stocks = Stock::where('slider_active', 'TRUE')->orderBy('id', 'DESC')->get();
        return view('about', compact(
            'about_page',
            'services',
            'block_services',
            'block_questions',
            'block_modern_offices',
            'stocks'
        ));
    }
}
