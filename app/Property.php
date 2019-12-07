<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'picture', 'description', 'address', 'price', 'user_id', 'lng', 'lat', 'status'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function details(){
        return $this->hasOne('App\Detail');
    }
}
