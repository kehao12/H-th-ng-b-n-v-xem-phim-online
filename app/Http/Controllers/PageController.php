<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taikhoanAD;
use App\nhanvien;
use App\rapPhim;
use App\phongChieu;
use App\taiKhoanKH;
use App\theLoai;
use App\phim;
use App\khachhang;
use DB;

class PageController extends Controller
{
	public function getdangky()
	{
		return view('pages.dangky');
	}
	public function postdangky(Request $request)
	{
		
/*
		$this->validate($this,
			[
				'username'=>'require|min:3|max:20|unique:taiKhoanKH:tenTKKH',
				'pass'=>'require|min:3|max:50',
				'pass1'=>'require|same:pass',
				'ten'=>'require',
				'sdt'=>'require',
				'email'=>'require|email',

			],[
				'username.require'=>'Chua nhap tai khoan',
				'username.min'=>'Nhap kho duoc it hon 3 ky tu',
				'username.max'=>'Nhap khong qua 20 ky tu',
				'pass.require'=>'Chua nhap pass',
				'email.require'=>'Chua nhap email',
				'email.email'=>'Chua sai email',
				'pass1.same'=>'Mat khau khong giong nhau',
				'ten.require'=>'Nhap ten',
				'sdt.require'=>'Nhap sdt',
				'username.unique'=>'Tai khoan da ton tai',
			]);
*/

		$taiKhoanKH=new taiKhoanKH;
		$taiKhoanKH->tenTKKH=$request->username;
		$taiKhoanKH->matKhauKh=$request->pass;
		$taiKhoanKH->save();

		$khachhang=new khachhang;
		$khachhang->tenKH=$request->ten;
		$khachhang->email=$request->email;
		$khachhang->soDienThoai=$request->sdt;
		$khachhang->tenTaiKhoan=$request->username;
		$khachhang->save();
		return view('pages.dangky')->with('thongbao','thanhcong');


	}

	public function getChiTiet(Request $rq)
	{
		$phim=phim::where('id',$rq->id)->first();
		$rap=rapPhim::select()->get();
		$theloai=theLoai::where('id',$phim->idTL)->select('tenTL')->first();
		return view('pages.chitietphim',compact('phim','rap','theloai'));
	}
}
