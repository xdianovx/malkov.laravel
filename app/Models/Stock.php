<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        if( $item->image):
            $path_to_file = Str::remove(env('APP_URL') . '/storage', $item->image);
            Storage::disk('public')->delete($path_to_file);
        endif;
        if( $item->image_mob):
            $path_to_file = Str::remove(env('APP_URL') . '/storage', $item->image_mob);
            Storage::disk('public')->delete($path_to_file);
        endif;

    }
}
