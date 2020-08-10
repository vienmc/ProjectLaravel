<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(CategorySeeding::class);
        $this->call(BrandSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CheckoutSeeder::class);
        $this->call(ContactUsSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailSeeder::class);
    }
}
