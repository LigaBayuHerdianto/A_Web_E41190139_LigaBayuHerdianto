<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.home', compact('user'));
    }
}
