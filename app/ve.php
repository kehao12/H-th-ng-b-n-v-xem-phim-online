<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    protected $table="ve";
    protected $fillable=["id","idSC","ngayChieu","giaVe","soLuongVe"];
    public $timestamps=false;
   
}
