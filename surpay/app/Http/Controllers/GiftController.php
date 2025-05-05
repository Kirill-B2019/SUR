<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurToken;

class GiftController extends Controller
{
    public function show()
    {
        return view('gift');
    }

    public function saveWallet(Request $request)
    {
        $request->validate([
            'wallet' => 'required|string',
        ]);

        SurToken::create([
            'amount' => '7.54',
            'wallet' => $request->wallet,
            'token' => 1, // или нужное значение
            'status' => 'New',
            'is_bonus' => true,
        ]);

        return response()->json(['success' => true]);
    }
}
