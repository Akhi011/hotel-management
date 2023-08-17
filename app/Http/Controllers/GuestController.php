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


public function guest_list_report()
    {

        return view ('backend.pages.Report.guestlist');  
    
    }

    public function guest_list_report_search()
    {

  $request->validate([
  'from_date'=>'required|date',
  'to_date'=>'required|date|after:from_date',

 ]);

 $from=$request->from_date;
 $to=$request->to_date;


$guest=Guest::whereBetween('çreated_at',[$from, $to])->get();
return view ('backend.pages.Report.guestlist',compact('guest_list'));

    }

}