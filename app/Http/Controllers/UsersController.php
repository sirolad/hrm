<?php

namespace Sirolad\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.dashboard');
    }
}
