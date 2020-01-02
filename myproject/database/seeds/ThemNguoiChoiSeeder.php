<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nguoi_choi')->insert([
        	['ten_dang_nhap'=>'minhcuong','mat_khau'=>Hash::make('123'),'email'=>'cuong@gmail.com','hinh_dai_dien'=>'ti.jpg','diem_cao_nhat'=>'50','credit'=>'10']
        ]);
    }
}
