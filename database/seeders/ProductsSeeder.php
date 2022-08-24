<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use DB;

// เรียกใช้งาน Model Product
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->delete();


$data = [
    [
        'name' => 'Monitor',
        'slug' => 'test',
        'description' => 'LED 17 inc',
        'price' => 1000000.00,
        'image' => 'noavatar.jpg',
        'status' => 1
    ]
];


Product::insert($data);

// การ faker ข้อมูล
Product::factory(1000)->create();



    }
}