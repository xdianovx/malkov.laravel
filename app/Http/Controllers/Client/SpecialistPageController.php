<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\News;
use App\Models\Page;
use App\Models\Specialist;
use App\Models\Specialization;
use App\Models\Stock;

class SpecialistPageController extends Controller
{
  public function index()
  {

    $specialists_page = Page::whereSlug('vrachi')->firstOrFail();
    $specializations = Specialization::all();
    $news = News::orderBy('id', 'DESC')->take(8)->get();
    $block_callback_form = Block::whereId(5)->where('is_active','TRUE')->firstOrFail();
    $block_articles_news = Block::whereId(2)->where('is_active','TRUE')->firstOrFail();
    $block_questions = Block::whereId(1)->where('is_active','TRUE')->firstOrFail();

    return view('doctors', compact(
      'specializations',
      'specialists_page',
      'news',
      'block_callback_form',
      'block_questions',
      'block_articles_news'
    ));
  }
  public function show($specialist_slug)
  {
    $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
    $specialists = Specialist::where('slug', '!=', $specialist_slug)->orderBy('id', 'DESC')->take(8)->get();
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_questions = Block::whereId(1)->firstOrFail();
    $block_specialists = Block::whereId(3)->firstOrFail();

        return view('doctor', compact(
      'specialist',
      'specialists',
      'block_callback_form',
      'block_questions',
      'block_specialists'
    ));
  }
}
