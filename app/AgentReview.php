<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentReview extends Model
{
    protected $fillable = [
        'body', 'rating'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
