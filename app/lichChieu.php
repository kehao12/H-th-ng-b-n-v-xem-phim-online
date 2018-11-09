<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lichChieu extends Model
{
	protected $table="lichchieu";
	protected $fillable=['id','idPhim','idSC','ngayChieu'];
	public $timestamps=false;
}
