<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicSertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'specialist_id'
        ];
    public static $clinic_certificates_routes = [
        'admin.clinic_certificates.index',
        'admin.clinic_certificates.search',
        'admin.clinic_certificates.show',
        'admin.clinic_certificates.edit',
        'admin.clinic_certificates.create',
    ];
    public function scopeFilter($items)
    {
        if (request('search') !== null) {
            $items->where('id', 'ilike', '%' . request('search') . '%')
            ->orWhere('title', 'ilike', '%' . request('search') . '%');
        }
        return $items;
    }
}
