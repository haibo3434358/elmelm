<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'elm_role';
    protected $primaryKey = 'rid';
    protected $guarded = [];
    public $timestamps = false;
    public function permissions()
    {
//        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
        return $this->belongsToMany('App\Http\Model\Permission','elm_role_permission','rid','permission_id');
    }
}
