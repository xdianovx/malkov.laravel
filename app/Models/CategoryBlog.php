<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
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
}
