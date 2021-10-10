<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table='password_resets';
    protected $fillable = [
        'email','token','user_id','created_at'
    ];

    public $timestamps = false;



}
