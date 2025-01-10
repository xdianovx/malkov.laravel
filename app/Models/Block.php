<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'is_active',
        'h1_title',
        'description'
    ];
    public static $blocks_routes = [
        'admin.blocks.index',
        'admin.blocks.search',
        'admin.blocks.show',
        'admin.blocks.edit',
        'admin.blocks.create',
    ];
    public function questions()
    {
      return $this->hasMany(Question::class);
    }
    public function modern_offices()
    {
      return $this->hasMany(ModernOffice::class);
    }
}
