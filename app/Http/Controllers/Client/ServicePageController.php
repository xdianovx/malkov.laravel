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

        $page = Page::whereSlug('uslugi')->firstOrFail();
        $services = Service::orderBy('id', 'DESC')->get();
        $block_questions = Block::whereId(1)->firstOrFail();
        $block_callback_form = Block::whereId(5)->firstOrFail();

        return view('services', compact(
            'services',
            'page',
            'block_questions',
            'block_callback_form',
        ));
    }
    public function show($service_slug)
    {
        $service = Service::whereSlug($service_slug)->firstOrFail();
        $page = $service;
        $services = Service::where('id', '<>', $service->id)->where('parent_id', null)->orderBy('id', 'DESC')->take(8)->get();
        $block_questions = Block::whereId(1)->firstOrFail();
        $block_services = Block::whereId(4)->firstOrFail();
        $block_callback_form = Block::whereId(5)->firstOrFail();

        return view('service-single', compact(
            'page',
            'service',
            'services',
            'block_questions',
            'block_callback_form',
            'block_services',
        ));
    }
}
