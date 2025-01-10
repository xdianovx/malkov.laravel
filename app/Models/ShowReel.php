<?php

namespace App\Models;

use App\Services\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
        UploadFiles::delete_files($item);
    }
}
