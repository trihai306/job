<?php
namespace Database\Seeders;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $products = Product::all();

        foreach ($users as $user) {
            foreach ($products as $product) {
                Order::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                    'status' => '0'
                ]);
            }
        }
    }
}