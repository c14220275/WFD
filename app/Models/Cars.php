<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $primaryKey = 'car_id';
    protected $fillable = [
        'car_model',
        'year',
        'number_plate',
        'price',
        'no_rangka',
        'img',
    ];
    public function currentUser()
    {
        return $this->belongsTo(Profile::class, 'current_profile_id');
    }

}
