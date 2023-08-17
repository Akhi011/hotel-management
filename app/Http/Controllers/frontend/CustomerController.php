<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CustomerUser;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(){
         return view('Frontend.pages.customers.register');
    }
    public function store(Request $request){

        // dd($request->all());
        $request->validate([
                'name'=> 'required',
                'email'=>'required',
                'password'=>'required|min:6'
        ]);

        CustomerUser::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password,

        ]);
        return redirect()->back();

    }
    public function customerLogin(){
        return view('Frontend.pages.customers.login');
    }



}
