<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taiKhoanKH extends Model
{
       protected $table ='taikhoankh';
    protected $fillable = [ 'tenTKKH','matKhaukh'];
    public $timestamps=false;
    public function nhanvien()
    {
    	return $this->hasOne('App\khachhang');
    }
}
