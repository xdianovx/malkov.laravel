<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomePageNum\StoreRequest;
use App\Http\Requests\HomePageNum\UpdateRequest;
use App\Models\HomePageNum;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;

class HomePageNumController extends Controller
{
    public function create($page_slug)
    {
        $user = Auth::user();
        $page = Page::whereSlug($page_slug)->firstOrFail();
        return view('admin.page.home_page_nums.create', compact('user', 'page'));
    }
    public function store(StoreRequest $request, $page_slug)
    {
        $data = $request->validated();
        $page = Page::whereSlug($page_slug)->firstOrFail();

        $page->home_page_nums()->create($data);

        return redirect()->route('admin.pages.show', $page_slug)->with('status', 'home_page_num-created');
    }
    public function edit($page_slug, $price_id)
    {
        $user = Auth::user();
        $page = Page::whereSlug($page_slug)->firstOrFail();
        $item = HomePageNum::whereId($price_id)->firstOrFail();
        return view('admin.page.home_page_nums.edit', compact('user', 'item', 'page'));
    }
    public function update(UpdateRequest $request,$page_slug, $price_id)
    {
        $price = HomePageNum::whereId($price_id)->firstOrFail();
        $data = $request->validated();

        $price->update($data);
        return redirect()->route('admin.pages.show', $page_slug)->with('status', 'home_page_num-updated');
    }

    public function destroy( $page_slug, $price_id )
    {

        $price = HomePageNum::whereId($price_id)->firstOrFail();
        $price->delete();
        return redirect()->route('admin.pages.show', $page_slug)->with('status', 'home_page_num-deleted');
    }
}
