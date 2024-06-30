<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ModernOffice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file',
        'file_mob',
        'block_id'
    ];
    public static $modern_office_routes = [
        'admin.blocks.modern_offices.index',
        'admin.blocks.modern_offices.show',
        'admin.blocks.modern_offices.edit',
        'admin.blocks.modern_offices.create',
    ];

    public function block()
    {
        return $this->belongsTo(Block::class);
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
