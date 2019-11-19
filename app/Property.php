<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'picture', 'description', 'address', 'price', 'detail_id',
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function details(){
        return $this->hasMany('App\Detail');
    }
}
