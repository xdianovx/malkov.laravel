<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'image_mob',
        'description_footer',
        'slug',
        'description',
    ];
    public static $categories_blog_routes = [
        'admin.categories_blog.index',
        'admin.categories_blog.search',
        'admin.categories_blog.show',
        'admin.categories_blog.edit',
        'admin.categories_blog.create',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function blogs()
    {
      return $this->hasMany(Blog::class);
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
