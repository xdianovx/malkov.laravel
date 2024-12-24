<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'rating',
        'date',
        'is_active',
        'specialist_id'
    ];
    public static $reviews_routes = [
        'admin.reviews.index',
        'admin.reviews.search',
        'admin.reviews.create',
        'admin.reviews.show',
        'admin.reviews.edit',
    ];


public function specialist()
{
    return $this->belongsTo(Specialist::class);
}

    public function scopeFilter($items)
    {
        if (request('search') !== null) {
            $items->where('id', 'ilike', '%' . request('search') . '%')
            ->orWhere('title', 'ilike', '%' . request('search') . '%');
        }
        return $items;
    }
}

