<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function list()
    {

      //$roomcategory=room_Category::all(); 
      //Compact('roomcategory.list')
        return view('backend.pages.Room Category.list');
        
    }
    public function  edit($id){
          
        
        return view('backend.pages.Room Category.Edit');
        
    }

    public function delete($id)
    {
      
        $roomcategory=Room_Category::find($id);
        $roomcategory->delete();
      return redirect()->back()->with('msg','Deleted Successfully');
    }

    public function create()
    {
        return view('backend.pages.Room Category.create');
    }


    public function store(request $request){

    {


        $request->validate([
            'single_room'=>'required',
            'double_room'=>'required',
            'king_room'=>'required',
            'deluxe_room'=>'required',
        ]); 

    Room_Category::create([
    'single_room'       =>$request->single_room,
    'double_room'     =>$request->double_room,
    'king_room'  =>$request->king_room,
    'deluxe_room'  =>$request->duplex_room,


]);
return redirect()->route('roomcategory.list');


}
    }

    public function room_category_report()
    {

        return view ('backend.pages.Report.roomcategory');  
    
    }

    public function room_category_report_search()
    {

  $request->validate([
  'from_date'=>'required|date',
  'to_date'=>'required|date|after:from_date',

 ]);

 $from=$request->from_date;
 $to=$request->to_date;


$roomcategory=RoomCategory::whereBetween('çreated_at',[$from, $to])->get();
return view ('backend.pages.Report.roomcategory',compact('guest_list'));

    }

};




