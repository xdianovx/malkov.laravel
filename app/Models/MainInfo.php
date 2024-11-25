<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'telegram',
        'whatsapp',
        'vkontakte',
        'phone',
        'address',
        'working_days',
    ];
    public static $main_info_routes = [
        'admin.main_infos.edit',
    ];
}
