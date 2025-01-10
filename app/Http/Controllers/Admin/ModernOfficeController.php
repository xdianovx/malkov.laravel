<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ModernOffice\StoreRequest;
use App\Http\Requests\ModernOffice\UpdateRequest;
use App\Models\Block;
use App\Models\ModernOffice;
use Illuminate\Support\Facades\Auth;

class ModernOfficeController extends BaseController
{
    public function show( $block_id, $modern_office_id )
    {
        $user = Auth::user();
        $item = ModernOffice::whereId($modern_office_id)->firstOrFail();
        $files = [];
        if ($this->format_file(pathinfo($item->file)['dirname'], 'view_file') == 'videos') :
            $files['video'] = asset('storage') . '/' . $item->file;
        elseif ($this->format_file(pathinfo($item->file)['dirname'], 'view_file') == 'images') :
            $files['image'] = asset('storage') . '/' . $item->file;
        endif;
        if ($item->file_mob) :
            if ($this->format_file(pathinfo($item->file_mob)['dirname'], 'view_file_mob') == 'videos') :
                $files['video_mob'] = asset('storage') . '/' . $item->file_mob;
            elseif ($this->format_file(pathinfo($item->file_mob)['dirname'], 'view_file_mob') == 'images') :
                $files['image_mob'] = asset('storage') . '/' . $item->file_mob;
            endif;
        endif;
        return view('admin.blocks.modern_offices.show', compact('item', 'user', 'files'));
    }

    public function create($block_id)
    {
        $user = Auth::user();
        $block = Block::whereId($block_id)->firstOrFail();
        return view('admin.blocks.modern_offices.create', compact('user', 'block'));
    }
    public function store(StoreRequest $request, $block_id)
    {
        $data = $request->validated();
        $block = Block::whereId($block_id)->firstOrFail();

        if ($request->hasFile('file')) :
            if ($this->format_file($request, 'file') == 'video') :
                $data['file'] = $this->upload_service->videoStore($request, $data['file'], $block->id . '/modern_offices');
            elseif ($this->format_file($request, 'file') == 'image') :
                $data['file'] = $this->upload_service->imageConvertAndStore($request, $data['file'], $block->id . '/modern_offices');
            endif;
        endif;
        if ($request->hasFile('file_mob')) :
            if ($this->format_file($request, 'file_mob') == 'video') :
                $data['file_mob'] = $this->upload_service->videoStore($request, $data['file_mob'], $block->id . '/modern_offices');
            elseif ($this->format_file($request, 'file_mob') == 'image') :
                $data['file_mob'] = $this->upload_service->imageConvertAndStore($request, $data['file_mob'], $block->id . '/modern_offices');
            endif;
        endif;

        $block->modern_offices()->create($data);

        return redirect()->route('admin.blocks.show', $block_id)->with('status', 'modern_office-created');
    }
    public function edit($block_id, $modern_office_id)
    {
        $user = Auth::user();
        $block = Block::whereId($block_id)->firstOrFail();
        $item = ModernOffice::whereId($modern_office_id)->firstOrFail();
        $files = [];
        if ($this->format_file(pathinfo($item->file)['dirname'], 'view_file') == 'videos') :
            $files['video'] = asset('storage') . '/' . $item->file;
        elseif ($this->format_file(pathinfo($item->file)['dirname'], 'view_file') == 'images') :
            $files['image'] = asset('storage') . '/' . $item->file;
        endif;
        if ($item->file_mob) :
            if ($this->format_file(pathinfo($item->file_mob)['dirname'], 'view_file_mob') == 'videos') :
                $files['video_mob'] = asset('storage') . '/' . $item->file_mob;
            elseif ($this->format_file(pathinfo($item->file_mob)['dirname'], 'view_file_mob') == 'images') :
                $files['image_mob'] = asset('storage') . '/' . $item->file_mob;
            endif;
        endif;
        return view('admin.blocks.modern_offices.edit', compact('user', 'item', 'block', 'files'));
    }
    public function update(UpdateRequest $request,$block_id, $modern_office_id)
    {
        $modern_office = ModernOffice::whereId($modern_office_id)->firstOrFail();
        $data = $request->validated();

        if ($request->hasFile('file')) :
            if ($this->format_file($request, 'file') == 'video') :
                $data['file'] = $this->upload_service->videoStore($request, $data['file'], $block_id . '/modern_offices');
            elseif ($this->format_file($request, 'file') == 'image') :
                $data['file'] = $this->upload_service->imageConvertAndStore($request, $data['file'], $block_id . '/modern_offices');
            endif;
        endif;
        if ($request->hasFile('file_mob')) :
            if ($this->format_file($request, 'file_mob') == 'video') :
                $data['file_mob'] = $this->upload_service->videoStore($request, $data['file_mob'], $block_id . '/modern_offices');
            elseif ($this->format_file($request, 'file_mob') == 'image') :
                $data['file_mob'] = $this->upload_service->imageConvertAndStore($request, $data['file_mob'], $block_id . '/modern_offices');
            endif;
        endif;

        $modern_office->update($data);
        return redirect()->route('admin.blocks.show', $block_id)->with('status', 'modern_office-updated');
    }

    public function destroy( $block_id, $modern_office_id )
    {
        $modern_office = ModernOffice::whereId($modern_office_id)->firstOrFail();
        $modern_office->delete();
        return redirect()->route('admin.blocks.show', $block_id)->with('status', 'modern_office-deleted');
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
