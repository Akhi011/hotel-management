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
          
        
        return view('backend.pages.RoomCategory.Edit');
        
    }

    public function delete($id)
    {
      
        $roomcategory=Room_Category::find($id);
        $roomcategory->delete();
      return redirect()->back()->with('msg','Deleted Successfully');
    }

    public function create()
    {
        return view('backend.pages.roomcategory.create');
    }


    public function store(request $request){

    {


        $request->validate([
            'room_number'=>'required',
            'room_loaction'=>'required',
            'room_description'=>'required',

        ]); 

    Room_Category::create([
    'single_room'       =>$request->single_room,
    'double_room'     =>$request->double_room,
    'king_room'  =>$request->king_room,
    'duplex_room'  =>$request->duplex_room,
    'adjoining_room'  =>$request->adjoining_room,
    'adjacent_room'  =>$request->adjacent_room
    

]);
return redirect()->route('roomcategory.list');


}
    }
}



