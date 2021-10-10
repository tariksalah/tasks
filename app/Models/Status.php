<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table='statuses';
    protected $fillable = [
        'title'
    ];

    const FOLDER = 'statuses';
    const PAGE = 'statuses';


}
