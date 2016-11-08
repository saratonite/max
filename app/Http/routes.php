<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Public Area

Route::get('home',["uses"=>"HomeController@index","as"=>"home"]);

Route::auth();

Route::get('/home', 'HomeController@index');

// User area

Route::group(['middleware'=>['auth'],'name'=>'me::'],function(){
  //Contacts
  Route::get('/contacts',['uses'=>'ContactController@getIndex','as'=>'contacts']);

  Route::get('/contacts/create',['uses'=>'ContactController@getCreate','as'=>'new-contact']);
  Route::post('/contacts/create',['uses'=>'ContactController@postCreate']);


  //Mail Routes
  Route::get('/mail/compose',['uses'=>'MailController@getCompose']);
  Route::post('/mail/post',['uses'=>'MailController@postMail']);
});
