<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.home', compact('user'));
    }
}
