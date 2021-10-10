<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EmployeeTask extends Model
{
    protected $table='employee_task';
    protected $fillable = [
        'id','employee_id','task_id',
    ];
    public $timestamps = false;

    const FOLDER = 'employee_task';
    const PAGE = 'employee_task';






}
