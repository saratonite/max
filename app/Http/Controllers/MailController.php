<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class MailController extends Controller
{

    /*
     E-Mail composer
    */
    public function getCompose(){


      return view('mail.composer');

    }

    public function postMail(Request $request){


      Mail::send('mail.emails.testemail',['request'=>$request],function($m) use($request) {

        $m->to($request->input('to'))->subject($request->input('subject'));

      });

    }

}
