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
                'name' => 'Áo thun ngắn tay',
                'description' => 'Áo thun ngắn tay nam thiết kế theo phong cách hàn quốc',
                'status'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => 'Áo polo nam',
                'status'=>1,
                'description' => 'Thiết kế trang nhã, màu sắc ấn tượng , mang đển vẻ thanh lịch tự tiên cho người mặc',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => 'Áo thun dài tay nam',
                'status'=>1,
                'description' => 'Form Hàn Quốc mang lại phong cách trẻ trung, lịch lãm',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 4,
                'name' => 'Áo hoodie nam',
                'status'=>1,
                'description' => 'May từ chất liệu nỉ ngoại,dày dặn,mềm mịn, thoáng mát co giãn và thấm hút mồ cực kì hiệu quả',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 5,
                'name' => 'Áo len nam',
                'status'=>1,
                'description' => 'Chất len mềm mịn, ko xù, ko nhăn , co dãn 4 chiều,may dệt chắc chắn',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'name' => 'Áo thun ba lỗ Nam',
                'status'=>1,
                'description' => 'Áo được làm tù chất vải cotton 2 chiều có tính kháng khuẩn và khử mùi cao.',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 7,
                'name' => 'Áo sơ mi trơn',
                'status'=>1,
                'description' => 'Vải cotton, thoáng mát. Đặc biệt không xù lông, không nhăn',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 8,
                'name' => 'Áo sơ mi kẻ sọc',
                'status'=>1,
                'description' => ' Form Nhật - Thoáng Mát - Mềm mịn - Thoải mái-  lụa',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 9,
                'name' => 'Áo sơ mi caro ',
                'status'=>1,
                'description' => 'Họa tiết sọc caro nổi bật,chất liệu cotton mềm mại, mang lại cảm giác thoải mái khi mặc',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 10,
                'name' => 'Áo khoác dù',
                'status'=>1,
                'description' => 'Chất liệu: Sợi polyester,Dù 2 Lớp Cao Cấp- Dày Dặn.',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 11,
                'name' => 'Áo khoác nỉ',
                'status'=>1,
                'description' => 'Chất liệu Nỉ bông xuất khẩu co giãn, thoáng mát,giúp bạn thoải mái vận động trong mọi tư thế',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 12,
                'name' => 'Áo khoác kaki',
                'status'=>1,
                'description' => 'Chất liệu vải kaki thiết kế 2 lớp dầy dặn, giúp bạn giữ ấm mùa đông',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 13,
                'name' => 'Áo khoác jean',
                'status'=>1,
                'description' => 'Chất liệu vải jean dày và mềm mịn đảm bảo sẽ làm bạn thích khi khoác áo lên người',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 14,
                'name' => 'Áo khoác da',
                'status'=>1,
                'description' => 'Da Thái 3 lớp cao cấp, đường may tinh tế, đảm bảo không bong tróc',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 15,
                'name' => 'Áo khoác măng tô',
                'status'=>1,
                'description' => 'Áo làm từ chất liệu kaki dày dặn và bền bỉ,áo thích hợp cho thời tiết lạnh',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 16,
                'name' => 'Áo khoác phao',
                'status'=>1,
                'description' => 'Thiết kế phong cách Hàn Quốc, mang lại phong cách sang trọng, lịch sự, phù hợp với mọi hoàn cảnh',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 17,
                'name' => 'Đồ lót',
                'status'=>1,
                'description' => 'Chất liệu từ vải thun cotton 100%, co giản tốt, tạo sự thoáng mát khi mặc',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 18,
                'name' => 'Quần áo thể dục, GYM',
                'status'=>1,
                'description' => 'Chất liệu thoáng mát, co giãn, phù hợp hoạt động mạnh',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 19,
                'name' => 'Đồ bơi',
                'status'=>1,
                'description' => 'Chất liệu thun mềm mại, co giãn tốt, thoải mái vận động trong các hoạt động thể thao nói chung',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],[
                'id' => 20,
                'name' => 'Quần jeans',
                'status'=>1,
                'description' => 'Quần jean dài giãn cập nhật kiểu dáng và màu sắc theo xu hướng thị trường. Quần được lên form cực chuẩn',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
