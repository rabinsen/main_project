<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Billable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_activated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function properties(){
        return $this->hasMany('App\Property');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function agentReviews(){
        return $this->hasMany('App\AgentReview');
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }



//    protected $casts = [
//        'is_admin' => 'boolean',
//    ];
//
//    public function isAdmin()
//    {
//        return $this->is_admin;
//    }

//    public function isAdmin()
//    {
//        return $this->admin; // this looks for an admin column in your users table
//    }
}
