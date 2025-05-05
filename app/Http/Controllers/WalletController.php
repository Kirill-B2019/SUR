<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurToken;

class WalletController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'asc');
        $sort = in_array($sort, ['asc', 'desc']) ? $sort : 'asc';

        $wallets = SurToken::where('status', 'New')
            ->orderBy('created_at', $sort)
            ->paginate(20);

        return view('wallets', compact('wallets', 'sort'));
    }

    public function sendToken(Request $request, $id)
    {
        $tokenRow = SurToken::findOrFail($id);

        if ($tokenRow->status !== 'New') {
            return response()->json(['error' => 'Токен уже отправлен или в обработке'], 400);
        }

        // Здесь мы ожидаем, что отправка токена будет происходить на клиенте через JS и TON Web SDK,
        // а этот метод будет вызван после успешной транзакции для смены статуса.

        $tokenRow->status = 'Pending';
        $tokenRow->save();

        return response()->json(['success' => true]);
    }
}
