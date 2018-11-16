<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suatchieu extends Model
{
	protected $table="suatchieu";
	protected $fillable=['id','gioChieu'];
	public $timestamps=false;
	public function lichchieu()
	{
		return $this->hasMany('App\lichchieu','idSC');
	}
	  public function phansuatchieu()
    {
    	return $this->hasMany('App\phansuatchieu','idSC');
    }
}
