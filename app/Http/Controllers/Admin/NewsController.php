<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\News\StoreRequest;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewsController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $news = News::orderBy('id', 'DESC')->paginate(10);
        return view('admin.news.index', compact('news', 'user'));
    }

    public function show($news_slug)
    {
        $user = Auth::user();
        $item = News::whereSlug($news_slug)->firstOrFail();
        return view('admin.news.show', compact('item', 'user'));
    }

    public function create()
    {
        $user = Auth::user();

        return view('admin.news.create', compact('user'));
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
        News::firstOrCreate($data);

        return redirect()->route('admin.news.index')->with('status', 'item-created');
    }
    public function edit($news_slug)
    {
        $user = Auth::user();
        $item = News::whereSlug($news_slug)->firstOrFail();

        return view('admin.news.edit', compact('user', 'item'));
    }
    public function update(UpdateRequest $request, $news_slug)
    {
        $news = News::whereSlug($news_slug)->firstOrFail();
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;

        $news->update($data);
        return redirect()->route('admin.news.index')->with('status', 'item-updated');
    }

    public function destroy($news_slug)
    {

        $news = News::whereSlug($news_slug)->firstOrFail();
        $news->delete_files($news);
        $news->delete();
        return redirect()->route('admin.news.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $news = News::orderBy('id', 'DESC')->paginate(10);
        else :
            $news = News::filter()->paginate(10);
        endif;
        return view('admin.news.index', compact('news', 'user'));
    }
}
