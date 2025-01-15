<?php

namespace App\Models;

use App\Services\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'h1_title',
        'image',
        'image_mob',
        'reading_time',
        'content',
        'slug',
        'description',
        'description_header',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_url',
        'og_title',
        'og_description',
    ];
    public static $blogs_routes = [
        'admin.blogs.index',
        'admin.blogs.search',
        'admin.blogs.show',
        'admin.blogs.edit',
        'admin.blogs.create',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($items)
    {
        if (request('search') !== null) {
            $items->where('id', 'ilike', '%' . request('search') . '%')
            ->orWhere('slug', 'ilike', '%' . request('search') . '%')
            ->orWhere('title', 'ilike', '%' . request('search') . '%');
        }
        return $items;
    }
    public function delete_files($item)
    {
        UploadFiles::delete_files($item);
    }
    public function getUrl($item)
    {
        return route('blog', $item->slug);
    }
}
