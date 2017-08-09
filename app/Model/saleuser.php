<?php

namespace App\\Model;

use Illuminate\Database\Eloquent\Model;

class saleuser extends Model
{
    protected $table = 'elm_saleuser';
    protected $primaryKey = 'sid';
    protected $guarded = [];
    public $timestamps = false;
}
