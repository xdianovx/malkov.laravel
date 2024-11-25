<?php

namespace App\Models;

use App\Services\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Specialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'h1_title',
        'slug',
        'image',
        'image_mob',
        'education',
        'experience',
        'description',
        'operations'
    ];

    public static $specialist_routes = [
        'admin.specialists.index',
        'admin.specialists.search',
        'admin.specialists.show',
        'admin.specialists.edit',
        'admin.specialists.create',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function documents()
    {
      return $this->hasMany(Document::class);
    }
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'specialist_service', 'specialist_id', 'service_id');
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
        UploadFiles::delete_files($item);
    }
}
