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
		

		$this->validate($request,
			[
				'username'=>'required|min:3|max:20|unique:taiKhoanKH:tenTKKH',
				'pass'=>'required|min:3|max:50',
				'pass1'=>'required|same:pass',
				'ten'=>'required',
				'sdt'=>'required',
				'email'=>'required|email'

			],[
				'username.required'=>'Nhập đủ thông tin',
				'username.min'=>'Nhap kho duoc it hon 3 ky tu',
				'username.max'=>'Nhap khong qua 20 ky tu',
				'pass.required'=>'Nhập đủ thông tin',
				'email.required'=>'Nhập đủ thông tin',
				'email.email'=>'Chua sai email',
				'pass1.same'=>'Mat khau khong giong nhau',
				'ten.required'=>'Nhập đủ thông tin',
				'sdt.required'=>'Nhập đủ thông tin',
				'username.unique'=>'Tai khoan da ton tai'
			]);


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
			$theloai=theLoai::where('id',$phim->idTL)->select('tenTL')->first();



			return view('pages.chitietphim',compact('phim','rap','theloai'));
		}

		public function getTrangChu()	
		{	
			$phim=phim::select()->get();
			$phimdc=phim::where('ngayKhoiChieu','<',date('y/m/d'))->get();
			$phimsc=phim::where('ngayKhoiChieu','>',date('y/m/d'))->get();
		
			

			return view('pages.index',compact('phimsc','phimdc','phim'));
		}
		public function getThongTinKH(Request $rq)
		{
			$khachhang=khachhang::where('id',$rq->id)->first();
			return view('pages.thongtinKH',compact('khachhang'));
		}
		public function getThayThongTin()
		{
			return view('pages.thaythongtin');
		}
		public function postThayThongTin(Request $rq)		
		{
			$khachhang=new khachhang;
			$khachhang->tenKH=$rq->name;
			$khachhang->where('id',$rq->id)->update(['tenKH'=>$rq->name,'email'=>$rq->email,'soDienThoai'=>$rq->sdt]);
			return redirect()->back();
		}
	}
