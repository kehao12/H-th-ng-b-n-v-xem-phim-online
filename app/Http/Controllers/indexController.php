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
use App\suatChieu;
use App\lichChieu;
use App\phansuatchieu;
use App\chiTietSC;
use App\bookingTicket;
use App\ve;
class indexController extends Controller
{
    public function loadHome()
    {
    	$rap = new rapPhim;
    	$data=$rap->select('*')->get()->toArray();
    	return view('layouts.pages.home',['rap'=>$data]);
    }
    public function getLicHchieu(Request $rq)
    {
    	$lc= new lichChieu;
        $pc = new phongChieu;
        $sc= new suatChieu;
        $ctsc= new chiTietSC;
        $phim=new phim;
        /*$data=$lc->where("ngayChieu",$rq->ngayHT)->select('idPhim','idSC')->get()->toJson();*/
       /* $dataPhim=$phim->where('id',function($query) use ($rq){
            $query->select('idPhim')
            ->from('lichchieu')
            ->where('ngayChieu',$rq->ngayHT);
        })->select('tenPhim','thoiLuong','poster')->get()->toJson(); */
      /*  $getIdSC=$ctsc->where([
            ['ngayCHieu',$rq->ngayHT]
            ,['idPC',function($query) use ($rq){
                $query->select('id')
                ->from('phongchieu')
                ->where('idRap',$rq->idRapP);
            }]
        ])->select('idSC')->groupBy('idSC');
        $data = $sc->where('id',function($query) use ($rq){
            $query->select('idSC')
            ->from('')
        });
       $data=$lc->joinSub($getIdSC,'getIdSC',function($join) use ($rq){
            $join->on([['lichchieu.idSC','=','getIdSC.idSC'],
                        ['lichchieu.ngayChieu','=',$rq->ngayHT]
        ]);
       })->get()->toJson();
       return $data;*/
       $getIdSC=$ctsc->where([
        ['ngayCHieu',$rq->ngayHT]
        ,['idPC',function($query) use ($rq){
            $query->select('id')
            ->from('phongchieu')
            ->where('idRap',$rq->idRapP);
        }]
    ])->select('idSC','idPC','ngayCHieu');
       $getTimeSC=$sc->joinSub($getIdSC,'getIdSC',function($join){
        $join->on('suatchieu.id','getIdSC.idSC');

    })->select('suatchieu.gioChieu','getIdSC.*');
       $joinLC=$lc->joinSub($getTimeSC,'getTimeSC',function($join) {
        $join->on([
            ['lichchieu.idSC','getTimeSC.idSC'],
            ['lichchieu.ngayChieu','getTimeSC.ngayCHieu']
        ]);
    })->select('lichChieu.id','lichchieu.idPhim','getTimeSC.*');
       $data=$phim->joinSub($joinLC,'joinLC',function($join){
        $join->on('phim.id','joinLC.idPhim');
    })->select('phim.tenPhim','phim.thoiLuong','phim.poster','joinLC.*')->orderBy('joinLC.gioChieu','asc')->get()->toJson();
       return $data;

   }
   public function getSoPhong($id)
   {
    $pc = new phongChieu;
    $data =$pc->where('id',$id)->select('slA','slB','slC','slD','slE')->get()->toJson();
    return $data;
}
public function getVeForHome(Request $rq)
{
    $ve = new ve;
    $data=$ve->where([
        ['ngayChieu',$rq->ngay],['idSC',$rq->idSC]
    ])->select('id','giaVe','soLuongVe')->get()->toJson();
    return $data;
}
public function login_KH(Request $rq)
{
  $tenTKKH=$rq->userName;
  $matKhauKH=$rq->pass;
  $this->validate($rq,[
    'tenTK'=>'require|min:3|max:20',
    'password'=>'require|min:3|max:50'
],[
    'tenTK.require'=>'Chua nhap tai khoan',
    'tenTK.min'=>'Nhap kho duoc it hon 3 ky tu',
    'tenTK.max'=>'Nhap khong qua 20 ky tu',
    'password.require'=>'Chua nhap pass'
]);
  $pass=taiKhoanKH::where('tenTKKH',$tenTKKH)->select('matKhauKh')->get()->toArray();
  if($tenTKKH == null || $matKhauKH == null){
    return redirect('home');
  }
  if(strcmp($pass[0]['matKhauKh'],$matKhauKH)==0){
    $rq->session()->put('login',true);

    $rq->session()->put('khachhang',$tenTKKH);
    $rq->session()->put('toast',true);
    //echo  $_SESSION['khachhang'];
    $count=1;
    return redirect()->route('home');
}
else
{
    return redirect()->route('dangnhap');
}

}
    public function bookingVe(Request $rq)
    {
        $ord=new bookingTicket;
        $ord->tenKH=$rq->tenKH;
        $ord->idVe=$rq->idVe;
        $ord->idLich=$rq->idLich;
        $ord->soGhe=$rq->soGhe;
        $ord->slGhe=$rq->slGhe;
        $ord->save();
        return 1;
    }
    public function getDataBk(Request $rq)
    {
        $bk=new bookingTicket;
       $data = $bk->where('idLich',function($query) use ($rq){
        $query->select('id')->from('lichchieu')->where([
            ['idPhim',$rq->idPhim],['idSC',$rq->idSC]
        ]);
       })->select('*')->get()->toJson();
      /* $idLich=lichchieu::where([['idPhim',$rq->idPhim],['idSC',$rq->idSC]])->select('id')->get()->toJson();
        $data1 = $bk->where('idLich',$idLich)->select('*')->get()->toJson();*/
        return $data;
    }
}	


