<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $table='verifications';
    protected $fillable = [
        'user_id','code',
    ];

}
