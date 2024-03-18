<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function registration()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
}
