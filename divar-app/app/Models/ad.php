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
        'favorite'
    ];

<<<<<<< HEAD
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function User()
    {

        return $this->belongsTo(User::class, 'user_id','id');
    }

    
=======
>>>>>>> ali


    public function users()
    {
        return $this->belongsToMany(User::class,'User_ad')->withPivot('favorite');
    }


    protected $hidden = [

    ];
}
