<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Add your functions in here. This will be called in routes
    // __invoke function will be directly invoked and doesn't need to be called.
    //public - private - or protected functions can be created
    public function index(){
        return view('home');
    }
    
}
