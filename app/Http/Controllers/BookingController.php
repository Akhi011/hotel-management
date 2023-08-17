<?php

namespace App\Http\Controllers;


use App\Models\Book
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        $booking= Booking::all();
        return view('backend.pages.booking',Compact('booking'));
    }
    
    public function create()
    {
        return view('backend.pages.booking.create');
    }
 public function store(Request $request)
{

 booking::create([

    'your name'=>$request->guest_name,
    'email'=>$request->email, 
    'check in'=>$request->check_in,
    'packages'=>$request->packages,
   

]);
return redirect()->back();

}
}

