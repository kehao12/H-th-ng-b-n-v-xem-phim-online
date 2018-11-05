<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class phim extends Model
{
   protected $table="phim";
    protected $fillable = [ 'id','tenPhim','ngayKhoiChieu','noiDung','thoiLuong','trailer','poster','idTheLoai'];
    public $timestamps=false;
    public function fmDate($value)
    {
    	$date = Carbon::parse($value);
    	return $date->date_format('Y-m-d');
    }
    public function theLoai()
    {
    	return $this->belongsTo('App\theLoai','idTL');
    }
}
