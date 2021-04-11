<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function register(){
         return view('form',['title'=>'Register Form']);
    }

    public function store(Request $request){

        $this->validate(request(),[

            "name"  => 'required| min:5|max:15',
            "age"   =>  'required|numeric',
            "phone" => 'required|digits:11',
            "id"    => 'required|digits:14',
            "password"  => 'required|min:6',
            "about_us"=>'min:10|max:500'


        ]);
              

     echo 'Form data';
    }
}
