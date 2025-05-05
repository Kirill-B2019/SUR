<?
@extends('layouts.app')

@section('head')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <main class="nk-pages">
        <section class="section bg-light section-about">
    <div class="container">
        <h1>Список кошельков для отправки SUR</h1>

        <button id="connectWalletBtn" class="btn btn-success mb-3" disabled>Подключить кошелек</button>
        <span id="connectedWallet" style="margin-left:10px; font-weight:bold;"></span>

            <div><a href="{{ route('wallets.export') }}" class="btn btn-success">Скачать в Excel</a></div>


        <table class="table table-s1 table-token">
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
        </section>
    </main>
    <script>
        $(document).ready(function() {
            $('.sendTokenBtn').on('click', function() {
                var btn = $(this);
                var walletId = btn.data('id'); // Получаем ID кошелька из data-id
                var url = "{{ route('wallets.sendToken', ':id') }}".replace(':id', walletId); // Формируем URL с ID

                btn.prop('disabled', true); // Отключаем кнопку, чтобы избежать повторных кликов

                $.post(url, {
                    _token: '{{ csrf_token() }}' // Передаём CSRF токен
                })
                    .done(function(response) {
                        alert('Токен успешно отправлен!');
                        // Удаляем строку из таблицы с анимацией
                        btn.closest('tr').fadeOut(400, function() {
                            $(this).remove();
                        });
                    })
                    .fail(function(xhr) {
                        var errorMsg = 'Произошла ошибка при отправке токена.';
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            errorMsg = xhr.responseJSON.error;
                        }
                        alert(errorMsg);
                    })
                    .always(function() {
                        btn.prop('disabled', false); // Включаем кнопку обратно
                    });
            });
        });
    </script>

@endsection

@section('scripts')

@endsection
