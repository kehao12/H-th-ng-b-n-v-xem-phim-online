<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phansuatchieu extends Model
{
     protected $table="phansuatchieu";
     protected $fillable=['idPC','idSC'];
      public $timestamps=false;
}
