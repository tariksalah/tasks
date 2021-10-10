<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OurApp extends Model
{
    protected $table='ourapps';
    protected $fillable = [
        'id','title','is_active',
    ];
    public $timestamps = false;

    const FOLDER = 'ourapps';
    const PAGE = 'ourapps';






}
