<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description_footer',
        'slug',
        'description',
    ];
    public static $specializations_routes = [
        'admin.specializations.index',
        'admin.specializations.search',
        'admin.specializations.show',
        'admin.specializations.edit',
        'admin.specializations.create',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function specialists(): BelongsToMany
    {
        return $this->belongsToMany(Specialist::class);
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
}

