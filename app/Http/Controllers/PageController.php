<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PageController extends Controller
{
    public function index() 
    {
        $packages = Package::all();
        
        return view("home", compact("packages"));
    }
}
