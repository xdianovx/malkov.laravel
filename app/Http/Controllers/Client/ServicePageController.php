<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Service;

class ServicePageController extends Controller
{
  public function index()
  {

    $service_page = Page::whereSlug('uslugi')->firstOrFail();
    $services = Service::orderBy('id', 'DESC')->get();
    return view('services', compact(
      'services',
      'service_page',
    ));
  }
  public function show($service_slug)
  {
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $services = Service::orderBy('id', 'DESC')->get();
    return view('service-single', compact(
      'service',
      'services'
    ));
  }
}
