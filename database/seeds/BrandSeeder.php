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
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'brand_name' => 'Nike',
                'brand_desc' => 'Nike, Inc. là một tập đoàn đa quốc gia của Mỹ hoạt động trong lĩnh vực thiết kế, phát triển, sản xuất, quảng bá cũng như kinh doanh các mặt hàng giày dép, quần áo',
                'brand_status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'brand_name' => 'Zara',
                'brand_desc' => 'Zara là một thương hiệu quần áo và phụ kiện của Tây Ban Nha trụ sở tại Arteixo, Galicia. Nó là thương hiệu chính của tập đoàn Inditex,nhà bán lẻ thời trang lớn nhất thế giới',
                'brand_status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'brand_name' => 'H&M',
                'brand_desc' => 'H&M Hennes & Mauritz AB là một công ty bán lẻ thời trang đa quốc gia của Thụy Điển, nổi tiếng với mặt hàng thời trang giá rẻ dành cho nam giới, phụ nữ, thanh thiếu niên và trẻ em.',
                'brand_status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'brand_name' => 'Hermès',
                'brand_desc' => 'Thương hiệu thời trang cao cấp của Pháp - Hermes được thành lập bởi Thierry Hermès.',
                'brand_status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'brand_name' => 'Burberry',
                'brand_desc' => 'Burberry Group PLC là một thương hiệu thời trang nổi tiếng có trụ sở tại Luân Đôn, được thành lập bởi Thomas Burberry vào năm 1856.',
                'brand_status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],

        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
