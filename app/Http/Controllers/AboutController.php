<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Can be made directly using 
    //php artisan make:controller DemoNameController --invokable 
    public function __invoke(){
        return view('about');
    }
}
