<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User1;
use App\Http\Requests\UserRequest;

class user extends Controller
{
    public function create()
    {
        return view ('register');
    }
    

}
