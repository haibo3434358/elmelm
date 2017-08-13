<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class shangpin extends Model
{
    protected $table = 'elm_goods_detail';
    protected $primaryKey = 'gid';
    protected $guarded = [];
    public $timestamps = false;
}
