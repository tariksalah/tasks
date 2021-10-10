<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table='contact_us';
    protected $fillable = [
        'name','mobile','email','contact_us_type_id','title','description','user_id','ip','read_at'
    ];

    const FOLDER = 'contact_us';
    const PAGE = 'contact_us';

    public function type()
    {
      return $this->belongsto('App\Models\ContactUsType','contact_us_type_id');
    }

    public function user()
    {
      return $this->belongsto('App\User','user_id');
    }

    public function scopeUnread($query){
        return $query->wherenull('read_at');
    }

}
