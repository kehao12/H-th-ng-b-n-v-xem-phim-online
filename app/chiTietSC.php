<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chiTietSC extends Model
{
     protected $table="chitietsuatchieu";
     protected $fillable=['idPC','idSC','ngayCHieu'];
      public $timestamps=false;
}
