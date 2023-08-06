<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryPayment extends Controller
{
    public function withDraw(Request $request)
    {
        $limit = $request->get('limit', 10);
        $payments = \App\Models\HistoryPayment::query()->where('user_id', $request->user()->id)->where('type', 0)->paginate($limit);
        return view('history-payment.withdraw', compact('payments'));
    }

    public function deposit(Request $request)
    {
        $limit = $request->get('limit', 10);
        $payments = \App\Models\HistoryPayment::query()->where('user_id', $request->user()->id)->where('type', 1)->paginate($limit);
        return view('history-payment.deposit', compact('payments'));
    }
}
