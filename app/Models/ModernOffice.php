<?php

namespace App\Models;

use App\Services\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        UploadFiles::delete_files($item);
    }
}
