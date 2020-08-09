<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static $password = '123';

    public function run()

    {
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        \Illuminate\Support\Facades\DB::table('accounts')->truncate();
        \Illuminate\Support\Facades\DB::table('accounts')->insert([
            [
                'id' => 1,
                'email' => 'hoafat@gmail.com',
                'salt' => 'tyutyu',
                'password' => md5(self::$password . 'tyutyu'),
                'name' => 'hoa',
                'phone' => '0123456789',
                'role' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ], [
                'id' => 2,
                'email' => 'admin@gmail.com',
                'salt' => 'ghjghj',
                'password' => md5(self::$password . 'ghjghj'),
                'name' => 'admin',
                'phone' => '0123456789',
                'role' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ], [
                'id' => 3,
                'email' => 'admin1@gmail.com',
                'salt' => 'nhgghn',
                'password' => md5( self::$password.'nhgghn'),
                'name' => 'hoa',
                'phone' => '0123456789',
                'role' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ], [
                'id' => 4,
                'email' => 'admin2@gmail.com',
                'salt' => 'bnhbnh',
                'password' => md5(self::$password.'bnhbnh'),
                'name' => 'hoa',
                'phone' => '0123456789',
                'role' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ], [
                'id' => 5,
                'email' => 'admin3@gmail.com',
                'salt' => 'njknjk',
                'password' => md5(self::$password.'njknjk'),
                'name' => 'hoa',
                'phone' => '0123456789',
                'role' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-5)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s')
            ]

        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }


}
