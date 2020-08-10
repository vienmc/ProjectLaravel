<?php

use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        \Illuminate\Support\Facades\DB::table('order_detais')->truncate();
        \Illuminate\Support\Facades\DB::table('order_detais')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'product_name' => 'ÁO KHOÁC WIND.RDY URBAN',
                'quantity' => 1,
                'unit_price' =>2200000,

            ],[
                'order_id' => 2,
                'product_id' => 3,
                'product_name' => 'Áo thể thao Nike Wind Windner',
                'quantity' => 1,
                'unit_price' =>1998000,

            ],[
                'order_id' => 3,
                'product_id' => 6,
                'product_name' => 'Nike Sportswear Swoosh',
                'quantity' => 1,
                'unit_price' =>819000,

            ],[
                'order_id' => 4,
                'product_id' => 10,
                'product_name' => 'ÁO THUN OWN THE RUN',
                'quantity' => 1,
                'unit_price' =>2000000,

            ],[
                'order_id' => 5,
                'product_id' => 11,
                'product_name' => 'ÁO KHOÁC PHỐI CHẤT LIỆU MAY CHẦN BÔNG',
                'quantity' => 1,
                'unit_price' =>1199000,

            ],[
                'order_id' => 6,
                'product_id' => 19,
                'product_name' => 'Áo Khoác Nylon',
                'quantity' => 1,
                'unit_price' =>1999000,

            ],[
                'order_id' => 7,
                'product_id' => 25,
                'product_name' => 'Quần jean vá thẳng',
                'quantity' => 1,
                'unit_price' =>1999000,

            ],[
                'order_id' => 8,
                'product_id' => 16,
                'product_name' => 'ÁO SƠ MI PHỐI MÀU COLOR BLOCK',
                'quantity' => 1,
                'unit_price' =>1199000,
            ]


        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
