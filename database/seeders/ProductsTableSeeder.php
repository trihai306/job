<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'price' => rand(100, 1000),  // Số ngẫu nhiên từ 100 đến 1000
                'level_id' => 1,
                'image' => 'path/to/sample/image.jpg',
                'description' => Str::random(50),
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}