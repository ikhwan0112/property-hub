<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyUser extends Model
{
    protected $fillable = [
        'description', 'user_id', 'property_id',
    ];
}
