<?php

namespace Database\Seeders;

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
        DB::table('products')->insert([
            [
                "name" => "LG Mobile",
                "price" => "2500",
                "category" => "Mobile",
                "description" => "Lg Mobile gives you best feature",
                "gallery" => "https://venturebeat.com/wp-content/uploads/2016/09/LG-V20-Novet.jpg?fit=3968%2C2976&strip=all"
            ],
            [
                "name" => "Asus Laptop",
                "price" => "60000",
                "category" => "Laptop",
                "description" => "laptop for gaming",
                "gallery" => "https://assets.rockpapershotgun.com/images/2018/08/Asus-TUF-Gaming.jpg"
            ]
        ]);
    }
}
