<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Authentication;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    
    function register(){
        return view('register');
    }
    function registerSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|min:8|alpha",
                "email"=>"required|email",
                "password"=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/",
                "conf_password"=>"required|same:password"
            ],
        );

 $rg= new Authentication();
 $rg->name= $req->name;
 $rg->email= $req->email;
 $rg->password= $req->password;
 $rg->save();

 
}


function login(){
    return view('login');
}
function loginSubmit(Request $req)
{
    
    $this->validate($req,[
        "email"=>"required",
        "password"=>"required"
    ]);
    $user = Authentication::where('email',$req->email)
                        ->where('password',$req->password)->first();
   
    if($user){

        $check=Authentication::where('email',$req->email)
                             ->where('password',$req->password)->first(['email']);
       
       if($check)
       {
        session()->put('logged',$user->email);
        return redirect()->route('customer.dashboard');

       }
    }
    else {
        session()->flash('msg','User not valid');
        return back();
    }

}
function dashboard(){

    $user = Authentication::where('email',session()->get('logged'))->first();
    return view('dashboard');
}

function logout(){
    session()->forget('logged');
    session()->flash('msg','Sucessfully Logged out');
    return view('login');
}

function pdetails()
{
    return view('dashboard.profiledetail');
}

function cpassword(){
    return view('dashboard.cpassword');
}

function cpasssubmit(Request $req){
    $this->validate($req,[
        "email"=>"required|",
        "newpass"=>"required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}+$/i",
        "cnpass"=>"required|min:8|same:newpass"
    ],
[
    "email.required"=>"Please Provide email address",
    "email.exists"=>"Email do not exists",
    "newpass.required"=>"Please Provide password",
    "newpass.regex"=>"Password must contain upper case,lower case,number and special characters",
    "cnpass.required"=>"Please Confirm password",
    "cnpass.same"=>"Confirm password don't match with password"
]);
    $user=Authentication::where('email',$req->email)->first();
    $user->password=$req->newpass;
    $user->update();
    session()->flash('Msg','Change password successfull');
    return "Succesfully Changed Password";
}

}






