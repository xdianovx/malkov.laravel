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

class PravilaPredostavleniyaUslugPageController extends Controller
{
    public function index()
    {
        $page = Page::whereSlug('pravila-predostavleniya-uslug')->firstOrFail();

        return view('pravila', compact(
            'page'
        ));
    }
}
