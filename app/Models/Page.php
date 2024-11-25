<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_h1',
        'slug',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_url',
        'og_title',
        'og_description',
    ];
    public static $pages_routes = [
        'admin.pages.index',
        'admin.pages.search',
        'admin.pages.show',
        'admin.pages.edit',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function home_page_nums()
    {
      return $this->hasMany(HomePageNum::class);
    }
    public function show_reels()
    {
      return $this->hasMany(ShowReel::class);
    }

}


