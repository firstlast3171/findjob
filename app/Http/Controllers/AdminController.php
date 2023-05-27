<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $user = User::all();
        return view("user",[
            "users"=>$user
        ]);
    }

    public function editpage($user){
        $role = Role::all();
        $user = User::find($user);
        return view("changerole",
        [
            "roles"=>$role,
            "user"=>$user
        ],);
    }

    public function changed(User $user){
       $formField = [
        "role_id" => request()->role
       ];

       $user->update($formField);
       return redirect("/admin")->with("message","Changed Successfully");
    }

    public function delete(User $user){
        $user->delete();
        return redirect("/admin")->with("message","Deleted Successfully");
    }
}
