<?php

use Illuminate\Database\Seeder;
use App\LinhVuc;
class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listLinhVuc=[
        	['ten_linh_vuc' => 'Thể Thao'],
        	['ten_linh_vuc' => 'Lịch Sử'],
        	['ten_linh_vuc' => 'Âm nhạc - Phim'],
        	['ten_linh_vuc' => 'Địa lý'],
        	['ten_linh_vuc' => 'Văn học'],
        	['ten_linh_vuc' => 'Y học'],
        	['ten_linh_vuc' => 'Văn hóa - Sự kiện'],
        	['ten_linh_vuc' => 'Khoa học tự nhiên']  
        ];

        
    }
}
