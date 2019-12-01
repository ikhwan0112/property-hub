<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'area', 'bedroom', 'bathroom', 'facility', 'type', 'property_id'
    ];

    public function property(){
        return $this->belongsTo('App\Property');
    }
}
