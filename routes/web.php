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



/*Route::get('/home', 'indexController@loadHome')->name('home');*/
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
Route::post('logInAD',['as' =>'logInAD','uses'=>'MyController@login_Ad']);
Auth::routes();
Route::get('admin', function() {
    if(Session::has('admin') && Session::get('loginAD')==true){
        return view('admin/adIndex');
    }
    else
        return view('logInAdmin');
})->name('admin');
Route::get('logOutAd', function() {
     Request::session()->forget('loginAD');
     Request::session()->forget('admin');
     Request::session()->forget('quyen');
     Request::session()->forget('toastAD');
    return redirect()->route('admin');
});
Route::post('addNhanVien',['as'=>'addNhanVien','uses'=>'MyController@themNHANVIEN']);
/* QL NHAN VIEN  */
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
/* QL VE*/
Route::post('getCTSC','MyController@getCTSC');
Route::post('getFrPC','MyController@geFrPC');
Route::post('addVe','MyController@addVe');
Route::get('getVe','MyController@getVe');
/* END QL VE*/
/* TRANG CHU*/
Route::get('home','indexController@loadHome')->name('home');
Route::post('getLicHchieu','indexController@getLicHchieu');
Route::post('getSoPhong/{id}','indexController@getSoPhong');
Route::post('getVe','indexController@getVeForHome');
Route::post('bookingVe', 'indexController@bookingVe');
Route::post('getDataBk','indexController@getDataBk');
/*END TRANG CHU*/
/* LOGIN KH*/
Route::get('logInKh', function() {
     return view('logInKH');
})->name('dangnhap');
Route::post('logInKH',['as' =>'logInKH','uses'=>'indexController@login_KH']);
Route::get('logOut', function() {
    Request::session()->forget('login');
    Request::session()->forget('khachhang');
    Request::session()->forget('khachhang');
    return redirect()->route('home');
});
/* END LOGIN KH*/