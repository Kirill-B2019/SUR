<?
@extends('layouts.app')

@section('head')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <div class="container">
        <h1>Список кошельков для отправки SUR</h1>

        <button id="connectWalletBtn" class="btn btn-success mb-3">Подключить кошелек</button>
        <span id="connectedWallet" style="margin-left:10px; font-weight:bold;"></span>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Адрес кошелька</th>
                <th>Сумма</th>
                <th>Дата создания
                    <a href="{{ route('wallets.index', ['sort' => 'asc']) }}">▲</a>
                    <a href="{{ route('wallets.index', ['sort' => 'desc']) }}">▼</a>
                </th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody id="walletsTableBody">
            @foreach($wallets as $wallet)
                <tr data-id="{{ $wallet->id }}">
                    <td>{{ $wallet->wallet }}</td>
                    <td>{{ $wallet->amount }}</td>
                    <td>{{ $wallet->created_at }}</td>
                    <td>
                        <button class="btn btn-primary sendTokenBtn" data-wallet="{{ $wallet->wallet }}" data-id="{{ $wallet->id }}">
                            Отправить
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $wallets->withQueryString()->links() }}
    </div>

    <!-- Модальное окно для ошибок -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-danger">
                    <h5 class="modal-title" id="errorModalLabel">Ошибка</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body" id="errorModalBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/@tonconnect/sdk@latest/dist/tonconnect-sdk.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@ton/core@1.23.0/dist/index.min.js"></script> <!-- Для генерации payload -->

    <script>
        const manifestUrl = '{{ url("tonconnect-manifest.json") }}'; // Укажите путь к вашему manifest.json

        let tonConnect = null;
        let connectedAccount = null;

        async function initTonConnect() {
            if (!tonConnect) {
                tonConnect = new TonConnectSDK.TonConnect({ manifestUrl });
                await tonConnect.restoreConnection();
            }
        }

        document.getElementById('connectWalletBtn').onclick = async function() {
            await initTonConnect();
            if (!tonConnect.connected) {
                await tonConnect.connect();
            }
        };

        // Обновляем статус подключения
        window.onload = async () => {
            await initTonConnect();
            tonConnect.onStatusChange(walletInfo => {
                if (walletInfo && walletInfo.account) {
                    connectedAccount = walletInfo.account.address;
                    document.getElementById('connectedWallet').textContent = 'Подключен: ' + connectedAccount;
                } else {
                    connectedAccount = null;
                    document.getElementById('connectedWallet').textContent = '';
                }
            });
        };

        // Функция для генерации payload TIP-3 transfer (SUR)
        function generateTransferPayload(amount, recipient, senderJettonWallet) {
            const { Cell, beginCell, Address, toNano } = TonCore;

            const opCode = 0xf8a7ea5; // transfer op code

            const cell = beginCell()
                .storeUint(opCode, 32)
                .storeUint(0, 64) // query id = 0
                .storeCoins(toNano(amount.toString())) // amount jettons
                .storeAddress(new Address(recipient)) // recipient jetton wallet
                .storeAddress(new Address(senderJettonWallet)) // response destination (sender jetton wallet)
                .storeBit(false) // no custom payload
                .storeCoins(0) // forward TON amount
                .storeBit(false) // no forward payload
                .endCell();

            return cell.toBoc({ idx: false }).toString('base64');
        }

        // Функция для получения Jetton Wallet адреса по адресу пользователя и адресу токена SUR
        async function getJettonWalletAddress(userAddress, jettonMasterAddress) {
            const { Address, beginCell } = TonCore;
            const userAddr = Address.parse(userAddress);
            const jettonMasterAddr = Address.parse(jettonMasterAddress);

            // Формируем адрес Jetton Wallet по стандарту TIP-3
            // Адрес вычисляется как hash of code + data (user address)
            // Здесь пример с TonWeb или вручную через TonCore:

            // Код контракта Jetton Wallet (стандартный)
            // Для упрощения используйте готовую библиотеку TonWeb

            // В данном примере возвращаем null, замените на реальное вычисление
            return null;
        }

        document.addEventListener('click', async function(event) {
            if (!event.target.classList.contains('sendTokenBtn')) return;

            if (!connectedAccount) {
                showError('Сначала подключите кошелек отправителя');
                return;
            }

            const btn = event.target;
            const recipient = btn.dataset.wallet;
            const tokenId = btn.dataset.id;
            btn.disabled = true;
            const originalText = btn.textContent;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Отправка...';

            try {
                const SUR_TOKEN_MASTER = 'EQD_oJx8gODY2DTkhWQFbtm48CJLgynOdhYzD12fKaj7dx9y';
                const amount = 7.54;

                // Для отправки токена нужно:
                // 1) Узнать Jetton Wallet отправителя (адрес вашего кошелька для SUR)
                // 2) Сгенерировать payload transfer
                // 3) Отправить транзакцию через TON Connect

                // Для упрощения - отправляем нативный TON (замените на реальную логику)

                const transaction = {
                    validUntil: Math.floor(Date.now() / 1000) + 600,
                    messages: [
                        {
                            address: recipient,
                            amount: (7.54 * 1e9).toString(),
                            payload: '' // Здесь должен быть payload для TIP-3 токена
                        }
                    ]
                };

                await tonConnect.sendTransaction(transaction);

                // После успешной отправки меняем статус в БД
                const response = await fetch(`/wallets/send-token/${tokenId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                });

                const data = await response.json();
                if (data.success) {
                    const row = btn.closest('tr');
                    row.style.transition = 'opacity 0.5s';
                    row.style.opacity = 0;
                    setTimeout(() => row.remove(), 500);
                } else {
                    throw new Error(data.error || 'Ошибка при обновлении статуса');
                }
            } catch (error) {
                showError(error.message || 'Ошибка сети');
            } finally {
                btn.disabled = false;
                btn.textContent = originalText;
            }
        });

        function showError(message) {
            document.getElementById('errorModalBody').textContent = message;
            new bootstrap.Modal(document.getElementById('errorModal')).show();
        }
    </script>
@endsection
