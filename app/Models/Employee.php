<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employees';
    protected $fillable = [
        'id','name','department_id','is_active',
    ];
    public $timestamps = false;

    const FOLDER = 'emplyees';
    const PAGE = 'emplyees';


    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id') ;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }



}
