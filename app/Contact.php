<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    public $fillable = ['first_name','last_name','description'];

    /* Relationships */

    public function user(){
      return $this->belongsTo('App\User','user_id');
    }

    //Emails

    public function emails(){
      return $this->hasMany('App\Emails','contact_id');
    }

    //Phones

    public function phones(){
      return $this->hasMany('App\Phone','contact_id');
    }

    //Images
    
    public function images(){
      return $this->hasMany('App\Image','contact_id');
    }


}
