<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table='tasks';
    protected $fillable = [
        'title','ourapp_id','access_user_id','is_general','duration','start_date','description','priority_level_id','parent_id','is_active','status_id','status_task_id'
    ];

    const FOLDER = 'tasks';
    const PAGE = 'tasks';

    public function ourapp()
    {
        return $this->belongsTo('App\Models\OurApp','ourapp_id') ;
    }

    public function priority_level()
    {
        return $this->belongsTo('App\Models\PriorityLevel','priority_level_id') ;
    }

    public function employees()
    {
        return $this->belongsToMany('App\Models\Employee','App\Models\EmployeeTask','task_id','employee_id') ;
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status','status_id') ;
    }

    public function statuses()
    {
        return $this->hasMany('App\Models\StatusTask','id') ;
    }

    public function statusTask()
    {
        return $this->belongsTo('App\Models\StatusTask','status_Task_id') ;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }



}
