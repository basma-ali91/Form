<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\registerController;
use Illuminate\Http\Request;
use App\Models\register;

class formController extends Controller
{
    public function register(){
         return view('form',['title'=>'Register Form']);
    }

    public function store(Request $request){

     $data=   $this->validate(request(),[

            "name"    => 'required| min:5|max:15|alpha',
            "age"     => 'required|numeric|min:16|max:30',
            "phone"   => 'required|digits:11',
            "national_id" => 'required|digits:14',
            "password"=> 'required|min:6',
            "about_us"=> 'required|min:10|max:500'


        ]);
        $data['password'] = bcrypt($data['password']);

     
        $op = register::create($data);
   
        if($op){
   
           $message = "data inserted";
        }else{
           $mesage = "Error in insertion"; 
        }
   
   
        return redirect('display');     


    }
    
   public function display(){
    //where('id',1)
    //orderBy('name','asc')
    $data = register::paginate(15);    
    return view('display',['RegisterData' => $data]);

   }

   
   public function delete(Request $request){
    // code 

     $id = $request->id;

    $op =  register::where('id',$id)->delete();

     return redirect('display');


}


public function edit(Request $request)
{
    // code . . . 

     // where('id',$request->id)->get()->first();
     // find
    $data = register::findOrFail($request->id);

    return view('edit',['form_data' => $data , 'title' => 'Edit Form Register']);

}




public function update(Request $request){

   // code 

       
   $data =  $this->validate(request(),[
    "name"    => 'required| min:5|max:15|alpha',
    "age"     => 'required|numeric|min:16|max:30',
    "phone"   => 'required|digits:11',
    "national_id" => 'required|digits:14',
    "about_us"=> 'required|min:10|max:500'
   
  ]);


     // ['name' => $request->name,'email' => $request->email]
    $op = register::where('id',$request->id)->update($data);

     if($op){
     $message =  'updated';
     }else{
     $message =  'error in update';
     }

     return redirect('display');


}
}
