<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Service\StoreRequest;
use App\Http\Requests\Service\UpdateRequest;
use App\Models\Price;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ServiceController extends BaseController
{
  public function index()
  {
    $user = Auth::user();
    $services = Service::where('parent_id', null)->orderBy('id', 'DESC')->paginate(100);
    return view('admin.services.index', compact('services', 'user'));
  }

  public function show($service_slug)
  {
    $user = Auth::user();
    $item = Service::whereSlug($service_slug)->firstOrFail();
    $child_items = Service::with('childrenServices')->where('parent_id', $item->id)->orderBy('id', 'DESC')->paginate(10);
    $prices = Price::where('service_id', $item->id);
    return view('admin.services.show', compact('item', 'user', 'child_items', 'prices'));
  }
  public function show_child($service_parent_slug, $service_slug)
  {
    $user = Auth::user();
    $parent = Service::whereSlug($service_parent_slug)->firstOrFail();
    $item = Service::whereSlug($service_slug)->firstOrFail();
    return view('admin.services.show_child', compact('item', 'user', 'parent'));
  }
  public function create()
  {
    $user = Auth::user();
    return view('admin.services.create', compact('user'));
  }

  public function createChild($service_parent)
  {
    $service_parent = Service::whereSlug($service_parent)->firstOrFail();
    return view('admin.services.create_child', [
      'user' => Auth::user(),
      'service_parent' => $service_parent
    ]);
  }
  public function storeChild(StoreRequest $request, $service_parent_slug)
  {
    $data = $request->validated();
    $data['slug'] = Str::slug($data['title']);
    if ($request->hasFile('image')) :
      $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
    endif;
    if ($request->hasFile('image_mob')) :
      $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
    endif;

    Service::whereSlug($service_parent_slug)->first()->children()->create($data);
    return redirect()->route('admin.services.show', $service_parent_slug)->with('status', 'service-child-created');
  }
  public function store(StoreRequest $request)
  {
    $data = $request->validated();
    $data['slug'] = Str::slug($data['title']);
    if ($request->hasFile('image')) :
      $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
    endif;
    if ($request->hasFile('image_mob')) :
      $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
    endif;

    Service::firstOrCreate($data);
    return redirect()->route('admin.services.index')->with('status', 'item-created');
  }
  public function edit($service_slug)
  {
    $user = Auth::user();
    $item = Service::whereSlug($service_slug)->firstOrFail();
    return view('admin.services.edit', compact('user', 'item'));
  }

  public function editChild($service_parent_slug, $service_slug)
  {
    $service_parent = Service::whereSlug($service_parent_slug)->firstOrFail();
    $item = Service::whereSlug($service_slug)->firstOrFail();
    return view('admin.services.edit_child', [
      'user' => Auth::user(),
      'item' => $item,
      'service_parent' => $service_parent
    ]);
  }
  public function updateChild(UpdateRequest $request, $service_parent_slug, $service_slug)
  {
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $data = $request->validated();
    $data['slug'] = Str::slug($data['title']);

    if ($request->hasFile('image')) :
      $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
    endif;
    if ($request->hasFile('image_mob')) :
      $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
    endif;

    $service->update($data);
    return redirect()->route('admin.services.show', $service_parent_slug)->with('status', 'service-child-updated');
  }
  public function update(UpdateRequest $request, $service_slug)
  {
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $data = $request->validated();
    $data['slug'] = Str::slug($data['title']);

    if ($request->hasFile('image')) :
      $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
    endif;
    if ($request->hasFile('image_mob')) :
      $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
    endif;

    $service->update($data);
    return redirect()->route('admin.services.edit', $service_slug)->with('status', 'item-updated');
  }

  public function destroy($service_slug)
  {
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $service->delete();
    return redirect()->route('admin.services.index')->with('status', 'item-deleted');
  }
  public function destroy($service_slug)
  {
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $service->childrenServices()->delete();

    $service->delete();
    return redirect()->route('admin.services.index')->with('status', 'item-deleted');
  }

  public function destroy_child($service_parent_slug, $service_slug)
  {
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $service->delete();
    return redirect()->route('admin.services.show', $service_parent_slug)->with('status', 'service-child-deleted');
  }

  public function search(Request $request)
  {
    $user = Auth::user();
    if (request('search') == null) :
      $services = Service::orderBy('id', 'DESC')->paginate(10);
    else :
      $services = Service::filter()->paginate(10);
    endif;
    return view('admin.services.index', compact('services', 'user'));
  }
}
