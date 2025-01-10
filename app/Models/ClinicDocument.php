<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'specialist_id'
        ];
    public static $clinic_document_routes = [
        'admin.clinic_documents.index',
        'admin.clinic_documents.search',
        'admin.clinic_documents.show',
        'admin.clinic_documents.edit',
        'admin.clinic_documents.create',
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
