<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Level;
use App\Models\Order;
use App\Models\User;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getMission(Request $request)
    {
        try {
            $user = $request->user();
            $productOfLevels = Product::where('level_id', $user->level_id)->get();
            foreach ($productOfLevels as $productOfLevel) {
                // create order of use with product id
                Order::query()->create([
                    'user_id' => $user->id,
                    'product_id' => $productOfLevel->id,
                    'status' => 2,
                ]);
                User::query()->where('id', $user->id)->update([
                    'freezing_money' => $user->freezing_money + $productOfLevel->price,
                ]);
            }
            return $this->response(200, $productOfLevels, 'Get mission success');
        } catch (\Exception $e) {
            return $this->response(500, [], $e->getMessage());
        }
    }
}
