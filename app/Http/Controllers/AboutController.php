<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show(){
        return view('About');
    }

    public function index(){
        echo "this is laravel controller example";
    }
}
