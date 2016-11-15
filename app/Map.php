<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'address','lat','lng'
    ];

    public function property(){
        return $this->belongsTo('App\Property');
    }
}
