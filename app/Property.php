<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'picture', 'description', 'address', 'price', 'status', 'lng', 'lat', 'detail_id', 'user-id',
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function details(){
        return $this->hasMany('App\Detail');
    }
}
