<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Blog;
use App\Models\Page;

class BlogPageController extends Controller
{
  public function index()
  {
    $blog_page = Page::whereSlug('blog')->firstOrFail();
    $blogs = Blog::orderBy('id', 'DESC')->get();
    $block_callback_form = Block::whereId(5)->where('is_active','TRUE')->firstOrFail();
    $block_questions = Block::whereId(1)->where('is_active','TRUE')->firstOrFail();

    return view('blogs', compact(
      'blogs',
      'blog_page',
      'block_callback_form',
      'block_questions'
    ));
  }
  public function show($blog_slug)
  {
    $blog = Blog::whereSlug($blog_slug)->firstOrFail();
    $block_callback_form = Block::whereId(5)->where('is_active','TRUE')->firstOrFail();
    $block_articles_news = Block::whereId(2)->where('is_active','TRUE')->firstOrFail();

    return view('blog-single', compact(
      'blog',
      'block_callback_form',
      'block_articles_news'
    ));
  }
}
