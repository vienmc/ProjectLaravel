<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'product_name' => 'ÁO KHOÁC WIND.RDY URBAN',
                'product_desc' => 'Chất liệu ripstop nhẹ chống nước giúp bạn khô ráo trong cơn mưa phùn. Dáng áo thoải mái giúp bạn dễ phối đồ nhiều lớp, hiện đại. Có thể gấp gọn mang đến sự tiện lợi khi di chuyển.',
                'product_price'=>2200000,
                'thumbnail'=>'Ao_khoac_WIND.RDY_Urban_Mau_trang_GE2082_p8qnts,Ao_khoac_WIND.RDY_Urban_Mau_trang_GE2082_22_model_jqob5h,Ao_khoac_WIND.RDY_Urban_Mau_trang_GE2082_23_hover_model_i6ztnh',
                'product_status'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-33)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'product_name' => 'ÁO KHOÁC MÀU CỜ PRIDE LỆCH TÂM',
                'product_desc' => 'Phong cách thể thao với màu cờ cầu vồng thu hút được sự quan tâm lớn nhất của thế giới đến cộng đồng LGBTQ+',
                'product_price'=>2000000,
                'thumbnail'=>'Ao_khoac_mau_co_Pride_lech_tam_Nhieu_mau_GD0955_gh5fi2,Ao_khoac_mau_co_Pride_lech_tam_Nhieu_mau_GD0955_22_model_ivoudw,Ao_khoac_mau_co_Pride_lech_tam_Nhieu_mau_GD0955_23_hover_model_zlg8u3',
                'product_status'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-53)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'product_name' => 'Áo thể thao Nike Wind Windner',
                'product_desc' => 'Lấy cảm hứng từ một chiếc áo khoác cổ điển, Nike Sportswear Windrunner có cấu trúc, vải dệt nhăn và chặn màu đậm cho phong cách thập niên 90.',
                'product_price'=>1998000,
                'thumbnail'=>'sportswear-heritage-windrunner-woven-jacket-6qtSTg_wtw2to,sportswear-heritage-windrunner-woven-jacket-6qtSTg_1_y1f3bu,sportswear-heritage-windrunner-woven-jacket-6qtSTg_2_ufzkkl',
                'product_status'=>1,
                'category_id'=>1,
                'brand_id'=>2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-33)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 4,
                'product_name' => 'Korea Essential',
                'product_desc' => 'Trang phục thiết yếu của Hàn Quốc, được làm từ 75% cotton hữu cơ',
                'product_price'=>1388000,
                'thumbnail'=>'korea-essential-dress-t7ChHS_qpwzss,korea-essential-dress-t7ChHS_1_kzmsmv,korea-essential-dress-t7ChHS_2_ti9crk',
                'product_status'=>1,
                'category_id'=>2,
                'brand_id'=>2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-33)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 5,
                'product_name' => 'Nike Sportswear',
                'product_desc' => 'Áo thun thể thao Nike xếp chồng đồ họa trên vải cotton mềm mại cho vẻ ngoài nổi bật thoải mái.',
                'product_price'=>919000,
                'thumbnail'=>'sportswear-t-shirt-pbs68R_cxgqvw,sportswear-t-shirt-pbs68R_1_rdkn1i,sportswear-t-shirt-pbs68R_2_livp6x',
                'product_status'=>1,
                'category_id'=>6,
                'brand_id'=>2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-33)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'product_name' => 'Nike Sportswear Swoosh',
                'product_desc' => 'Áo thun thể thao Nike cảm giác mềm mại, thoải mái cho trang phục hàng ngày. Một sự pha trộn của các chi tiết in và thêu thể hiện logo biểu tượng của chúng tôi.',
                'product_price'=>819000,
                'thumbnail'=>'sportswear-swoosh-t-shirt-lc4tKT_wbxdhp,sportswear-swoosh-t-shirt-lc4tKT_1_dkanca,sportswear-swoosh-t-shirt-lc4tKT_2_tyfuol',
                'product_status'=>1,
                'category_id'=>5,
                'brand_id'=>2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-33)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 7,
                'product_name' => 'Nike ISPA',
                'product_desc' => 'Sử dụng những cải tiến mới nhất về dự án ISPA của Nike, đó là một ngẫu hứng',
                'product_price'=>2938000,
                'thumbnail'=>'ispa-trousers-x29V2V_dfifz5,ispa-trousers-x29V2V_1_weefov',
                'product_status'=>1,
                'category_id'=>7,
                'brand_id'=>2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-33)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 8,
                'product_name' => 'TULLE DRESS',
                'product_desc' => 'Phong cách thể thao thời trang chất liệu thoáng mát bằng cotton',
                'product_price'=>1500000,
                'thumbnail'=>'Tulle_Dress_Mau_trang_GK3662_21_model_yx3jsn,Tulle_Dress_Mau_trang_GK3662_22_model_jlkwrz,Tulle_Dress_Mau_trang_GK3662_23_hover_model_utwbct',
                'product_status'=>1,
                'category_id'=>2,
                'brand_id'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-33)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 9,
                'product_name' => 'ÁO THUN BADGE OF SPORT',
                'product_desc' => 'Chiếc áo thun này mang Huy hiệu thể thao adidas với kiểu dáng như ngọn núi tượng trưng cho các thử thách mà vận động viên vượt qua để vươn tới đỉnh cao mới',
                'product_price'=>700000,
                'thumbnail'=>'Ao_thun_Badge_of_Sport_Logo_Mau_trang_GC8182_e1neux,Ao_thun_Badge_of_Sport_Logo_Mau_trang_GC8182_21_model_t2dekf,Ao_thun_Badge_of_Sport_Logo_Mau_trang_GC8182_22_model_x8njcz',
                'product_status'=>1,
                'category_id'=>5,
                'brand_id'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-20)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 10,
                'product_name' => 'ÁO THUN OWN THE RUN',
                'product_desc' => 'ÁO THUN THOẢI MÁI DÀNH CHO MỌI CỰ LY CHẠY BỘ Với Công Nghệ Thấm Hút',
                'product_price'=>2000000,
                'thumbnail'=>'Ao_khoac_mau_co_Pride_lech_tam_Nhieu_mau_GD0955_gh5fi2,Ao_thun_Own_the_Run_Mau_hong_FT1430_21_model_bpbphy,Ao_thun_Own_the_Run_Mau_hong_FT1430_22_model_mouegh',
                'product_status'=>1,
                'category_id'=>6,
                'brand_id'=>1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 11,
                'product_name' => 'ÁO KHOÁC PHỐI CHẤT LIỆU MAY CHẦN BÔNG',
                'product_desc' => 'Áo khoác cổ cao, dài tay. Túi trước ẩn ở đường may. Bo viền bằng len gân. Cài bằng khóa kéo ở phía trước.',
                'product_price'=>1199000,
                'thumbnail'=>'8574400757_1_1_1_dnzmnu,8574400757_2_1_1_rpivcm',
                'product_status'=>1,
                'category_id'=>1,
                'brand_id'=>3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 12,
                'product_name' => 'BELTED SHIRT DRESS',
                'product_desc' => 'Váy có cổ có tay áo rơi xuống dưới khuỷu tay. Thắt lưng có khóa lót trong cùng một loại vải. Nút buộc ở mặt trước được che giấu bởi một cây vợt',
                'product_price'=>1999000,
                'thumbnail'=>'7878699250_6_1_1_ugbkus,7878699250_6_2_1_jsptf1',
                'product_status'=>1,
                'category_id'=>2,
                'brand_id'=>3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 13,
                'product_name' => 'Đồ Bơi Bikini',
                'product_desc' => 'Đồ Bơi Bikini Classic',
                'product_price'=>399000,
                'thumbnail'=>'4354004055_1_1_1_tspgzh,4354004055_2_1_1_es5m8c,4354004055_2_2_1_nxcnog',
                'product_status'=>1,
                'category_id'=>3,
                'brand_id'=>3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 14,
                'product_name' => 'QUẦN SHORT BƠI HỌA TIẾT LÁ CÂY',
                'product_desc' => 'Loại sợi này được sản xuất từ phế liệu may mặc thu hồi được trong quá trình sản xuất các sản phẩm khác từ polyamide',
                'product_price'=>799000,
                'thumbnail'=>'8574426500_1_1_1_liuxlq,8574426500_2_1_1_frraek',
                'product_status'=>1,
                'category_id'=>4,
                'brand_id'=>3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 15,
                'product_name' => 'ÁO SƠ MI LINEN DÁNG CROP TOP',
                'product_desc' => 'Sợi linen này có nguồn gốc từ các cây lanh được gieo trồng theo các phương pháp tự nhiên, không cần hệ thống tưới tiêu nhân tạo',
                'product_price'=>799000,
                'thumbnail'=>'2361500701_6_2_1_srzbpt,2361500701_6_1_1_nd8ngd',
                'product_status'=>1,
                'category_id'=>5,
                'brand_id'=>3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 16,
                'product_name' => 'ÁO SƠ MI PHỐI MÀU COLOR BLOCK',
                'product_desc' => 'Áo sơ mi dáng suông, cổ polo, cộc tay. Gấu bất đối xứng, xẻ hai bên. Cài bằng khóa kéo ở phía trước.',
                'product_price'=>1199000,
                'thumbnail'=>'7545448401_6_1_1_dhrvv7,7545448401_6_2_1_lnp4ns',
                'product_status'=>1,
                'category_id'=>6,
                'brand_id'=>3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 17,
                'product_name' => 'QUẦN JEANS Z1975 ỐNG RỘNG CẮT CÚP',
                'product_desc' => 'Quần jeans cạp cao, ống rộng. Có một túi may viền phía trước và hai túi vuông đáp phía sau. Cài phía trước bằng khóa kéo và khuy kim loại.',
                'product_price'=>999000,
                'thumbnail'=>'6147164172_6_2_1_j2cjyv,6147164172_6_1_1_hr7b2v',
                'product_status'=>1,
                'category_id'=>7,
                'brand_id'=>3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 18,
                'product_name' => 'QUẦN JEANS SLIM FIT',
                'product_desc' => 'Tối thiểu 50% là bông hữu cơ. Cây bông được gieo trồng bằng phương pháp sử dụng phân bón và thuốc trừ sâu tự nhiên.',
                'product_price'=>1599000,
                'thumbnail'=>'7215425406_1_1_1_ddbtyd,7215425406_2_1_1_vzf3ew',
                'product_status'=>1,
                'category_id'=>8,
                'brand_id'=>3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'product_name' => 'Áo Khoác Nylon',
                'product_desc' => 'Áo khoác thể thao, có mũ trùm đầu bằng nylon. Cổ áo cao, một khóa kéo xuống phía trước',
                'product_price'=>1999000,
                'thumbnail'=>'3f5bcf466d9cddcfa3452c075b99d18a28d182f7_iikez2,f029e6004fd0aa79bfa715faa2d1cbcee0dabffc_zm655a,3b936cd36fcd4afbe4a53d444e26f0dfdfe0560f_v2oq1w',
                'product_status'=>1,
                'category_id'=>1,
                'brand_id'=>4,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'product_name' => 'Váy Sleeveless',
                'product_desc' => 'Váy không tay, dài đến bắp chân trong một kiểu dệt thoáng mát với dây đeo vai hẹp, có thể điều chỉnh và khóa kéo được che giấu ở một bên',
                'product_price'=>1999000,
                'thumbnail'=>'ea1dbf142174e095b259589cf5e8b65371fc5fca_uiqjsp,a3d131ce8da68d8450c09da9e139d8efb77cfb9b_ontopx,84c1e5b13218081d6684bf6bbb38cb6869696e2d_h76puz',
                'product_status'=>1,
                'category_id'=>2,
                'brand_id'=>4,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 21,
                'product_name' => 'Bộ bikini',
                'product_desc' => 'Bộ bikini băng đô quây, quây với viền trang trí ở gấu áo và ly có chèn có thể tháo rời tạo hình cho bức tượng bán thân và hỗ trợ tốt.',
                'product_price'=>1199000,
                'thumbnail'=>'525f0df40d75bcc12998fd208ef55e7650627f49_fy1fnj,38f73539aa2d1dd83cf3d12f7b6487a6253bcb65_nh3spl,fe495f598bbaf4e56657b70fd9c9223b0a1aefc0_quyok3',
                'product_status'=>1,
                'category_id'=>3,
                'brand_id'=>4,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-16)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 22,
                'product_name' => 'Quần bơi họa tiết',
                'product_desc' => 'Quần short bơi trong một kiểu dệt có hoa văn làm từ polyester tái chế với dây thun, dây rút, túi bên và túi sau có móc giấu và dây buộc vòng.',
                'product_price'=>999000,
                'thumbnail'=>'1c15d91bfa57ceda0f804d3bd122f8836f731095_tlpmux,6066764484083500d46afe0e5d4d6c7d92c510d9_tlumyp,d0e27b3b2ce9a1d82037aaf57ba0baca4ab2555d_lxautf',
                'product_status'=>1,
                'category_id'=>4,
                'brand_id'=>4,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-16)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 23,
                'product_name' => 'Áo sơ mi tay phồng',
                'product_desc' => 'Áo trong một chiếc áo dệt bằng vải cotton thoáng mát với đường viền cổ tròn, nút mở và giấu ở phía sau cổ và tay áo phồng ngắn có còng hẹp, có nút.',
                'product_price'=>899000,
                'thumbnail'=>'fb3e30829288e0b2720a914d5fc5228e0a8d131a_mt5hwl,eeb525121586a280f5ea656677fb360d3a168fdd_oh6kq1,6abc9db8d1d3e9051cfd48fa3e8c259d1e3fc14a_ikwywh',
                'product_status'=>1,
                'category_id'=>5,
                'brand_id'=>4,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 24,
                'product_name' => 'Áo sơ mi họa tiết',
                'product_desc' => 'Áo sơ mi ngắn tay trong một tấm vải viscose dệt có cổ áo khu nghỉ mát, mặt trước kiểu Pháp và viền cắt thẳng với các khe ở hai bên.',
                'product_price'=>799000,
                'thumbnail'=>'b7068884d13fe66a43feb06364ff0f25a13c5420_s9as0c,2e817bee7fd13999c90eb41015797168815aaedf_qklkdg,a450586d5d416dae0f1a2d633443763731c07ebc_cgnivf',
                'product_status'=>1,
                'category_id'=>6,
                'brand_id'=>4,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-15)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 25,
                'product_name' => 'Quần jean vá thẳng',
                'product_desc' => 'Quần jean trong vải cotton cotton có thắt lưng cao, khóa kéo và nút và túi trước và sau.',
                'product_price'=>1399000,
                'thumbnail'=>'df4cc7038f40a39901087e430f72303d62ec8a7d_bitae1,e0785f281876a40394631018d45c77f7c81a6001_mkzpj5,60f0525a50333f0a06c851c73ac75681d8223ee6_wjnvet',
                'product_status'=>1,
                'category_id'=>7,
                'brand_id'=>4,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 26,
                'product_name' => 'Quần jean chạy bộ',
                'product_desc' => 'Quần chạy bộ 5 túi có độ co giãn, supersoft denim với thường xuyên, có gân, thắt lưng dây rút, bay giả và chân thon với phần hông có gân.',
                'product_price'=>1599000,
                'thumbnail'=>'a4c0201eb15a261da3f8636fc258041e962b35f1_n3oekt,554c520d1a5fe023b232a18b739cfe84538916cb_sxxbwu,39f055ac37829940cf8cad1d68571e04975da6c9_u3snhf',
                'product_status'=>1,
                'category_id'=>8,
                'brand_id'=>4,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 27,
                'product_name' => 'Áo khoác nhẹ',
                'product_desc' => 'Áo khoác có thể đảo ngược trong vải bạt chống thấm nước Vichy với cổ áo có rãnh, 3 nút, 3 túi trước và không có khe sau (59% polyamide và 41% polyethylen)',
                'product_price'=>39990000,
                'thumbnail'=>'24-light-reversible-jacket--034220HF1T-worn-2-0-0-1100-1100_b_cu6tpa,24-light-reversible-jacket--034220HF1T-worn-3-0-0-1100-1100_b_ycobnd,24-light-reversible-jacket--034220HF1T-worn-6-0-0-1100-1100_b_tdaym5',
                'product_status'=>1,
                'category_id'=>1,
                'brand_id'=>5,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 28,
                'product_name' => 'Áo khoác dài di sản Chelsea',
                'product_desc' => 'Áo khoác mỏng nhất của chúng tôi, với vai hẹp và eo thon. Phong cách lấy cảm hứng từ kho lưu trữ được trang bị được dệt bằng gabardine đặc trưng của chúng tôi với lớp lót kiểm tra Vintage. ',
                'product_price'=>15000000,
                'thumbnail'=>'4876498D-AC95-44F8-834B-CBBCE212EBE7_saz2de,2D498F5F-801D-4535-9597-D50F896E514F_bdvl85,FF7DB3AA-5B42-4892-BFBE-DB7E4CB1339A_aiigmk',
                'product_status'=>1,
                'category_id'=>1,
                'brand_id'=>6,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 29,
                'product_name' => 'Đầm lụa Satin',
                'product_desc' => 'Một chiếc váy trơn bằng lụa satin dệt của Ý, nổi bật với hình in Monogram đồ họa của chúng tôi. Thiết kế được hoàn thành với một bên chia.',
                'product_price'=>9999000,
                'thumbnail'=>'B4C3AD08-9B42-4F7B-B264-E3EC7B115EC0_s37san,4209D013-1E87-4132-BC49-791722CD995A_lgivkb,4BC0FF15-D4E3-4E67-84B1-03F8F183995E_lfh9fr',
                'product_status'=>1,
                'category_id'=>2,
                'brand_id'=>6,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-4)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 30,
                'product_name' => 'Áo tắm Monogram',
                'product_desc' => 'Một bộ đồ bơi lưng thấp có họa tiết in họa tiết Monogram.',
                'product_price'=>8399000,
                'thumbnail'=>'48FEAECC-D2AD-4CD4-8CE7-693B56FDE651_v2kr7q,8F7EACAE-55F5-461A-876E-1306FB142F03_bgjrnl,E446048D-E52D-4CA6-AD33-543FEE3DD4DE_k9lk9v',
                'product_status'=>1,
                'category_id'=>3,
                'brand_id'=>6,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 31,
                'product_name' => 'Quần Bơi Monogram Motif',
                'product_desc' => 'Quần bơi rút cổ điển được in tinh tế với một đồ họa Thomas Burberry Monogram.',
                'product_price'=>899000,
                'thumbnail'=>'14DE73CE-D919-4F6F-910D-69A494773C44_p8ztvz,884D529F-E4C3-4D59-9EE6-32965B9C888F_bwqiv7,AA061C8C-4B8D-44B2-AAA4-21B496CBEEE1_ufhdkt',
                'product_status'=>1,
                'category_id'=>4,
                'brand_id'=>6,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 32,
                'product_name' => 'Áo cotton ngắn tay in họa tiết Monogram',
                'product_desc' => 'Một chiếc áo sơ mi ngắn tay bằng vải poplin cotton, hoạt hình với họa tiết Monogram in họa tiết và cổ áo sọc.',
                'product_price'=>299000,
                'thumbnail'=>'EED2E66E-F273-4874-9E61-5608FB874B2B_epq3zi,9DFDDF08-E68E-4523-8652-09EC1C58D7DC_h5c94i,1F783BD6-492F-4B84-A095-B0744E051B29_u2mwz4',
                'product_status'=>1,
                'category_id'=>5,
                'brand_id'=>6,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 33,
                'product_name' => 'Áo sơ mi cotton ngắn tay',
                'product_desc' => 'Một chiếc áo sơ mi nửa khóa kéo bằng vải poplin cotton co giãn, được gắn bảng kiểm tra chữ ký của chúng tôi theo tỷ lệ tương phản.',
                'product_price'=>399000,
                'thumbnail'=>'e8e66c35bf72331b66af565efb21c84c59ef67d4_lbodjd,59d9433943adbd25cc4072ab2b512bc0dba52282_fidibs,5c98eb0f6df04691bd248b7bc9484016d7fb9d38_lpqvm8',
                'product_status'=>1,
                'category_id'=>6,
                'brand_id'=>6,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 34,
                'product_name' => 'Quần jean denim Nhật Bản',
                'product_desc' => 'Quần jeans ôm vừa vặn được cắt từ vải denim Nhật Bản được dệt với một chút co giãn.',
                'product_price'=>5900000,
                'thumbnail'=>'15feb2cd57fdf160a90bf0bbd7f10f3c11e76952_jr8sbu,d8e05f99591d9016d9176b86b6c8ac095f73d930_pmd3b7,f4bfdf2365c8d1ce52c83641741fd75a65050a7b_kid1xb',
                'product_status'=>1,
                'category_id'=>7,
                'brand_id'=>6,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ],[
                'id' => 35,
                'product_name' => 'Quần jean Logo Chi tiết',
                'product_desc' => 'Một chiếc quần jeans tăng thường xuyên được cắt cho phù hợp với quần denim đã giặt. Thiết kế do Ý sản xuất được làm nổi bật với logo của chúng tôi.',
                'product_price'=>6199000,
                'thumbnail'=>'15BA67A4-01EB-4B4C-997B-6B51336E7A0E_mi5or4,69C51DD6-5DD1-40FC-8EA7-4916AD4BB815_b5p974',
                'product_status'=>1,
                'category_id'=>8,
                'brand_id'=>6,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ]


        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
