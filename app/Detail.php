<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
<<<<<<< Updated upstream
        'area', 'bedroom', 'bathroom', 'facility', 'type', 'property_id'
>>>>>>> Stashed changes
    ];

    public function property(){
        return $this->belongsTo('App\Property');
    }
}
