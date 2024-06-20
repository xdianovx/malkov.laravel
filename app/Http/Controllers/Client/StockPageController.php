<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use App\Models\Stock;

class StockPageController extends Controller
{
  public function index()
  {

    $stock_page = Page::whereSlug('akcii')->firstOrFail();
    $stocks = Stock::orderBy('id', 'DESC')->get();
    $services = Service::orderBy('id', 'DESC')->take(8)->get();

    return view('stocks', compact(
      'stocks',
      'stock_page',
      'services',
    ));
  }
  public function show($stock_slug)
  {
    $stock = Stock::whereSlug($stock_slug)->firstOrFail();
    $news = News::orderBy('id', 'DESC')->take(8)->get();

    return view('stock-single', compact(
      'stock',
      'news'
    ));
  }
}
