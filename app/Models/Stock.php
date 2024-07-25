<?php

namespace App\Models;

use App\Services\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'h1_title',
        'image',
        'image_mob',
        'content',
        'due_time',
        'slug',
        'description',
        'description_header',
        'slider_active'
        ];
    public static $stocks_routes = [
        'admin.stocks.index',
        'admin.stocks.search',
        'admin.stocks.show',
        'admin.stocks.edit',
        'admin.stocks.create',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function scopeFilter($items)
    {
        if (request('search') !== null) {
            $items->where('id', 'ilike', '%' . request('search') . '%')
            ->orWhere('title', 'ilike', '%' . request('search') . '%')
            ->orWhere('slug', 'ilike', '%' . request('search') . '%');
        }
        return $items;
    }
    public function delete_files($item)
    {
        UploadFiles::delete_files($item);
    }
}
