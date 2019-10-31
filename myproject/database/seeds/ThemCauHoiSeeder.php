<?php

use Illuminate\Database\Seeder;

class ThemCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cau_hoi')->insert([
        	['noi_dung'=>'1*0= ???','linh_vuc_id'=>'1','phuong_an_a'=>'1','phuong_an_b'=>'0','phuong_an_c'=>'10','phuong_an_d'=>'Tất cả đều sai','dap_an'=>'B'],
        	['noi_dung'=>'Việt Nam thuộc châu lục nào? ','linh_vuc_id'=>'3','phuong_an_a'=>'Châu Á','phuong_an_b'=>'Châu Âu','phuong_an_c'=>'Châu Phi','phuong_an_d'=>'Châu Đại Dương','dap_an'=>'A'],
        	['noi_dung'=>'Nước Việt Nam hoàn toàn thống nhất năm nào? ','linh_vuc_id'=>'2','phuong_an_a'=>'1973','phuong_an_b'=>'1974','phuong_an_c'=>'1975','phuong_an_d'=>'1976','dap_an'=>'C'],
        	['noi_dung'=>'Bà Huyện Thanh Quan là bà chúa thơ Nôm, Vậy ông chúa thơ Nôm là ai? ','linh_vuc_id'=>'5','phuong_an_a'=>'Nguyễn Du','phuong_an_b'=>'Nguyễn Trãi','phuong_an_c'=>'Nguyễn Bĩnh Khiêm','phuong_an_d'=>'Tất cả đều sai','dap_an'=>'D'],
        	['noi_dung'=>'Một con chim + ba con chim + tỷ tỷ con chim, hỏi có bao nhiêu con? ','linh_vuc_id'=>'1','phuong_an_a'=>'1 tỷ lẻ 4','phuong_an_b'=>'0','phuong_an_c'=>'4','phuong_an_d'=>'3','dap_an'=>'D'],
        	['noi_dung'=>'Đội tuyển bóng đá nào vô địch Euro mùa gần nhất? ','linh_vuc_id'=>'4','phuong_an_a'=>'Bồ Đào Nha','phuong_an_b'=>'Đức','phuong_an_c'=>'Pháp','phuong_an_d'=>'Việt Nam','dap_an'=>'A'],
        	['noi_dung'=>'Môn gì càng thắng càng thua? ','linh_vuc_id'=>'4','phuong_an_a'=>'Đá bóng','phuong_an_b'=>'Thể thao điện tử','phuong_an_c'=>'Đua xe','phuong_an_d'=>'Chơi cờ','dap_an'=>'C'],
        	['noi_dung'=>'Đâu là đỉnh núi cao nhất? ','linh_vuc_id'=>'3','phuong_an_a'=>'Fanxipang','phuong_an_b'=>'Everest','phuong_an_c'=>'LangBiAng','phuong_an_d'=>'Phú Sĩ','dap_an'=>'B']
        	
        ]);
    }
}
