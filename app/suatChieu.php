<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suatChieu extends Model
{
    protected $table="suatchieu";
     protected $fillable=['id','gioChieu'];
      public $timestamps=false;
      public function phongChieu()
      {
      	# code...
      	return $this->belongsToMany('App\phongChieu');
      }
      public function phim()
      {
      	return $this->belongsToMany('App\phim');
      }
}
