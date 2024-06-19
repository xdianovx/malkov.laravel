<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        'additional_education',
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

    public function specializations(): BelongsToMany
    {
        return $this->belongsToMany(Specialization::class, 'specialist_specialization', 'specialist_id', 'specialization_id');
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
