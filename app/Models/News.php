<?php

namespace App\Models;

use App\Services\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
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
        'description_header'
        ];
    public static $news_routes = [
        'admin.news.index',
        'admin.news.search',
        'admin.news.show',
        'admin.news.edit',
        'admin.news.create',
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
}

