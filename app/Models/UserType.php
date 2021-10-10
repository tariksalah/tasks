<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table='user_type';
    protected $fillable = [
        'title','type_for','alias','sort',
    ];
    public $timestamps = false;

    // const ADMIN = 1;
    // const FAMOUS = 2;
    // const DEALER = 3;
    // const USER = 4;

    protected $casts = [
      'title' => 'array',
      'item_types' => 'array',
    ];

    public function getTitle($language)
    {
      $language = $language ?? app()->getLocale();
      return isset( $this->title[$language] ) ? $this->title[$language] : '';
    }




}
