<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = ['title','price','discounted_price','link_service','description','service_id'];
    public static $prices_routes = [
        'admin.services.prices.show',
        'admin.services.prices.edit',
        'admin.services.prices.create',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');

    }
}

