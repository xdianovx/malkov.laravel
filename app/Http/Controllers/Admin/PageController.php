<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PageController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $pages = Page::orderBy('id', 'DESC')->paginate(20);
        return view('admin.page.index', compact('pages', 'user'));
    }

    public function show($page_slug)
    {
        $user = Auth::user();
        $item = Page::whereSlug($page_slug)->firstOrFail();
        return view('admin.page.show', compact('item', 'user'));
    }
    public function edit($page_slug)
    {
        $user = Auth::user();
        $item = Page::whereSlug($page_slug)->firstOrFail();
        return view('admin.page.edit', compact('user', 'item'));
    }
    public function update(UpdateRequest $request, $page_slug)
    {
        $page = Page::whereSlug($page_slug)->firstOrFail();
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;

        $page->update($data);
        return redirect()->route('admin.pages.index')->with('status', 'item-updated');
    }
}
