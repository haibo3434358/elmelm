<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    protected $table = 'elm_user_admin';
    protected $primaryKey = 'aid';
    protected $guarded = [];
    public $timestamps = false;
    public function roles()
    {
//        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
        return $this->belongsToMany('App\Http\Model\Role','elm_role_auth','aid','rid');
    }
}
