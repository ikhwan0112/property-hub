<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        'picture', 'description', 'address', 'price', 'detail_id', 'user-id',
=======
        'picture', 'description', 'address', 'price', 'status', 'lng', 'lat', 'user_id',
>>>>>>> Stashed changes
=======
        'picture', 'description', 'address', 'price', 'user_id', 'lng', 'lat', 'status'
>>>>>>> Stashed changes
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function details(){
        return $this->hasOne('App\Detail');
    }
}
