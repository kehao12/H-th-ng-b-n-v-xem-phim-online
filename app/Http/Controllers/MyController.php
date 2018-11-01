<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\taikhoanAD;
use App\nhanvien;
use App\rapPhim;
use App\phongChieu;
use App\taiKhoanKH;

use DB;
class MyController extends Controller
{
    public function login_Ad(Request $rq)
    {
    	$tenTK=$rq->userName;
    	$matkhau=$rq->pass;
    	$this->validate($rq,[
    		'tenTK'=>'require|min:3|max:20',
    		'password'=>'require|min:3|max:50'
    	],[
    		'tenTK.require'=>'Chua nhap tai khoan',
    		'tenTK.min'=>'Nhap kho duoc it hon 3 ky tu',
    		'tenTK.max'=>'Nhap khong qua 20 ky tu',
    		'password.require'=>'Chua nhap pass'
    	]);
    	$a= array('tenTK'=>$tenTK,'password'=>$matkhau);
    	if(Auth::attempt($a)){
            $tenUser =Auth::user();
            return view('admin.adIndex',['tenUser'=>$tenUser]);
        }
        else
         return view('logInAdmin')->with('thongbao','thatbai');
  }
  public function themNHANVIEN(Request $rq)
  {
     $ten=$rq->ten;
     $gioitinh=$rq->gioitinh;
     $quyen=$rq->quyen;
     $diaChi=$rq->diaChi;
     $taiKhoan=$rq->taiKhoan;
     $pass=bcrypt($rq->pass);

     $taikhoanAD= new taiKhoanAD;
     $taikhoanAD->tenTK=$taiKhoan;
     $taikhoanAD->password=$pass;
     $taikhoanAD->quyen= $quyen;
     $taikhoanAD->quyen;
     $taikhoanAD->save();
     $nhanvien = new nhanVien;
     $nhanvien->ten=$ten;
     $nhanvien->gioitinh= $gioitinh;
     $nhanvien->diachi= $diaChi;
     $nhanvien->tenTaiKhoan=  $taiKhoan;
     $nhanvien->save();
     echo "addSucess";
 }
 public function getList()
 {
    
     /*$data = DB::table('nhanVien')->join( 'users','nhanVien.tenTaiKhoan','=','users.tenTK')->select('nhanVien.*','users.password','users.quyen')->get()->toJson();
*/
      $nhanvien = new nhanVien;
      $data= $nhanvien->join('users','nhanVien.tenTaiKhoan','=','users.tenTK')->select('nhanVien.*','users.password','users.quyen')->get()->toJson();

    return $data;
 }
 public function editNV($id, Request $rq)
 {
     $nhanvien=new nhanvien;
     $users = new taiKhoanAD;
    $nhanvien->where('id',$id)->update(['ten'=>$rq->ten,'gioitinh'=>$rq->gioitinh,'diachi'=>$rq->diachi,'tenTaiKhoan'=>$rq->taiKhoan]);
    $users->where('tenTK',$rq->taiKhoan)->update(['quyen'=>$rq->quyen]);
    return 1;
 }
 public function deleteNhanVien($id)
 {
     $nhanvien =  nhanVien::findOrFail($id);
     $nhanvien->delete();
     return 1;
 }
 public function themRapPhim(Request $rq)
 {
    $rapPhim = new rapPhim;
    $rapPhim->tenRap=$rq->tenRap;
    $rapPhim->diaChi=$rq->diaChi;
    $rapPhim->save();
    return 1;
 }
 public function getListRap()
 {
     $rap = new rapPhim;
     $data=$rap->select('*')->get()->toJson();
     return $data;
 }
public function editRap($id,Request $rq)
{
    $rap = new rapPhim;
    $rap->where('id',$id)->update(['tenRap'=>$rq->ten,'diaChi'=>$rq->diaChi]);
    return 1;
}
public function deleteRap($id)
{
    $rap = rapPhim::findOrFail($id);
    $rap->delete();
    return 1;
}
}
