<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admins';
    protected $fillable = [
        'title','is_active','ip','access_user_id'
    ];

    const FOLDER = 'admins';
    const PAGE = 'admins';

     // morph ------------------------------------------------------
     // morph user
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }


    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }


    // functions
    // status
    public function isActive()
    {
        return $this->is_active == 1;
    }



}
