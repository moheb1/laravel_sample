<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   protected $guarded=['id'];
   public function sender(){
      return $this->belongsTo('App\User','owner_id','id');
   }
}
