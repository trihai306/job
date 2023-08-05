<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
   {
      return view('home');
   }

   public function account(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
   {
      return view('yourname');
   }

   public function mission(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
   {
      return view('mission');
   }

   public function banking(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
   {
      return view('banking');
   }

   public function recharge(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
   {
      return view('recharge');
   }

   public function moneyout(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
   {
      return view('moneyout');
   }

   public function order(Request $request)
   {
      $user = $request->user();
      $orders_pending = Order::query()->where('user_id', $user->id)->with(['product' => function ($q) {
         $q->with('level');
      }])->where('status', 1)->get();
      $orders_done = Order::query()->where('user_id', $user->id)->with(['product' => function ($q) {
         $q->with('level');
      }])->where('status', 0)->get();
      return view('order', compact('orders_pending', 'orders_done'));
   }

   public function rechargeoption()
   {
      return view('rechargeoption');
   }
}
