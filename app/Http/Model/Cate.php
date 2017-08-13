<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $table = 'elm_cate';
    protected $primaryKey = 'cid';
    public $timestamps = false;
    protected $guarded = [];

}
