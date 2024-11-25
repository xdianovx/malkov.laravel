<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Page;

class ContactPageController extends Controller
{
  public function index()
  {

    $contacts_page = Page::whereSlug('kontakty')->firstOrFail();
    $block_questions = Block::whereId(1)->firstOrFail();

    return view('contacts', compact(
      'contacts_page',
      'block_questions'
    ));
  }
}
