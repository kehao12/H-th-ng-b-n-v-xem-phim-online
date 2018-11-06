<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phongChieu extends Model
{
     protected $table="phongchieu";
    protected $fillable = [ 'id','tenPC','idRap','slA','slB','slC','slD','slE'];
    public $timestamps=false;
    public function rapPhim()
    {
    	return $this->belongsTo('App\rapPhim','idRap');
    }
}
