<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phansuatchieu extends Model
{
	protected $table="phansuatchieu";
	protected $fillable=['idPC','idSC','ngayCHieu'];
	public $timestamps=false;
	public function suatchieu()
	{
		return $this->belongsTo('App\suatchieu','idSC','id');
	}
	public function phongChieu()
	{
		return $this->belongsTo('App\phongChieu','idPC','id');
	}
}
