<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', function() {
    return view('logInAdmin');
});
Route::post('logInAD',['as' =>'logInAD','uses'=>'MyController@login_Ad']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('lienket', function() {
    $data=App\nhanVien::find(2)->taiKhoan->toArray();
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
});
 
Route::get('lienket1', function() {
    $data=App\phongChieu::find(13)->rapPhim->toArray();
    echo "<pre>";
    var_dump($data);   
    echo "</pre>";
});
 
Route::get('phongchieu',function()
{
    $kq=App\phongChieu::find(2)->rapPhim->toArray();
    echo "<pre>";
    var_dump($kq);
    echo "</pre>";
});
/* ADMIN  */
/* QL NHAN VIEN  */
Route::post('addNhanVien',['as'=>'addNhanVien','uses'=>'MyController@themNHANVIEN']);
Route::get('listNV','MyController@getList' );
Route::get('deleteNV/{id}','MyController@deleteNhanVien');
Route::post('editNV/{id}','MyController@editNV');
/* END ADMIN QL NHAN VIEN*/

/*  QL RAP PHIM*/
Route::post('addRapPhim','MyController@themRapPhim');
Route::get('listRap','MyController@getListRap');
Route::post('editrapChild/{id}','MyController@editRap');
Route::post('deleteRap/{id}','MyController@deleteRap');
/* END RAP PHIM*/
/* QL THE LOAI*/
Route::post('addTL', 'MyController@addTheLoai');
Route::get('listTL','MyController@getListTL');
Route::post('editTL/{id}','MyController@editTL');
Route::post('deleteTL/{id}', 'MyController@deleteTL');
/* END QL THE LOAI*/
/* ql PHIM*/
Route::post('addPhim','MyController@addPhim');
Route::post('upImg','MyController@upImg');
 

Route::post('upLoadImg','MyController@uploadImg');
Route::get('listMV','MyController@getListMV');
Route::post('editPhim/{id}','MyController@editPhim');
Route::post('deletePhim/{id}','MyController@deletePhim');

/* END QL PHIM*/
/* QL PHONG CHIEU*/
Route::get('listRP','MyController@getListRP');
Route::get('listPC','MyController@getListPC');
Route::post('addPC','MyController@addPC');
Route::post('editPC/{id}','MyController@editPC');
Route::post('deletePC/{id}','MyController@deletePC');
/* END QL PHONG CHIEU*/
 
/* END QL PHIM*/
 
/*Dang Nhap KH*/
Route::get('user',function(){
    return view('logInKH');
});
Route::post('logInKH',['as' =>'logInKH','uses'=>'MyController@login_KH']);
/*END DN KH*/
 
/* QL LICH CHIEU*/
Route::post('listPCbyID/{id}','MyController@getListPCbyID');
Route::post('listPhimById/{id}','MyController@getListPhimById');
Route::get('getListSCforLC','MyController@getListSCforLC');
Route::post('addLC', 'MyController@addLC');
Route::get('getListLC','MyController@getListLC');
Route::post('editLC/{id}','MyController@editLC');
/* QL END LICH CHIEU*/
/* QL SUAT CHIEU*/
Route::post('addSC', 'MyController@addSC');
Route::get('getListSC','MyController@getListSC');
Route::post('editsc/{id}','MyController@editSC');
Route::post('deletesc/{id}','MyController@deleteSC');
/* END QL SUAT CHIEU*/
 
Route::get('dangky','PageController@getdangky');
Route::post('dangky',['as' =>'dangky','uses'=>'PageController@postdangky']);

Route::get('chitietphim/{id}',['as'=>'chitietphim','uses'=>'PageController@getChiTiet']);
Route::get('trangchu',['as'=>'trangchu','uses'=>'PageController@getTrangChu']);

Route::get('thongtinkh/{id}',['as'=>'thongtinkh','uses'=>'PageController@getThongTinKH']);
Route::get('thaythongtin/{id}',['as'=>'thaythongtin','uses'=>'PageController@getThayThongTin']);
Route::post('thaythongtin/{id}',['as'=>'thongtinkh','uses'=>'PageController@postThongTinKH']);
 
