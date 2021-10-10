<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table='settings';
    protected $fillable = [
        'property','value'
    ];

    const FILE_FOLDER = 'settings';
    const FILES_TABLE_NAME = 'settings';
    const PAGE = 'setting';

    // public function logoPath()
    // {
    //     return asset('storage/app/'.$this->logo);
    // }

}
