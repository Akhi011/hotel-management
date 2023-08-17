<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
public function list()
{

return view ('frontend.pages.Contact.list');

}
public function  create()
{
    return view('frontend.pages.Contact.create');
}

}
