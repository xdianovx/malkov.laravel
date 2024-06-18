<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Stock;

class StockPageController extends Controller
{
  public function index()
  {

    $stock_page = Page::whereSlug('akcii')->firstOrFail();
    $stocks = Stock::orderBy('id', 'DESC')->get();

    return view('stocks', compact(
      'stocks',
      'stock_page',
    ));
  }
  public function show($stock_slug)
  {
    $stock = Stock::whereSlug($stock_slug)->firstOrFail();

    return view('stock-single', compact(
      'stock',
    ));
  }
}
