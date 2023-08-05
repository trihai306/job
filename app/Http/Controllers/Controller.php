<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function response($status = 200, $data = [], $message = null)
    {
        return response()->json([
            'status' => $status,
            'data' => $data,
            'message' => $message
        ]);
    }
}
