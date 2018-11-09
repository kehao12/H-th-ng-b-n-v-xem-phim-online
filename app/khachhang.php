<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
     protected $table="khachhang";
<<<<<<< HEAD
    protected $fillable=['id','tenKH','diaChi','soDienThoai','email','tenTaiKhoan'];
=======
    protected $fillable=['id','tenKH','soDienThoai','email','tenTaiKhoan'];
>>>>>>> hao1
     public $timestamps=false;
     public function taiKhoan()
     {
     	return $this->belongsTo('App\taiKhoanKH','tenTaiKhoan','tenTKKH');
     }
}
