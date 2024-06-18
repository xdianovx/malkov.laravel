<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ShowReel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'file_mob',
        'is_cover'
    ];
    public static $show_reels = [
        'admin.pages.show_reels.index',
        'admin.pages.show_reels.show',
        'admin.pages.show_reels.edit',
        'admin.pages.show_reels.create',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

    public function delete_files($item)
    {
        if ($item->file_mob) :
            $path_to_file = Str::remove(env('APP_URL') . '/storage', $item->file_mob);
            Storage::disk('public')->delete($path_to_file);
        endif;
        if ($item->file) :
            $path_to_file = Str::remove(env('APP_URL') . '/storage', $item->file);
            Storage::disk('public')->delete($path_to_file);
        endif;
    }
}
