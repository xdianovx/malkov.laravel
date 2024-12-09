<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\ClinicDocument;
use App\Models\ClinicSertificate;
use App\Models\Page;

class PacientamPageController extends Controller
{
  public function index()
  {
    $page = Page::whereSlug('pacientam')->firstOrFail();
    $clinic_certificates = ClinicSertificate::orderBy('id', 'DESC')->paginate(8);
    $clinic_documents = ClinicDocument::orderBy('id', 'DESC')->paginate(8);
    $block_callback_form = Block::whereId(5)->firstOrFail();
    $block_questions = Block::whereId(1)->firstOrFail();

    return view('pacientam', compact(
      'page',
      'block_callback_form',
      'block_questions',
      'clinic_certificates',
      'clinic_documents'
    ));
  }

}
