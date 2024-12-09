<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Blog;
use App\Models\Page;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
  public function index()
  {
    $page = Page::whereSlug('blog')->firstOrFail();
    $blogs = Blog::orderBy('id', 'DESC')->paginate(8);
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_questions = Block::whereId(1)->firstOrFail();
    $pageCount = $blogs->lastPage();
    $currentPage = $blogs->currentPage();
    return view('blogs', compact(
      'blogs',
      'page',
      'block_callback_form',
      'block_questions',
      'pageCount',
      'currentPage'
    ));
  }
  public function show($blog_slug)
  {
    $blog = Blog::whereSlug($blog_slug)->firstOrFail();
    $page = $blog;
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_articles_news = Block::whereId(2)->firstOrFail();
    $blogs = Blog::where('id', '!=', $blog->id)->orderBy('id', 'DESC')->take(8)->get();
    return view('blog-single', compact(
      'page',
      'blog',
      'block_callback_form',
      'block_articles_news',
      'blogs'
    ));
  }
  public function loadMore(Request $request)
  {
    $blogs = Blog::latest()->paginate(8, ['*'], 'page', $request->page);
    $pageCount = $blogs->lastPage();
    $currentPage = $blogs->currentPage();
    return view('partials.blog-list', compact('blogs', 'pageCount', 'currentPage'));
  }
}
