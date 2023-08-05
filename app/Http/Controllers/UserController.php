<?php

namespace App\Http\Controllers;

use App\Models\HistoryPayment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request) {
        try {
            $validatedData = $request->validate([
                'bank_account' => 'required',
                'bank_id' => 'required',
                'bank_name' => 'required',
            ]);

            $user = User::find(Auth::user()->id);
            $user->bank_account = $validatedData['bank_account'];
            $user->bank_id = $validatedData['bank_id'];
            $user->bank_name = $validatedData['bank_name'];
            $user->save();

            return response()->json([
                'status' => 'ok',
                'message' => 'Cập nhật thông tin thành công.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Đã có lỗi xảy ra, vui lòng thử lại.'
            ], 500);
        }
    }

    public function historyPayment(Request $request){
        $id = Auth::user()->id;
        $data = $request->all();
        $data['user_id'] = $id;
        HistoryPayment::create($data);
        return response()->json([
            'status' => 'ok',
            'message' => 'Cập nhật thông tin thành công.'
        ]);
    }
}