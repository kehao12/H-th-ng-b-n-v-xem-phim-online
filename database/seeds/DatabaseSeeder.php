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
       $this->call(nhanVien::class);
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
            ['tenTK'=>'Admin12','matKhau'=>bcrypt('admin')]
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
