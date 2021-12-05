<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'categorys';//this rename table for change migration name
    protected $fillable = [
        'id',
        'name',
        'name_en',
        'parent_id',
        'created_at',
        'updated_at',
    ];

    public function Ad(){
        return $this->hasMany(Ad::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
