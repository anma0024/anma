<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\category;
use App\Models\product;
use App\Models\sale;
use App\Models\sales_detail;
use App\Models\client;
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
        product::factory(10)->create();
        category::factory(10)->create();
        client::factory(10)->create();
        sale::factory(10)->create();
        sales_detail::factory(10)->create();
    }
}
