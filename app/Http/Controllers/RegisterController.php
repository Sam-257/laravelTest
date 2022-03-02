<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('users.register');
    }

    //Request is the name of the class and $request is the object
    // It contains all the posted data
    public function register(Request $request){
        // use validate function provided by laravel.
        //Validation is done at server side.
        //parameter of the function is an associative array
        //Validations are present in resources/lang/validation.php.
        //for Confirm Password, we have to use ''password_confirmation''
        //as the name.
        //if you want to use another name use same attribute
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
            //'confirm_password' => 'required|same:password'
        ]);
        echo "<pre>";
        print_r($request->all());
    }
}
