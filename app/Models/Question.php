<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'block_id',
        'description'
    ];
    public static $questions_routes = [
        'admin.blocks.questions.show',
        'admin.blocks.questions.edit',
        'admin.blocks.questions.create',
    ];

    public function block()
    {
        return $this->belongsTo(Block::class);

    }
}
