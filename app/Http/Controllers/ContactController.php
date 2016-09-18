<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{

  public function getIndex(){

    $contacts = Contact::all();

    return view('contacts.index',compact('contacts'));


  }
}
