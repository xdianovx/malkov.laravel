<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Page;
use App\Models\Service;

class ServicePageController extends Controller
{
    public function index()
    {

        $service_page = Page::whereSlug('uslugi')->firstOrFail();
        $services = Service::orderBy('id', 'DESC')->get();
        $block_questions = Block::whereId(1)->where('is_active','TRUE')->firstOrFail();
        $block_callback_form = Block::whereId(5)->where('is_active','TRUE')->firstOrFail();

        return view('services', compact(
            'services',
            'service_page',
            'block_questions',
            'block_callback_form',
        ));
    }
    public function show($service_slug)
    {
        $service = Service::whereSlug($service_slug)->firstOrFail();
        $services = Service::orderBy('id', 'DESC')->take(8)->get();
        $block_questions = Block::whereId(1)->firstOrFail();
        $block_services = Block::whereId(4)->firstOrFail();
        $block_callback_form = Block::whereId(5)->firstOrFail();

        return view('service-single', compact(
            'service',
            'services',
            'block_questions',
            'block_callback_form',
            'block_services',
        ));
    }
}
