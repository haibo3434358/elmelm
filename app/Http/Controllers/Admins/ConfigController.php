<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
    {
        $data = \DB::table('elm_config')->first();
        return view('admins.config.index',compact('data'));
    }
}
