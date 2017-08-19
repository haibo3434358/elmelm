<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class SaleUserDetail extends Model
{
    protected $table = 'elm_saleuser_detail';
    protected $primaryKey = 'sxid';
    protected $guarded = [];
    public $timestamps = false;
}
