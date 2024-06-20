<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Page;

class BlogPageController extends Controller
{
  public function index()
  {

    $blog_page = Page::whereSlug('blog')->firstOrFail();
    $blogs = Blog::orderBy('id', 'DESC')->get();

    return view('blogs', compact(
      'blogs',
      'blog_page',
    ));
  }
  public function show($blog_slug)
  {
    $blog = Blog::whereSlug($blog_slug)->firstOrFail();

    return view('blog-single', compact(
      'blog',
    ));
  }
}
