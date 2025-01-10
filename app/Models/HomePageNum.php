<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageNum extends Model
{
    use HasFactory;
    protected $fillable = ['title','label','num','page_id'];
    public static $home_page_nums = [
        'admin.pages.home_page_nums.edit',
        'admin.pages.home_page_nums.create',
    ];
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');

    }
}
