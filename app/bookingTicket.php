<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookingTicket extends Model
{
	protected $table="bookingticket";
	protected $fillable=['id','tenKH','idVe','idLich','soGhe'];
	public $timestamps=false;
}
