<?php

namespace App\Models;

use App\Services\UploadFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'specialist_id'
        ];
    public static $document_routes = [
        'admin.documents.index',
        'admin.documents.search',
        'admin.documents.show',
        'admin.documents.edit',
        'admin.documents.create',
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }

    public function delete_files($item)
    {
        UploadFiles::delete_document_file($item);
    }
}
