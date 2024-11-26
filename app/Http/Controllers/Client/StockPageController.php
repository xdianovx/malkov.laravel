<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Service;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockPageController extends Controller
{
  public function index()
  {

    $page = Page::whereSlug('akcii')->firstOrFail();
    $stocks = Stock::orderBy('id', 'DESC')->paginate(8);
    $services = Service::orderBy('id', 'DESC')->take(8)->get();
    $block_services = Block::whereId(4)->firstOrFail();
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_questions = Block::whereId(1)->firstOrFail();
    $pageCount = $stocks->lastPage();
    $currentPage = $stocks->currentPage();
    return view('stocks', compact(
      'stocks',
      'page',
      'services',
      'block_services',
      'block_callback_form',
      'block_questions',
      'pageCount',
      'currentPage'
    ));
  }
  public function show($stock_slug)
  {
    $stock = Stock::whereSlug($stock_slug)->firstOrFail();
    $page = $stock;
    $news = Blog::orderBy('id', 'DESC')->take(8)->get();
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_articles_news = Block::whereId(2)->firstOrFail();

    return view('stock-single', compact(
      'page',
      'stock',
      'news',
      'block_callback_form',
      'block_articles_news'
    ));
  }
  public function loadMore(Request $request)
  {
    $stocks = Stock::latest()->paginate(8, ['*'], 'page', $request->page);
    $pageCount = $stocks->lastPage();
    $currentPage = $stocks->currentPage();
    return view('partials.stocks-list', compact('stocks', 'pageCount', 'currentPage'));
  }
}
