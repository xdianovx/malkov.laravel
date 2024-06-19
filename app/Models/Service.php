<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    private $descendants = [];
    protected $fillable = [
        'title',
        'image',
        'image_mob',
        'description_footer',
        'slug',
        'parent_id',
        'description',
        'description_header'
    ];
    public static $services_routes = [
        'admin.services.index',
        'admin.services.search',
        'admin.services.show',
        'admin.services.edit',
        'admin.services.create',
        'admin.services.edit_child',
        'admin.services.create_child',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function specialists(): BelongsToMany
    {
        return $this->belongsToMany(Specialist::class);
    }
    public function childrenServices()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    public function children()
    {
        return $this->childrenServices()->with('children');
    }
    public function hasChildren()
    {
        if ($this->children->count()) {
            return true;
        }

        return false;
    }
    public function findDescendants(Service $service)
    {
        $this->descendants[] = $service->id;

        if ($service->hasChildren()) {
            foreach ($service->children as $child) {
                $this->findDescendants($child);
            }
        }
    }

    public function getDescendants(Service $service)
    {
        $this->findDescendants($service);
        return $this->descendants;
    }
    public function prices()
    {
      return $this->hasMany(Price::class);
    }
    public function scopeFilter($items)
    {
        if (request('search') !== null) {
            $items->where('id', 'ilike', '%' . request('search') . '%')
            ->orWhere('title', 'ilike', '%' . request('search') . '%')
            ->orWhere('slug', 'ilike', '%' . request('search') . '%');
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
