<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class SaleUser extends Model
{
    protected $table = 'elm_saleuser';
    protected $primaryKey = 'sid';
    protected $guarded = [];
    public $timestamps = false;
}
