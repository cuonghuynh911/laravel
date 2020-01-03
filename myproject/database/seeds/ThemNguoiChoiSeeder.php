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
            ['ten_dang_nhap'=>'cuong','mat_khau'=>Hash::make('hqc123'),'email'=>'cg@gmail.com','hinh_dai_dien'=>'cg.jpg','diem_cao_nhat'=>'50','credit'=>'10'],
            ['ten_dang_nhap'=>'thien','mat_khau'=>Hash::make('tqt123'),'email'=>'thien@gmail.com','hinh_dai_dien'=>'thien.jpg','diem_cao_nhat'=>'100','credit'=>'50'],
            ['ten_dang_nhap'=>'thang','mat_khau'=>Hash::make('lht123'),'email'=>'thang@gmail.com','hinh_dai_dien'=>'thang.jpg','diem_cao_nhat'=>'70','credit'=>'250']
        ]);
    }
}
