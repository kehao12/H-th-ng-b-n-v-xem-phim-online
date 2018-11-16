<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Tests\Debug\FileLinkFormatterTest;
use Illuminate\Support\Facades\Storage;
use Validate;
use App\File;
use App\taikhoanAD;
use App\nhanvien;
use App\rapPhim;
use App\phongChieu;
use App\taiKhoanKH;
use App\theLoai;
use App\phim;
use App\suatChieu;
use App\lichChieu;
use App\chiTietSC;
use App\ve;
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
      if($tenTK == null || $matkhau == null){
        return redirect('admin');
      }
    	$a= array('tenTK'=>$tenTK,'password'=>$matkhau);
    	if(Auth::attempt($a)){
            $tenUser =Auth::user();
            $tk=new taiKhoanAD;
            $quyen=$tk->where('tenTK',$tenTK)->select('quyen')->get()->toArray();
            $rq->session()->put('loginAD',true);
            $rq->session()->put('admin',$tenTK);
            $rq->session()->put('quyen',$quyen[0]['quyen']);
            $rq->session()->put('toastAD',true);
            return redirect()->route('admin');
        }
        else
           return redirect('logInAdmin')->with('thongbao','thatbai');
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
/* ql the loai*/
public function addTheLoai(Request $rq)
{
    $theLoai=new theLoai;
    $theLoai->tenTL=$rq->tenTL;
    $theLoai->save();
    return 1;
}
public function getListTL()
{
    $tl = new theLoai;
    $data=$tl->select('*')->get()->toJson();
    return $data;
}
public function editTL($id, Request $rq)
{
    $tl = new theLoai;
    $tl->where('id',$id)->update(['tenTL'=>$rq->ten]);
    return 1;
}
public function deleteTL($id)
{
    $tl= theLoai::findOrFail($id);
    $tl->delete();
    return 1;
}
/* end the loai*/
/* QL PHIM*/
public function addPhim(Request $rq)
{
    $phim = new phim;
    $phim->tenPhim=$rq->namePhim;
    $phim->ngayKhoiChieu=$rq->khoiChieu;
    $phim->noiDung=$rq->noidung;
    $phim->thoiLuong=$rq->thoiLuong;
    $phim->trailer=$rq->trailer;
    $phim->poster=$rq->poster;
    $phim->idTL=$rq->idTL;
    $phim->save();
    return 1;
}
public function upLoadImg(Request $rq)
{
  /*  $validate=Validate::make($rq->file(),[
        'imgFile' =>'require|image|max:20'
    ]);
    if($validate->fails()){
        $errors=[];
        foreach ($validator->messages()->all() as $error) {
                array_push($errors, $error);
            }
             return response()->json(['errors' => $errors, 'status' => 400], 400);
         }*/
         $tenFile="";
         $file = $rq->file('file');
         if($rq->hasFile('file')){
             $file->move('uploads', $file->getClientOriginalName()); 
             $tenFile=$file->getClientOriginalName();
             return $tenFile;
         }
         else
            return "ko";
    }
    public function getListMV()
    {
        $mv=new phim;  
        $data= $mv->join('theloai','phim.idTL','=','theLoai.id')->select('phim.*','theloai.tenTL')->get()->toJson();
        return $data;
    }
    public function editPhim($id, Request $rq)
    {
       $mv = new phim;
       $mv->where('id',$id)->update(['tenPhim'=>$rq->namePhim,'ngayKhoiChieu'=>$rq->khoiChieu,'noiDung'=>$rq->noidung,
        'thoiLuong'=>$rq->thoiLuong,'trailer'=>$rq->trailer,'idTL'=>$rq->idTL,'poster'=>$rq->poster]);
       return 1;
    }
    public function deletePhim($id)
    {
        $phim=phim::findOrFail($id);
        $phim->delete();
        return 1;
    }
    /* END QL PHIM*/
    /* QL PHONG CHIEU*/
    public function getListRP()
    {
      $rp= new rapPhim;
      $data = $rp->select('*')->get()->toJson();
      return $data;
    }
    public function addPC(Request $rq)
    {
      $pc = new phongChieu;
      $pc->tenPC=$rq->tenPC;
      $pc->idRap=$rq->idRap;
      $pc->slA=$rq->slA;
      $pc->slB=$rq->slB;
      $pc->slC=$rq->slC;
      $pc->slD=$rq->slD;
      $pc->slE=$rq->slE;
      $pc->save();
      return 1;
    }
    public function getListPC()
    {
      $pc=new phongChieu;
      $data=$pc->join('rapphim','phongchieu.idRap','=','rapphim.id')->select('phongchieu.*','rapphim.tenRap')->get()->toJson();
      return $data;
    }
    public function editPC($id, Request $rq)
    {
      $pc=new phongChieu;
      $pc->where('id',$id)->update(['tenPC'=>$rq->tenPC,'idRap'=>$rq->idRap,'slA'=>$rq->slA,'slB'=>$rq->slB,'slC'=>$rq->slC,'slD'=>$rq->slD,'slE'=>$rq->slE]);
      return 1;
    }
    public function deletePC($id)
    {
      $pc=phongChieu::findOrFail($id);
      $pc->delete();
      return 1;
    }
    /* END QL PHONG CHIEU*/
    /* QL LICH CHIEU*/
    public function getListPCbyID($id)
    {
      $pc = new phongChieu;
      $data=$pc->where('idRap',$id)->select('*')->get()->toJson();
      return $data;
    }
    public function getListPhimById($id)
    {
       $phim = new phim;
       $data=$phim->where('idTL',$id)->select('*')->get()->toJson();
       return $data;
    }
    public function getListSCforLC()
    {
      $sc = new suatChieu;
       $data=$sc->select('gioChieu')->get()->toArray();
      
       return $data;
    }
    public function addLC(Request $rq)
    {
      $psc=new chiTietSC;
      $lc = new lichChieu;
      $psc->idPC=$rq->idPC;
      $psc->idSC=$rq->idSC;
      $psc->ngayCHieu=$rq->ngayC;
      $psc->save();
      $lc->idPhim=$rq->idPhim;
      $lc->idSC=$rq->idSC;
      $lc->ngayChieu=$rq->ngayC;
      $lc->save();
      return 1;

    }
    public function getListLC()
    {
       $lc= new lichChieu;
       $data=$lc->select('*')->get()->toJson();
       return $data; 
    }
    public function editLC($id, Request $rq)
    {
      $lc = new lichChieu;
      $lc->where('id',$id)->update(['idPhim'=>$rq->idPhim,'idSC'=>$rq->idSC,'ngayChieu'=>$rq->ngayChieu]);
      return 1;
    }
    /* END QK LICH CHIEU*/
    /* QL SUAT CHIEU*/
    public function addSC(Request $rq)
    {
      $sc= new suatChieu;
      $sc->gioChieu=$rq->timesc;
      $sc->save();
      return 1;
    }
    public function getListSC()
    {
      # code...
      $sc= new suatChieu;
      $data = $sc->select('*')->get()->toJson();
   
      return $data;
    }
    public function editSC($id, Request $rq)
    {
      $sc = new suatChieu;
      $sc->where('id',$id)->update(['gioChieu'=>$rq->timesc]);
      return 1;
    }
    public function deleteSC($id)
    {
      $sc = suatChieu::findOrFail($id);
      $sc->delete();
      return 1;
    }
    /* END QL SUAT CHIEU*/
    /* QL VE*/
    public function getCTSC(Request $rq)
    {
      $ctsc = new chiTietSC;
      $getCTSC = $ctsc->where('ngayCHieu',$rq->ngayC)->select('idSC','idPC');
      $sc=new suatChieu;
      $getTime=$sc->joinSub($getCTSC,'getCTSC',function($joim){
        $joim->on('suatchieu.id','getCTSC.idSC');
      })->select('suatchieu.gioChieu','getCTSC.*')->get()->toJson();
     /* $pc= new phongChieu;
      $data= $pc->joinSub($getTime,'getTime',function($join){
        $join->on('phongchieu.id','getTime.idPC');
      })->select('phongchieu.*','getTime.*')->get()->toJson();*/
      return $getTime;
    }
    public function geFrPC(Request $rq)
    {
      $ctsc=new chiTietSC;
      $getIdPC=$ctsc->where([
        ['ngayCHieu',$rq->ngayC],['idSC',$rq->idSC]
      ])->select('idPC');
      $pc = new phongChieu;
      $data= $pc->joinSub($getIdPC,'getIdPC',function($join){
        $join->on('phongchieu.id','getIdPC.idPC');
      })->select('phongchieu.*','getIdPC.*')->get()->toJson();
      return $data;
    }
    public function addVe(Request $rq)
    {
      $ve=new ve;
      $ve->idSC=$rq->idSC;
      $ve->ngayChieu=$rq->ngayChieu;
      $ve->soLuongVe=$rq->slVe;
      $ve->giaVe=$rq->giaVe;
      $ve->save();
      return 1;

    }
    public function getVe()
    {
      $ve = new ve;
      $data=$ve->select('*')->get()->toJson();
      return $data;
    }
    /* END QL VE*/
}
