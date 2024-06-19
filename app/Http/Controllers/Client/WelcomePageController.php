<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Service;
use App\Models\ShowReel;
use App\Models\Specialist;
use App\Models\Stock;

class WelcomePageController extends Controller
{
  public function index()
  {

    $home_page = Page::whereSlug('glavnaya')->firstOrFail();
    $stocks = Stock::where('slider_active', "TRUE")->orderBy('id', 'DESC')->get();
    $services = Service::orderBy('id', 'DESC')->take(8)->get();
    $show_reel = ShowReel::where('is_cover','TRUE')->first();
    $specialists = Specialist::orderBy('id', 'DESC')->take(8)->get();
    return view('welcome', compact(
      'services',
      'stocks',
      'home_page',
      'show_reel',
      'specialists'
    ));
  }
}
