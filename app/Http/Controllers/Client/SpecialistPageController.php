<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Blog;
use App\Models\News;
use App\Models\Page;
use App\Models\Review;
use App\Models\Specialist;
use App\Models\Specialization;
use App\Models\Stock;

class SpecialistPageController extends Controller
{
  public function index()
  {

    $page = Page::whereSlug('vrachi')->firstOrFail();
    $specialists = Specialist::all();
    $blogs = Blog::orderBy('id', 'DESC')->take(8)->get();
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_articles_news = Block::whereId(2)->firstOrFail();
    $block_questions = Block::whereId(1)->firstOrFail();

    return view('doctors', compact(
      'specialists',
      'page',
      'blogs',
      'block_callback_form',
      'block_questions',
      'block_articles_news'
    ));
  }
  public function show($specialist_slug)
  {
    $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
    $page = $specialist;
    $specialists = Specialist::where('slug', '!=', $specialist_slug)->orderBy('id', 'DESC')->take(8)->get();
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_reviews = Block::whereId(6)->firstOrFail();
    $block_specialists = Block::whereId(3)->firstOrFail();
    $reviews = Review::where('specialist_id', $specialist->id)->orderBy('id', 'DESC')->take(8)->get();

        return view('doctor', compact(
      'page',
      'specialist',
      'specialists',
      'block_callback_form',
      'block_reviews',
      'block_specialists',
      'reviews'
    ));
  }
}
