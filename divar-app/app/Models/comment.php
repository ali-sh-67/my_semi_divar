<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',

        'Ads_id',                

        'description',       
        'created_at',
        'updated_at',
    ];
}
