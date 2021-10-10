<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StatusTask extends Model
{
    protected $table='status_task';
    protected $fillable = [
        'task_id','status_id','access_user_id','comment'
    ];

    const FOLDER = 'status_task';
    const PAGE = 'status_task';

    // public function statuses()
    // {
    //     return $this->belongsTo('App\Models\Status','task_id') ;
    // }



}
