<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('pages.signin');
    }

    public function registration(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        return response()->json([
            'message' => 'Валидация прошла успешно!',
            'data' => $validate_data,
        ], 200);
    }


}
