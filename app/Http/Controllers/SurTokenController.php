<?php

namespace App\Http\Controllers;

use App\Models\SurToken;
use App\Exports\SurTokenExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Exception;

class SurTokenController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');
        $tokens = SurToken::where('status', 'new')
            ->orderBy($sort, $direction)
            ->paginate(20);

        return view('sur_tokens.index', compact('tokens', 'sort', 'direction'));
    }

    public function sendToken(Request $request, $id)
    {
        $tokenRow = SurToken::findOrFail($id);

        if ($tokenRow->status !== 'New') {
            return response()->json(['error' => 'Токен уже отправлен или в обработке'], 400);
        }

        // Здесь ваша логика отправки токена через TON (например, через TON Connect SDK на клиенте)

        // Если отправка успешна, меняем статус
        $tokenRow->status = 'Pending';
        $tokenRow->save();

        return response()->json(['success' => true]);
    }


    /**
     * @throws Exception
     * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
     */
    public function exportToExcel(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return Excel::download(new SurTokenExport(), 'wallets.csv');
    }
}
