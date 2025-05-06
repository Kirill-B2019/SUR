@extends('layouts.app')
@section('content')
    <main class="nk-pages">
        <!-- // Продажа SUR-->
        <section class="bg-theme bg-pattern-dots">
            <div class="section section-tokensale tc-light">
                <div class="container">
                    <!-- Section Head @s -->
                    <div class="section-head text-center wide-auto">
                        <h2 class="title">{{__('SUR токен бесплатно')}}</h2>
                        <p>{{__('')}}</p>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block nk-block-token mgb-m30">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="token-status bg-theme-dark">
                                    <h5>{{__('Цель видео')}}</h5>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('- Способствование растворению проблем( боль тревога сомнения апатия);')}}</li>
                                        <li>{{__('-Остановка «внутреннего диалога».')}}</li>
                                    </ul>


                                    <h5>{{__('Подготовка к просмотру:')}}</h5>
                                    <h6>{{__('Отметьте своё текущее состояние::')}}</h6>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('-Тревожность или апатия.')}}</li>
                                        <li>{{__('-Физическая боль, напряжение в теле.')}}</li>
                                    </ul>

                                    <h6>{{__('Сформулируйте намерение:')}}</h6>
                                    <h7>{{__('например:')}}</h7>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('- поясница свободна боли и напряжения прямо сейчас.')}}</li>
                                        <li>{{__('- давление 120/70.')}}</li>
                                    </ul>

                                    <h5>{{__('Процесс просмотра видео:')}}</h5>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('- Садитесь удобно, включите видео.')}}</li>
                                        <li>{{__('- Смотрите внимательно на облако.')}}</li>
                                    </ul>
                                    <h5>{{__('После просмотра')}}</h5>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('- Потратьте несколько минут на осознание состояния.')}}</li>
                                        <li>{{__('- Запишите изменения в вашем состоянии,если они есть.')}}</li>
                                    </ul>
                                </div>

                            </div><!-- .col -->
                            <div class="col-lg-4">
                                <div class="token-info bg-theme-dark">
                                    <h4 class="title title-md mb-2 text-sm-center">{{__('Видео бонусной программы')}}</h4>
                                    <video id="Video" width="100%" oncontextmenu="return false;" controls>
                                        <source src="{{ asset('assets/video/sur_gift.mp4') }}" type="video/mp4">
                                        {{__('Ваш браузер не поддерживает видео.')}}
                                    </video>
                                    <h4 class="title title-md">{{__('ОЗНАКОМТЕСЬ С ИНСТРУКЦИЕЙ')}}</h4>
                                    <h5>
                                        {{__('Для начисления понадобится кошелек с поддержкой сети TON -')}}
                                        <a href="https://tonkeeper.com" target="_blank" class="a-gift"> TONKeeper</a>
                                    </h5>
                                    <ul class="align-items-left">
                                        <li>{{__('1. Длительность всего видео 2:48 секунд.')}}</li>
                                        <li>{{__('2. За просмотр начислим Вам 7,54 SUR.')}}</li>
                                        <li><strong>{{__('3. По окончанию видео появится форма для ввода адреса кошелька.')}}</strong></li>
                                        <li>{{__('4. В течение 24 часов Вам поступят токены.')}}</li>
                                    </ul>
                                    <div class="align-items-left">
                                        <h4>NB!</h4>
                                        <p>{{__('Токены начисляются в течение 24 часов.')}}</p>
                                        <p>{{__('Бонусы начисляются 1 раз .')}}</p>
                                        <p>{{__('Ваш адрес кошелька должен быть в формате TON.')}}</p>



                                    </div>
                                    <div id="walletInputContainer" style="display:none; margin-top:20px;">
                                        <label for="walletAddress">Введите адрес TON кошелька:</label>
                                        <input type="text" id="walletAddress" name="walletAddress" class="form-control" placeholder="Введите адрес кошелька">
                                        <button id="submitWallet" class="btn btn-primary mt-2">Отправить</button>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-4">
                                <div class="token-status bg-theme-dark">
                                    <h5>{{__('Акт наблюдения')}}</h5>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('- Наблюдатель дает команду облаку раствориться.')}}</li>
                                        <li>{{__('- Процесс записан на видео.')}}</li>
                                    </ul>
                                    <h5>{{__('Эффекты просмотра видео')}}</h5>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('- Остановка внутреннего диалога.')}}</li>
                                        <li>{{__('- Устранение сомнений, физической боли и тревоги.')}}</li>
                                        <li>{{__('- Возникновение чувства спокойствия и удовлетворения.')}}</li>
                                        <li>{{__('- смотреть можно неограниченное количество раз.')}}</li>


                                    </ul>

                                    <h5>{{__('Функция «Получить»')}}</h5>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('- Премия за участие в акции по очистке энергетического информационного поля.')}}</li>
                                        <li>{{__('- Вознаграждение в виде условных единиц.')}}</li>
                                    </ul>

                                    <h5>{{__('Уникальность опыта наблюдения')}}</h5>
                                    <ul class="align-items-left" style="color: #b6d4fe;">
                                        <li>{{__('- Процесс наблюдения не воспроизводим, демонстрируется конкретным наблюдателем.')}}</li>
                                        <li>{{__('- Средство для достижения покоя и отсутствия внутренних диалогов.')}}</li>
                                    </ul>
                                </div>

                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </div><!-- .section-tokensale -->
        </section>
    </main>


    <script>
        document.getElementById('Video').addEventListener('ended', function() {
            document.getElementById('walletInputContainer').style.display = 'block';
        });

        document.getElementById('submitWallet').addEventListener('click', function() {
            const wallet = document.getElementById('walletAddress').value.trim();
            if (!wallet) {
                alert('Введите адрес кошелька');
                return;
            }

            fetch("{{ route('gift.saveWallet') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({wallet})
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alert('Адрес кошелька сохранён!');
                        document.getElementById('walletAddress').value = '';
                    } else {
                        alert('Ошибка при сохранении');
                    }
                })
                .catch(() => alert('Ошибка сети'));
        });
    </script>
@endsection('content')
