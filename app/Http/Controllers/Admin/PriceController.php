<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Price\StoreRequest;
use App\Http\Requests\Price\UpdateRequest;
use App\Models\Price;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class PriceController extends Controller
{
    public function show( $service_slug, $price_id )
    {
        $user = Auth::user();
        $item = Price::whereId($price_id)->firstOrFail();
        return view('admin.services.prices.show', compact('item', 'user'));
    }

    public function create($service_slug)
    {
        $user = Auth::user();
        $service = Service::whereSlug($service_slug)->firstOrFail();
        return view('admin.services.prices.create', compact('user', 'service'));
    }
    public function store(StoreRequest $request, $service_slug)
    {
        $data = $request->validated();
        if (!array_key_exists('is_the_price_from', $data)) {
          $data['is_the_price_from'] = 'off';
        }
        $service = Service::whereSlug($service_slug)->firstOrFail();

        $service->prices()->create($data);

        return redirect()->route('admin.services.show', $service_slug)->with('status', 'price-created');
    }
    public function edit($service_slug, $price_id)
    {
        $user = Auth::user();
        $service = Service::whereSlug($service_slug)->firstOrFail();
        $item = Price::whereId($price_id)->firstOrFail();
        return view('admin.services.prices.edit', compact('user', 'item', 'service'));
    }
    public function update(UpdateRequest $request,$service_slug, $price_id)
    {
        $price = Price::whereId($price_id)->firstOrFail();
        $data = $request->validated();
        if (!array_key_exists('is_the_price_from', $data)) {
          $data['is_the_price_from'] = 'off';
        }
        $price->update($data);
        return redirect()->route('admin.services.show', $service_slug)->with('status', 'price-updated');
    }

    public function destroy( $service_slug, $price_id )
    {

        $price = Price::whereId($price_id)->firstOrFail();
        $price->delete();
        return redirect()->route('admin.services.show', $service_slug)->with('status', 'price-deleted');
    }

}
