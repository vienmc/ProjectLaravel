<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('brands')->truncate();
        \Illuminate\Support\Facades\DB::table('brands')->insert([
            [
                'id' => 1,
                'brand_name' => 'Adidas',
                'brand_desc' => 'Adidas ltd AG là một nhà sản xuất dụng cụ thể thao của Đức, một thành viên của Adidas Group',
                'brand_status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'brand_name' => 'Nike',
                'brand_desc' => 'Nike, Inc. là một tập đoàn đa quốc gia của Mỹ hoạt động trong lĩnh vực thiết kế, phát triển, sản xuất, quảng bá cũng như kinh doanh các mặt hàng giày dép, quần áo',
                'brand_status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
