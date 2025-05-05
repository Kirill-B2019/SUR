<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        $tokenData = $this->getTokenInfo();

        return view('welcome', compact('tokenData'));
    }

public function getTokenInfo($tokenAddress = 'EQD_oJx8gODY2DTkhWQFbtm48CJLgynOdhYzD12fKaj7dx9y')
{
    $url = "https://api.dyor.io/v1/jettons/{$tokenAddress}";

    try {
        $response = Http::timeout(30)->get($url);

        if ($response->successful()) {
            $data = $response->json();

            // Защита от отсутствия ключей
            $metadata = $data['details']['metadata'] ?? [];
            $price = $data['details']['price'] ?? [];
            $priceUsd = $data['details']['priceUsd'] ?? [];
            $liquidityUsd = $data['details']['liquidityUsd'] ?? [];
            $fdmc = $data['details']['fdmc'] ?? [];

            return [
                'success' => true,
                'name' => $metadata['name'] ?? null,
                'symbol' => $metadata['symbol'] ?? null,
                'decimals' => $metadata['decimals'] ?? null,
                'contract_address' => 'EQD_oJx8gODY2DTkhWQFbtm48CJLgynOdhYzD12fKaj7dx9y' ?? null,
                'description' => $metadata['description'] ?? null,
                'image' => $metadata['image'] ?? null,
                'created_at' => $metadata['createdAt'] ?? null,
                'total_supply' => $data['details']['totalSupply'] ? (float)$data['details']['totalSupply'] / (10 ** ($metadata['decimals'] ?? 0)) : null,
                'price_ton' => $price['value'] ? (float)$price['value'] / (10 ** ($price['decimals'] ?? 0)) : null,
                'price_usd' => $priceUsd['value'] ? (float)$priceUsd['value'] / (10 ** ($priceUsd['decimals'] ?? 0)) : null,
                'liquidity_usd' => $liquidityUsd['value'] ? (float)$liquidityUsd['value'] / (10 ** ($liquidityUsd['decimals'] ?? 0)) : null,
                'fdmc' => $fdmc['value'] ? (float)$fdmc['value'] / (10 ** ($fdmc['decimals'] ?? 0)) : null,
                'holders_count' => $data['details']['holdersCount'] ?? null,
            ];
        }

        return [
            'success' => false,
            'message' => 'API request failed',
            'status' => $response->status(),
            'body' => $response->json()
        ];
    } catch (\Exception $e) {
        \Log::error('Ошибка получения данных о токене: ' . $e->getMessage());

        return [
            'success' => false,
            'message' => 'Ошибка при выполнении запроса: ' . $e->getMessage()
        ];
    }
}

    public function showGift()
    {
        return view('gift');
    }

}
