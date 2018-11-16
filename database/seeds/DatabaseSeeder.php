<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       $this->call(MySeed::class);
    }
}
/**
 *  seed custom
 */
class MySeed extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
            ['tenTK'=>'Admin3','password'=>bcrypt('ad3')]
        /*  ['tenTK'=>'Admin1','matKhau'=>bcrypt('ad')],
            ['tenTK'=>'Admin2','matKhau'=>bcrypt('ad')]*/
        ]);
    }
}
class nhanVien extends Seeder
{
	
	public function run()
	{
		DB::table('nhanvien')->insert([
			['ten'=>str_random(10),'gioitinh'=>'Nam','diachi'=>str_random(10),'tenTaiKhoan'=>'Admin1']
		/*	['tenTK'=>'Admin1','matKhau'=>bcrypt('ad')],
			['tenTK'=>'Admin2','matKhau'=>bcrypt('ad')]*/
		]);
	}
}
class rapPhim extends Seeder
{
    public function run()
    {
        DB::table('rapphim')->insert([
            ['tenRap'=>str_random(10),'diaChi'=>str_random(12)]
        ]);
    }
}
class phongChieu extends Seeder
{
    public function run()
    {
        DB::table('phongchieu')->insert([
            ['soLuongGhe'=>20,'idRap'=>3]
        ]);
    }
}
class khachhang extends Seeder
{
    public function run()
    {
        DB::table('khachhang')->insert([
            ['tenKH'=>'khachhang1','diachi'=>str_random(10),'soDienThoai'=>'09090909','email'=>'abcdef@gmail.com','tenTaiKhoan'=>'kh1']
        ]);
    }
}
class taiKhoanKH extends Seeder
{
    
    public function run()
    {
        DB::table('taikhoankh')->insert([
            ['tenTKKH'=>'kh1','matKhaukh'=>bcrypt('kh')]
        /*  ['tenTK'=>'Admin1','matKhau'=>bcrypt('ad')],
            ['tenTK'=>'Admin2','matKhau'=>bcrypt('ad')]*/
        ]);
    }
}