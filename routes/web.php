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
/* ADMIN QL NHAN VIEN  */
Route::post('addNhanVien',['as'=>'addNhanVien','uses'=>'MyController@themNHANVIEN']);
Route::get('listNV','MyController@getList' );
Route::get('deleteNV/{id}','MyController@deleteNhanVien');
Route::post('editNV/{id}','MyController@editNV');
/* END ADMIN QL NHAN VIEN*/