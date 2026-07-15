<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResortContent extends Model
{
    protected $fillable = ['location_address', 'whatsapp_1', 'whatsapp_2', 'whatsapp_3', 'email_address', 'map_iframe_url'];
}