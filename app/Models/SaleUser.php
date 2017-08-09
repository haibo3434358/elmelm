<?php

namespace App\App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleUser extends Model
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'saleuser';
    protected $primaryKey = 'sid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = ['name', 'email', 'password'];
    protected $guarded = [];
    public  $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
}
