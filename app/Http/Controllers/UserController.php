<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view("register");
    }

    public function register(Request $request){
        $formField = $request->validate([
            "email" => ["required"],
            "password" => "required|confirmed|min:8"
        ]);

        $formField["password"] = bcrypt($formField["password"]);
        $formField["role_id"] = 3;
      
        $user = User::create($formField);
        auth()->login($user);
        return redirect("/")->with("message","Registered and Logined Successfully");
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with("message","Successfully Logouted");
    }

    public function login(){
       
        return view("login");
    }

    public function loginnow(Request $request){
        $formField = $request->validate([
            "email" => ["required","email"],
            "password"=> ["required","min:8"]
        ]);

        if(auth()->attempt($formField)){
            $request->session()->regenerate();

            return redirect("/")->with("message","Successfully Loginned");
        }
        return back()->withErrors(["email"=>"Not Match Email","password"=>"Not Match Password"]);
        
    }
}
