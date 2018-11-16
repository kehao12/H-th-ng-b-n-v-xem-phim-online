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
use App\lichchieu;
use App\suatchieu;
use App\phansuatchieu;
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
				'username'=>'required|min:3|max:20',
				'pass'=>'required|min:3|max:50',
				'pass1'=>'required|same:pass'

			],[
				'username.min'=>'Nhap kho duoc it hon 3 ky tu',
				'username.max'=>'Nhap khong qua 20 ky tu',
				'pass1.same'=>'Mat khau khong giong nhau'
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
			$lichchieuphim=lichchieu::where('idPhim',$rq->id)->get();
			$lichchieuphim1=lichchieu::where('idPhim',$rq->id)->select('ngayChieu')->distinct()->orderby('ngayChieu','asc')->get();
			$suatchieu=suatchieu::select()->get();
			$phansuatchieu=phansuatchieu::select()->get();
			$phongchieu=phongchieu::select()->get();
			
			$rap=rapPhim::select()->get();


			






			return view('pages.chitietphim',compact('phim','rap','theloai','lichchieuphim','suatchieu','phansuatchieu','phongchieu','lichchieuphim1'));
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
