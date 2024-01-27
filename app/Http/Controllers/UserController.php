<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "It is the list of users";
    }
    public function show($user)
    {
        return $user;
    }
}
