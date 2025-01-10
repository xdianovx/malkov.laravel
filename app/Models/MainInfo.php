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
        'og_site_title',
        'og_site_image',
        'text_footer',
    ];
    public static $main_info_routes = [
        'admin.main_infos.edit',
    ];
}
