<?php

namespace App;
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    const FOLDER = 'users';
    const PAGE = 'user';


    protected $fillable = [
        'user_type_id','parent_id','userable_id','userable_type','name','user_name','email','mobile','password','image','banner','signature','mobile_type','fcm_token','is_verified','is_active','is_active_admin','deleted','ip','access_user_id'
    ];

    protected $hidden = [
        'password', 'remember_token', 'fcm_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];


    public function roles()
    {
        return $this->belongsToMany('App\Models\Role') ;
    }

    public function primaryRole() {
        return $this->roles()->wherePivot('primary', true);
    }

    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
          $this->attributes['password'] = \Illuminate\Support\Facades\Hash::make($value);
        }
    }



    // morph ------------------------------------------------------
    public function userable()
    {
        return $this->morphTo();
    }

    public function scopeForEmplyee($query)
    {
        return $query->where('userable_type', 'App\Models\Employee');
    }

    public function scopeForAdmin($query)
    {
        return $query->where('userable_type', 'App\Models\Admin');
    }


    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeActiveAdmin($query)
    {
        return $query->where('is_active_admin', 1);
    }

    public function scopeVerified($query)
    {
        return $query->where('is_verified', 1);
    }


    public function scopeofAny($query,$any_id)
    {
        return $query->where('userable_id', $any_id);
    }

    public function scopeInAny($query,$ids)
    {
        return $query->wherein('userable_id', $ids);
    }

    public function isAdmin()
    {
        return $this->userable_type == 'App\Models\Admin';
    }

    public function isEmployee()
    {
        return $this->userable_type == 'App\Models\Employee';
    }


    /* roles
    // get from currentRole property that injected in roles trait
    */
    public function isAdminRole()
    {
        return $this->currentRole->id == 1;
    }



    // status
    public function isActive($value)
    {
        return $this->is_active == $value;
    }

    public function isActiveAdmin($value)
    {
        return $this->is_active_admin == $value;
    }

    public function isVerified($value)
    {
        return $this->is_verified == $value;
    }

    public function getImagePath()
    {
        return asset('storage/app/'.$this->image);
    }


}
