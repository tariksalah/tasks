<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $fillable = [
        'title','role_for','privileges','privileges_ids','access_user_id','ip','menu_1'
    ];

    const PAGE = 'role';

    const ADMIN_ROLE = 1;
    const SUPERVISOR_ROLE = 2;
    const SCHOOL_ROLE = 3;

    protected $casts = [
      'privileges' => 'array','privileges_ids' => 'array', 'menu_1' => 'array'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function hasPrivilege(string $privilege)
    {
        return in_array($privilege,$this->privileges);
    }


}
