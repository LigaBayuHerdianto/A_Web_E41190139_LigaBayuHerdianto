<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Htpp\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    
}
