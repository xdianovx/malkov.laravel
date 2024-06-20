<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
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

    return view('doctors', compact(
      'specializations',
      'specialists_page',
      'news'
    ));
  }
  public function show($specialist_slug)
  {
    $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
    $specialists = Specialist::orderBy('id', 'DESC')->take(8)->get();
        return view('doctor', compact(
      'specialist',
      'specialists'
    ));
  }
}
