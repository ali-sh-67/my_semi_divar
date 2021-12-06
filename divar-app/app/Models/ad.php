<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'title',
        'description',
        'image_url',
        'price',
        'address',
        'phone_number_ads',
        'created_at',
        'updated_at',
    ];

    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
