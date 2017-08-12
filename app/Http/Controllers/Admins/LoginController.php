<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return view('admins.login.login ');
    }
}
