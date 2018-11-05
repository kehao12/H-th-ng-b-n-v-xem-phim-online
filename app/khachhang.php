<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
     protected $table="khachhang";
    protected $fillable=['id','tenKH','soDienThoai','email','tenTaiKhoan'];
     public $timestamps=false;
     public function taiKhoan()
     {
     	return $this->belongsTo('App\taiKhoanKH','tenTaiKhoan','tenTKKH');
     }
}
