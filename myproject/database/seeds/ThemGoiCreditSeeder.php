<?php

use Illuminate\Database\Seeder;

class ThemGoiCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('goi_credit')->insert([
        	['ten_goi'=>'Gói 20K','credit'=>'20','so_tien'=>'20000'],
        	['ten_goi'=>'Gói 50K','credit'=>'50','so_tien'=>'50000'],
        	['ten_goi'=>'Gói 100K','credit'=>'100','so_tien'=>'100000'],
        	['ten_goi'=>'Gói 200K','credit'=>'200','so_tien'=>'200000'],
        	['ten_goi'=>'Gói 500K','credit'=>'500','so_tien'=>'500000']
        ]);
    }
}
