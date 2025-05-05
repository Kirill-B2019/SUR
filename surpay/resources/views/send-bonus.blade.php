<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Получить бонус SUR</title>
</head>
<body>
    <h1>Получить бонус SUR</h1>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    @if(isset($message))
        <p>{{ $message }}</p>
    @endif

    @if(isset($showBuyButton))
        <a href="/buy-sur"><button>Купить еще SUR</button></a>
    @else
        <form method="POST" action="/send-bonus">
            @csrf
            <label>Адрес кошелька:</label>
            <input type="text" name="address" required>
            <button type="submit">Получить бонус</button>
        </form>
    @endif
</body>
<script src="{{asset('assets/js/ton-token-transfer.js')}}"></script>
</html>
<?php
