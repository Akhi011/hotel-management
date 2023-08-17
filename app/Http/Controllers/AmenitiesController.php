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
return redirect()->route('amenities.list');

}


public function amenities_report()
    {

        return view ('backend.pages.Report.amenities');  
    
    }

    public function amenities_report_search()
    {

  $request->validate([
  'from_date'=>'required|date',
  'to_date'=>'required|date|after:from_date',

 ]);

 $from=$request->from_date;
 $to=$request->to_date;


$amenities=Amenities::whereBetween('çreated_at',[$from, $to])->get();
return view ('backend.pages.Report.amenities',compact('amenities'));

    }

}
