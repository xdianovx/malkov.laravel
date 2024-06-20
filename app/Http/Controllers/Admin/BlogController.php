<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Blog\StoreRequest;
use App\Http\Requests\Blog\UpdateRequest;
use App\Models\Blog;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $blogs = Blog::orderBy('id', 'DESC')->paginate(10);
        return view('admin.blogs.index', compact('blogs', 'user'));
    }

    public function show($blog_slug)
    {
        $user = Auth::user();
        $item = Blog::whereSlug($blog_slug)->firstOrFail();
        return view('admin.blogs.show', compact('item', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        $categories = CategoryBlog::all();

        return view('admin.blogs.create', compact('user', 'categories'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data = $this->format_data_service->changeTitleToId($data, CategoryBlog::class, 'category_id');
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;
        Blog::firstOrCreate($data);

        return redirect()->route('admin.blogs.index')->with('status', 'item-created');
    }
    public function edit($blog_slug)
    {
        $user = Auth::user();
        $item = Blog::whereSlug($blog_slug)->firstOrFail();
        $categories = CategoryBlog::all();

        return view('admin.blogs.edit', compact('user', 'item', 'categories'));
    }
    public function update(UpdateRequest $request, $blog_slug)
    {
        $blog = Blog::whereSlug($blog_slug)->firstOrFail();
        $data = $request->validated();
        $data = $this->format_data_service->changeTitleToId($data, CategoryBlog::class, 'category_id');
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;

        $blog->update($data);
        return redirect()->route('admin.blogs.index')->with('status', 'item-updated');
    }

    public function destroy($blog_slug)
    {

        $blog = Blog::whereSlug($blog_slug)->firstOrFail();
        $blog->delete_files($blog);
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $blogs = Blog::orderBy('id', 'DESC')->paginate(10);
        else :
            $blogs = Blog::filter()->paginate(10);
        endif;
        return view('admin.blogs.index', compact('blogs', 'user'));
    }
}
