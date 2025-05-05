@extends('layouts.app')
@section('content')
    <main class="nk-pages">
        <!-- // Продажа SUR-->
        <section class="bg-theme bg-pattern-dots" id="tokensale">
            <div class="section section-tokensale tc-light">
                <div class="container">
                    <!-- Section Head @s -->
                    <div class="section-head text-center wide-auto">
                        <h2 class="title">{{__('SUR токен бесплатно')}}</h2>
                        <p>{{__('следуйте инструкции и Вам начислят бонус.')}}</p>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block nk-block-token mgb-m30">
                        <div class="row">
                            <div class="col-lg-6">
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
                                        <li>{{__('3. По окончанию видео появится форма для ввода адреса кошелька.')}}</li>
                                        <li>{{__('4. В течение 24 часов Вам поступят токены.')}}</li>
                                    </ul>
                                    <div class="align-items-left">
                                        <h4>NB!</h4>
                                        <p>{{__('Токены начисляются в течение 24 часов.')}}</p>
                                        <p>{{__('Бонусы начисляются 1 раз .')}}</p>
                                        <p>{{__('Ваш адрес кошелька должен быть в формате TON.')}}</p>



                                    </div>
                                    {{--<div id="walletInputContainer" style="display:none; margin-top:20px;">--}}
                                    <div id="walletInputContainer" style=" margin-top:20px; margin-bottom:20px;">
                                        <label for="walletAddress">Введите адрес TON кошелька:</label>
                                        <input type="text" id="walletAddress" name="walletAddress" class="form-control" placeholder="Введите адрес кошелька">
                                        <button id="submitWallet" class="btn btn-primary mt-2">Отправить</button>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="token-status bg-theme-dark">
                                    <h5>{{__('Акт наблюдения')}}</h5>
                                        <ul class="align-items-left" style="color: #b6d4fe;">
                                            <li>{{__('Наблюдатель дает намерение облаку раствориться.')}}</li>
                                            <li>{{__('Процесс записан на видео.')}}</li>
                                        </ul>


                                    <h5>{{__('Эффекты просмотра видео')}}</h5>
                                        <ul class="align-items-left" style="color: #b6d4fe;">
                                            <li>{{__('Остановка внутреннего диалога.')}}</li>
                                    <li>{{__('Устранение сомнений, физической боли и тревоги.')}}</li>
                                    <li>{{__(' Возникновение чувства спокойствия и удовлетворения.')}}</li>
                                    <li>{{__('Необходимость просмотра в течение получаса для достижения эффекта.')}}</li>
                                        </ul>

                                    <h5>{{__('Функция «Получить»')}}</h5>
                                        <ul class="align-items-left" style="color: #b6d4fe;">
                                            <li>{{__('Премия за участие в акции по очистке энергетического информационного поля.')}}</li>
                                    <li>{{__('Вознаграждение в виде условных единиц.')}}</li>
                                        </ul>

                                    <h5>{{__('Уникальность опыта наблюдения')}}</h5>
                                        <ul class="align-items-left" style="color: #b6d4fe;">
                                            <li>{{__('Процесс наблюдения не воспроизводим, демонстрируется конкретным наблюдателем.')}}</li>
                                    <li>{{__('Данный ролик выделяется среди других за беспристрастный подход.')}}</li>
                                    <li>{{__('Средство для достижения покоя и отсутствия внутренних диалогов.')}}</li>
                                        </ul>

                                    <h5>{{__('Влияние на общество')}}</h5>
                                        <ul class="align-items-left" style="color: #b6d4fe;">
                                            <li>{{__('Результаты эксперимента в условиях конфликта.')}}</li>
                                    <li>{{__('Коллективная медитация вызвала положительный эффект.')}}</li>
                                    <li>{{__('Корень квадратный из 1% населения может вызвать волну спокойствия для всего общества.')}}</li>
                                        </ul>

                                    <h5>{{__('Миссия осознанности')}}</h5>
                                        <ul class="align-items-left" style="color: #b6d4fe;">
                                            <li>{{__('Стремление набрать просмотры видео.')}}</li>
                                    <li>{{__('Премия для корня квадратного из 1% населения за участие в миссии.')}}</li>
                                    <li>{{__('Направление намерения на растворение проблем, а не создание новых.')}}</li>
                                        </ul>

                                    <h5>{{__('Квантовая теория и успех')}}</h5>
                                        <ul class="align-items-left" style="color: #b6d4fe;">
                                            <li>{{__('Проблемы растворяются, а не решаются.')}}</li>
                                    <li>{{__('Связь сознания с материальным миром и общей информацией.')}}</li>
                                    <li>{{__('Возможность каждого повторить опыт наблюдения и направить намерение.')}}</li>
                                        </ul>

                                    <h5>{{__('Дополнительные ресурсы')}}</h5>
                                        <ul class="align-items-left" style="color: #b6d4fe;">
                                            <li>{{__('Упоминание о файле реорезонансной терапии «Стирать мысли».')}}</li>
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
