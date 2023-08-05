<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $levels = ['10', '20', '30', '40', '50', '60'];

        foreach($levels as $level) {
            DB::table('levels')->insert([
                'name' => 'Level ' . $level,
                'price' => $level,
                'image' => $faker->imageUrl(600, 600, 'business', true, 'levels'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}