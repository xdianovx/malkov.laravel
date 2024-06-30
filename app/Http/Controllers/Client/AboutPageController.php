<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\ModernOffice;
use App\Models\Page;
use App\Models\Service;

class AboutPageController extends Controller
{
    public function index()
    {

        $about_page = Page::whereSlug('o-klinike')->firstOrFail();
        $block_services = Block::whereId(4)->where('is_active', 'TRUE')->firstOrFail();
        $block_questions = Block::whereId(1)->where('is_active', 'TRUE')->firstOrFail();
        $services = Service::orderBy('id', 'DESC')->take(8)->get();
        $block_modern_offices = Block::whereId(8)->where('is_active', 'TRUE')->firstOrFail();

        return view('about', compact(
            'about_page',
            'services',
            'block_services',
            'block_questions',
            'block_modern_offices'
        ));
    }
}
