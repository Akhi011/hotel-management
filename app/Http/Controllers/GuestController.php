<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\guest;




class GuestController extends Controller
{
public function list()
    {
        $guest=Guest::all();
        return view('backend.pages.guest.list',Compact('guest'));
    }
    
    public function create()
    {
        return view('backend.pages.guest.create');
    }
public function store(Request $request)
{


    // dd($request);
guest::create([

    'name'=>$request->guest_name,
    'address'=>$request->guest_address ,
    'email'=>$request->email, 
    'age'=>$request->age,
    'gender'=>$request->gender,
    'description'=>$request->description

]);
return redirect()->back();

}
}