<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index(){
        return view('people');
    }
    public function people_register(Request $request){
        //Validation of Form input at server side.........................
        $request->validate([
            'people_name' => 'required',
            'people_email' => 'required|email',
            'people_password' => 'required',
            'people_confirm_password' => 'required|same:people_password',
            'people_gender' => 'required',
            'people_address' => 'required'
        ]);
        //echo "<pre>";
        //print_r($request->all());

        //Insert usine ORM i.e. Models..........................................
        $people = new People;
        $people->people_name = $request['people_name'];
        $people->people_email = $request['people_email'];
        $people->people_password = md5($request['people_password']);
        $people->people_gender = $request['people_gender'];
        $people->people_address = $request['people_address'];
        $people->save();

        return redirect('people_table'); //redirects to this URL
    }
    //Select using ORM..........................................................
    public function people_view(){
        $people = People::all();
        $data = compact('people'); //To be used when we use data from multiple databases

        return view('people_table')->with($data);
    }

    //Update using ORM.........................................................
    public function people_edit($id)
    {
        $person = People::find($id);
        if(is_null($person)){
            return redirect('people_table');
        }
        else{
            
        }
    }
    
    //Delete using ORM........................................................
    public function people_delete($id){
        $person = People::find($id);
        if(!is_null($person)){
            $person->delete();
        }
        return redirect('people_table');
        
    }
    
}
