<?php

use App\Http\Controllers\GiftController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;




Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/gift', [MainController::class, 'showGift'])->name('gift');
/*Route::get('/gift', [GiftController::class, 'show'])->name('gift.show');*/
Route::post('/gift/save-wallet', [GiftController::class, 'saveWallet'])->name('gift.saveWallet');

Route::middleware('web')->group(function () {
    Route::get('/wallets', [WalletController::class, 'index'])->name('wallets.index');
    Route::post('/wallets/send-token/{id}', [WalletController::class, 'sendToken'])->name('wallets.sendToken');
});



