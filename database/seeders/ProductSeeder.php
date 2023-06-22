<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("products")->insert([
            "name" => "LG Mobile",
            "price" => "200",
            "description" => "Latest 5G smart phone.",
            "category" => "Electronics",
            "gallery" => "short_imge_address"
        ]);
    }
}
