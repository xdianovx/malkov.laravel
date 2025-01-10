<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Stock\StoreRequest;
use App\Http\Requests\Stock\UpdateRequest;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StockController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $stocks = Stock::orderBy('id', 'DESC')->paginate(10);
        return view('admin.stocks.index', compact('stocks', 'user'));
    }

    public function show($stock_slug)
    {
        $user = Auth::user();
        $item = Stock::whereSlug($stock_slug)->firstOrFail();
        return view('admin.stocks.show', compact('item', 'user'));
    }

    public function create()
    {
        $user = Auth::user();

        return view('admin.stocks.create', compact('user'));
    }
    public function store(StoreRequest $request)
    {

        $data = $request->validated();
        $data['slug'] = Str::slug($data['title'] . '-' . now()->format('d-m-Y'));
        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;

        Stock::firstOrCreate($data);

        return redirect()->route('admin.stocks.index')->with('status', 'item-created');
    }
    public function edit($stock_slug)
    {
        $user = Auth::user();
        $item = Stock::whereSlug($stock_slug)->firstOrFail();

        return view('admin.stocks.edit', compact('user', 'item'));
    }
    public function update(UpdateRequest $request, $stock_slug)
    {
        $stocks = Stock::whereSlug($stock_slug)->firstOrFail();
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title'] . '-' . now()->format('d-m-Y'));

        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;


        $stocks->update($data);
        return redirect()->route('admin.stocks.index')->with('status', 'item-updated');
    }

    public function destroy($stock_slug)
    {

        $stock = Stock::whereSlug($stock_slug)->firstOrFail();
        $stock->delete();
        return redirect()->route('admin.stocks.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $stocks = Stock::orderBy('id', 'DESC')->paginate(10);
        else :
            $stocks = Stock::filter()->paginate(10);
        endif;
        return view('admin.stocks.index', compact('stocks', 'user'));
    }
}
