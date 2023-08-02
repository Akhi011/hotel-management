<?php

namespace App\Http\Controllers;
Use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function list()
    {

      $rooms=Room::all(); 
    //   dd($rooms);
        return view('backend.pages.room.list',Compact('rooms'));
        
    }
    public function  edit($id){
        
        // dd($id);
        return view('backend.pages.Room.Edit');
        
    }

    public function delete($id)
    {
      
      $room=Room::find($id);
      $room->delete();
      return redirect()->back()->with('msg','Deleted Successfully');
    }

    public function create()
    {
        return view('backend.pages.room.create');
    }


    public function store(request $request){

    {
// dd($request->all());

        $request->validate([
            'room_number'=>'required',
            'room_location'=>'required',
            'room_description'=>'required',

        ]); 

    Room::create([
    'room_number'       =>$request->room_number,
    'room_location'     =>$request->room_loaction,
    'room_description'  =>$request->room_description
    

]);
return redirect()->route('room.list');


}
    }
}

