<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryBlog\StoreRequest;
use App\Http\Requests\CategoryBlog\UpdateRequest;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryBlogController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $categories_blog = CategoryBlog::orderBy('id', 'DESC')->paginate(10);
        return view('admin.category_blog.index', compact('categories_blog', 'user'));
    }

    public function show($category_slug)
    {
        $user = Auth::user();
        $item = CategoryBlog::whereSlug($category_slug)->firstOrFail();
        return view('admin.category_blog.show', compact('item', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.category_blog.create', compact('user'));
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

        $category = CategoryBlog::firstOrCreate($data);

        return redirect()->route('admin.categories_blog.index')->with('status', 'item-created');
    }
    public function edit($category_slug)
    {
        $user = Auth::user();
        $item = CategoryBlog::whereSlug($category_slug)->firstOrFail();
        return view('admin.category_blog.edit', compact('user', 'item'));
    }

    public function update(UpdateRequest $request, $category_slug)
    {
        $category = CategoryBlog::whereSlug($category_slug)->firstOrFail();
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;

        $category->update($data);

        return redirect()->route('admin.categories_blog.index')->with('status', 'item-updated');
    }

    public function destroy($category_slug)
    {
        $category = CategoryBlog::whereSlug($category_slug)->firstOrFail();
        $category->delete_files($category);
        $category->delete();
        return redirect()->route('admin.categories_blog.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $categories = CategoryBlog::orderBy('id', 'DESC')->paginate(10);
        else :
            $categories = CategoryBlog::filter()->paginate(10);
        endif;
        return view('admin.category_blog.index', compact('categories', 'user'));
    }
}
