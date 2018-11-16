<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lichchieu extends Model
{
	protected $table="lichchieu";
	protected $fillable=['id','idPhim','idSC','ngayChieu'];
	public $timestamps=false;
	public function suatchieu()
	{
		return $this->belongsTo('App\suatchieu','idSC','id');
	}
	public function phim()
	{
		return $this->belongsTo('App\phim','idPhim','id');
	}

}
