<?php

namespace App\Services;

use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;

class UploadFiles
{

    public function imageConvertAndStore($request, $data, $id_or_slug)
    {
        if ($request->is('*/pages/*')) {
            $directory = 'uploads/pages/' . $id_or_slug . '/images/';
        }
        if ($request->is('*/services/*')) {
            $directory = 'uploads/services/' . $id_or_slug . '/images/';
        }
        if ($request->is('*/categories_blog/*')) {
            $directory = 'uploads/categories_blog/' . $id_or_slug . '/images/';
        }
        if ($request->is('*/blogs/*')) {
            $directory = 'uploads/blogs/' . $id_or_slug . '/images/';
        }
        if ($request->is('*/news/*')) {
            $directory = 'uploads/news/' . $id_or_slug . '/images/';
        }
        if ($request->is('*/stocks/*')) {
            $directory = 'uploads/stocks/' . $id_or_slug . '/images/';
        }
        $defaultImage = Image::read($data);
        $filename = Str::ulid() . '.webp';
        $path = $directory . $filename;
        $defaultImage = $defaultImage->toWebp(80);
        Storage::disk('public')->put($path, (string)$defaultImage);
        $data = Storage::disk('public')->url($path);

        return $data;
    }

    public function videoStore($request, $data, $id_or_slug)
    {
        if ($request->is('*/pages/*')) {
            $directory = 'uploads/pages/' . $id_or_slug . '/videos/';
        }
        if ($request->is('*/blogs/*')) {
            $directory = 'uploads/blogs/' . $id_or_slug . '/videos/';
        }
        if ($request->is('*/news/*')) {
            $directory = 'uploads/news/' . $id_or_slug . '/videos/';
        }
        if ($request->is('*/stocks/*')) {
            $directory = 'uploads/stocks/' . $id_or_slug . '/videos/';
        }
        $filenameWithExt = $data->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $filename = str_replace(' ', '_', $filename);
        $extention = $data->getClientOriginalExtension();
        $fileNameToStore = $directory . $filename . "_" . time() . "." . $extention;
        $data = $data->storeAs('public', $fileNameToStore);
        return $data;
    }
}
