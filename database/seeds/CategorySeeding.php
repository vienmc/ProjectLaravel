<?php

use Illuminate\Database\Seeder;

class CategorySeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Áo Khoác',
                'description' => 'Áo mặc bên ngoài, được sử dụng bởi cả nam và nữ. Tác dụng chính của loại trang phục này là để giữ ấm cơ thể.',
                'status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => 'Đầm',
                'status'=>1,
                'description' => 'Mặc che thân từ thắt lưng trở xuống, đa số phụ nữ đều mặc.',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-6)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => 'Đồ Bơi Nữ',
                'status'=>1,
                'description' => 'Được thiết kế để mặc khi bơi,dành cho nữ.',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s')
            ],[
                'id' => 4,
                'name' => 'Đồ Bơi Nam',
                'status'=>1,
                'description' => 'Được thiết kế để mặc khi bơi, Dành cho nam.',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s')
            ],[
                'id' => 5,
                'name' => 'Áo Sơ Mi Nữ',
                'status'=>1,
                'description' => 'Loại hàng may mặc bao bọc lấy thân mình và hai cánh tay của cơ thể, dành cho nữ',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'name' => 'Áo Sơ Mi Nam',
                'status'=>1,
                'description' => 'Loại hàng may mặc bao bọc lấy thân mình và hai cánh tay của cơ thể, dành cho Nam',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s')
            ],[
                'id' => 7,
                'name' => 'Quần Jean Nữ',
                'status'=>1,
                'description' => '(Quần bò) Loại quần phổ biến nhất thế giới, xuất xứ từ phương Tây, Dành cho nữ',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s')
            ],[
                'id' => 8,
                'name' => 'Quần Jean Nam',
                'status'=>1,
                'description' => '(Quần bò) Loại quần phổ biến nhất thế giới, xuất xứ từ phương Tây, Dành cho nam',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-0)->format('Y-m-d H:i:s')
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
