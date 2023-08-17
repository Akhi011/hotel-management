<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(){

        return view('Frontend.pages.booking');
   }
public function store(Request $request){

        // dd($request->all());
        $request->validate([
                'Your name'=> 'required',
                'email'=>'required',
                'chech in'=>'required',
                'packages'=>'required',

        ]);

        Booking::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'check in'=>$request->check_in,
            'packages'=>$request->email,
        ]);
        return redirect()->back();



}
}