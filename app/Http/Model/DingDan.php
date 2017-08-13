<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class DingDan extends Model
{
     protected $table = 'elm_order_detail';
    protected $primaryKey = 'dxid';
    protected $guarded = [];
    public $timestamps = false;
}
