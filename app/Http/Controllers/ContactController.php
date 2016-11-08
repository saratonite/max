<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreContactRequest;
use App\Contact;

class ContactController extends Controller
{

  public function getIndex(){

    $contacts = Contact::all();

    return view('contacts.index',compact('contacts'));


  }

  // New Contact View

  public function getCreate(){

    return view('contacts.new');
  }

  // New Contact Store

  public function postCreate(StoreContactRequest $request){


    // Save Contact

    $contact = new Contact();

    $contact->fill($request->all());

    $contact->user_id = $request->user()->id;




    if($contact->save()){

      session()->flash('alert_message','Contact Created Successfully !!!');
      return redirect()->route('contacts');
    }


  }
}
