<?php

namespace App\Models;

use App\Services\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


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
        'description_header',
        'content'
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
        UploadFiles::delete_files($item);
    }
}
