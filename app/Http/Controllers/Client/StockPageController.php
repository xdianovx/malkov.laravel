<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
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
    $block_services = Block::whereId(4)->firstOrFail();
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_questions = Block::whereId(1)->firstOrFail();

    return view('stocks', compact(
      'stocks',
      'stock_page',
      'services',
      'block_services',
      'block_callback_form',
      'block_questions',
    ));
  }
  public function show($stock_slug)
  {
    $stock = Stock::whereSlug($stock_slug)->firstOrFail();
    $news = News::orderBy('id', 'DESC')->take(8)->get();
    $block_callback_form = Block::whereId(5)->where('is_active','TRUE')->firstOrFail();
    $block_articles_news = Block::whereId(2)->where('is_active','TRUE')->firstOrFail();

    return view('stock-single', compact(
      'stock',
      'news',
      'block_callback_form',
      'block_articles_news'
    ));
  }
}
