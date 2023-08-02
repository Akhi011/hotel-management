<?php

namespace App\Http\Controllers;
Use App\Models\Amenities;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    public function list()
    {

      $amenities=Amenities::all(); 
    
        return view('backend.pages.amenities.list',Compact('amenities'));
        
    }

    public function create()
    {
        return view('backend.pages.amenities.create');
    }


    public function store(request $request){

    
$request->validate([
    'lift'=>'required',
    'ac'=>'required',
    'wifi'=>'required',
    'cleaning_services'=>'required',

]); 

Amenities::create([
'lift'       =>$request->ac,
'ac'     =>$request->ac,
'wifi'  =>$request->wifi,
'cleaning_services'  =>$request->cleaning_services,
'laundry'  =>$request->laundry,
'television'  =>$request->television,
'description'  =>$request->description

]);
return redirect()->route('room.list');



}
}