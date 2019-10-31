<?php

use Illuminate\Database\Seeder;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('linh_vuc')->insert([
        	['ten_linh_vuc'=>'Toán Học'],
        	['ten_linh_vuc'=>'Lịch Sử'],
        	['ten_linh_vuc'=>'Địa Lý'],
        	['ten_linh_vuc'=>'Thể Thao'],
        	['ten_linh_vuc'=>'Văn Học']
        ]);
    }
}
