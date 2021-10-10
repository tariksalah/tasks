<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PriorityLevel extends Model
{
    protected $table='priority levels';
    protected $fillable = [
        'id','employee_id','task_id',
    ];
    public $timestamps = false;

    const FOLDER = 'priority levels';
    const PAGE = 'priority levels';






}
