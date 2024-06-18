<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShowReel\StoreRequest;
use App\Http\Requests\ShowReel\UpdateRequest;
use App\Models\Page;
use App\Models\ShowReel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ShowReelController extends BaseController
{

    public function show($page_slug, $show_reel_id)
    {
        $user = Auth::user();
        $item = ShowReel::whereId($show_reel_id)->firstOrFail();
        $files = [];
        if ($this->format_file(pathinfo($item->file)['dirname'], 'view_file') == 'videos') :
            $files['video'] = $item->file;
        elseif ($this->format_file(pathinfo($item->file)['dirname'], 'view_file') == 'images') :
            $files['image'] = $item->file;
        endif;
        if ($this->format_file(pathinfo($item->file_mob)['dirname'], 'view_file_mob') == 'videos') :
            $files['video_mob'] = $item->file_mob;
        elseif ($this->format_file(pathinfo($item->file_mob)['dirname'], 'view_file_mob') == 'images') :
            $files['image_mob'] = $item->file_mob;
        endif;
        return view('admin.page.show_reels.show', compact('item', 'user', 'files'));
    }

    public function create($page_slug)
    {
        $user = Auth::user();
        $page = Page::whereSlug($page_slug)->firstOrFail();
        return view('admin.page.show_reels.create', compact('user', 'page'));
    }
    public function store(StoreRequest $request, $page_slug)
    {
        $page = Page::whereSlug($page_slug)->firstOrFail();
        $data = $request->validated();
        if ($request->hasFile('file')) :
            if ($this->format_file($request, 'file') == 'video') :
                $data['file'] = $this->upload_service->videoStore($request, $data['file'], $page->slug . '/show_reels');
                $data['file'] = env('APP_URL') . '/storage' . Str::remove('public', $data['file']);
            elseif ($this->format_file($request, 'file') == 'image') :
                $data['file'] = $this->upload_service->imageConvertAndStore($request, $data['file'], $page->slug . '/show_reels');
            endif;
        endif;
        if ($request->hasFile('file_mob')) :
            if ($this->format_file($request, 'file_mob') == 'video') :
                $data['file_mob'] = $this->upload_service->videoStore($request, $data['file_mob'], $page->slug . '/show_reels');
                $data['file_mob'] = env('APP_URL') . '/storage' . Str::remove('public', $data['file_mob']);
            elseif ($this->format_file($request, 'file_mob') == 'image') :
                $data['file_mob'] = $this->upload_service->imageConvertAndStore($request, $data['file_mob'], $page->slug . '/show_reels');
            endif;
        endif;
        if($data['is_cover'] == 'TRUE'):
            ShowReel::where('is_cover','TRUE')->update([
                'is_cover' => 'FALSE'
            ]);
        endif;
        $page->show_reels()->create($data);
        return redirect()->route('admin.pages.show', $page_slug)->with('status', 'show_reel-created');
    }
    public function edit($page_slug, $show_reel_id)
    {
        $user = Auth::user();
        $page = Page::whereSlug($page_slug)->firstOrFail();
        $item = ShowReel::whereId($show_reel_id)->firstOrFail();

        return view('admin.page.show_reels.edit', compact('user', 'item', 'page'));
    }
    public function update(UpdateRequest $request, $page_slug, $show_reel_id)
    {

        $page = Page::whereSlug($page_slug)->firstOrFail();
        $show_reel = ShowReel::whereId($show_reel_id)->firstOrFail();
        $data = $request->validated();

        if ($request->hasFile('file')) :
            if ($this->format_file($request, 'file') == 'video') :
                $data['file'] = $this->upload_service->videoStore($request, $data['file'], $page->slug . '/show_reels');
                $data['file'] = env('APP_URL') . '/storage' . Str::remove('public', $data['file']);
            elseif ($this->format_file($request, 'file') == 'image') :
                $data['file'] = $this->upload_service->imageConvertAndStore($request, $data['file'], $page->slug . '/show_reels');
            endif;
        endif;
        if ($request->hasFile('file_mob')) :
            if ($this->format_file($request, 'file_mob') == 'video') :
                $data['file_mob'] = $this->upload_service->videoStore($request, $data['file_mob'], $page->slug . '/show_reels');
                $data['file_mob'] = env('APP_URL') . '/storage' . Str::remove('public', $data['file_mob']);
            elseif ($this->format_file($request, 'file_mob') == 'image') :
                $data['file_mob'] = $this->upload_service->imageConvertAndStore($request, $data['file_mob'], $page->slug . '/show_reels');
            endif;
        endif;
        if($data['is_cover'] == 'TRUE' && $show_reel->is_cover !== 'TRUE'):
            ShowReel::where('is_cover','TRUE')->update([
                'is_cover' => 'FALSE'
            ]);
        endif;
        $show_reel->update($data);
        return redirect()->route('admin.pages.show', $page_slug)->with('status', 'show_reel-updated');
    }

    public function destroy($page_slug, $show_reel_id)
    {
        $show_reel = ShowReel::whereId($show_reel_id)->firstOrFail();
        $show_reel->delete_files($show_reel);
        $show_reel->delete();
        return redirect()->route('admin.pages.show', $page_slug)->with('status', 'show_reel-deleted');
    }
    public function format_file($item, $key)
    {
        if ($key == 'file_mob') :
            $item = explode('/', $item->file_mob->getMimeType())[0];
        endif;
        if ($key == 'file') :
            $item = explode('/', $item->file->getMimeType())[0];
        endif;
        if ($key == 'view_file_mob') :
            $item = explode('/', $item);
            $item = end($item);
        endif;
        if ($key == 'view_file') :
            $item = explode('/', $item);
            $item = end($item);
        endif;
        return $item;
    }
}
