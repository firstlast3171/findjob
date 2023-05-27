<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ListingController extends Controller
{
    public function index(Request $request){
        return view('index',[
            "heading"=>"FindJob",
            "contents"=>Listing::latest()->findwithTags(request(["tag","search","company"]))->paginate(8)
        ]);
    }

    function viewPost(Listing $listing){
        
        return view("view",[
            "content"=>$listing
        ]);
    }


    public function create(Request $request){
       
        return view("create");
    }

    public function store(Request $request){
        
        $formField = $request->validate([
            "title"=>"required",
            "company"=>"required",
            "location"=>"required",
            "email"=>["required","email"],
            "tags"=>"required",
            "description"=>["required","min:50"]
        ]);
        if($request->hasFile("logo")){
            $formField["image"] = $request->file('logo')->store("images","public");
        }
        $formField["user_id"] = auth()->id() ;
        Listing::create($formField);
        
        return redirect("/")->with("message","Created Successfully");
    }

    public function edit(Listing $listing){
        
            return view("edit",[
                "listing"=>$listing
            ]);
    }

    public function update(Request $request, Listing $listing){
        
        $formField = $request->validate([
            "title"=>"required",
            "company"=>"required",
            "location"=>"required",
            "email"=>["required","email"],
            "tags"=>"required",
            "description"=>["required","min:50"]
        ]);
        if($request->hasFile("logo")){
            $formField["image"] = $request->file('logo')->store("images","public");
        }
        $listing->update($formField);
        
        return back()->with("message","Updated Successfully");
    }

    public function delete(Listing $listing){
        $listing->delete();
        return redirect("/")->with("message","Deleted Successfully");
    }

    public function manage(){
        return view("manage",["listings"=> auth()->user()->listings()->get()]);
    }
}
