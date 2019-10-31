<?php

use Illuminate\Database\Seeder;

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
        	['ten_nguoi_choi'=>'Tí','mat_khau'=>'123','email'=>'ti@gmail.com','hinh_dai_dien'=>'ti.jpg','diem_cao_nhat'=>'50','credit'=>'10'],
        	['ten_nguoi_choi'=>'Sửu','mat_khau'=>'1234','email'=>'suu@gmail.com','hinh_dai_dien'=>'su.jpg','diem_cao_nhat'=>'45','credit'=>'0'],
        	['ten_nguoi_choi'=>'Dần','mat_khau'=>'12345','email'=>'dan@gmail.com','hinh_dai_dien'=>'dan.jpg','diem_cao_nhat'=>'65','credit'=>'55'],
        	['ten_nguoi_choi'=>'Mẹo','mat_khau'=>'123456','email'=>'meo@gmail.com','hinh_dai_dien'=>'meo.jpg','diem_cao_nhat'=>'100','credit'=>'250'],
        	['ten_nguoi_choi'=>'Thìn','mat_khau'=>'0123','email'=>'thin@gmail.com','hinh_dai_dien'=>'thin.jpg','diem_cao_nhat'=>'10','credit'=>'10']
        ]);
    }
}
