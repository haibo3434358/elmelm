<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $table = 'elm_permission';
    protected $primaryKey = 'permission_id';
    protected $guarded = [];
    public $timestamps = false;
}
