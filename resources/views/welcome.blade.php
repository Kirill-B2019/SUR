@extends('layouts.app')
@section('content')


    <main class="nk-pages">
  {{--      <section class="section no-pd overflow-hidden text-center over-up">
            <h6 class="title title-xs tc-secondary pdb-s">{{__('Эмиссия SUR')}}</h6>
            <ul class="rank-list">
                <li class="rank-item">
                    <img src="images/logo/a.png" alt="logo">
                    <div class="rank-count">4.7 <span>/5</span></div>
                </li>
                <li class="rank-item">
                    <img src="images/logo/b.png" alt="logo">
                    <div class="rank-count">A</div>
                </li>
                <li class="rank-item">
                    <img src="images/logo/c.png" alt="logo">
                    <div class="rank-count">9.4 <span>/10</span></div>
                </li>
                <li class="rank-item">
                    <img src="images/logo/d.png" alt="logo">
                    <div class="rank-count">4.9 <span>/5</span></div>
                </li>
                <li class="rank-item">
                    <img src="images/logo/e.png" alt="logo">
                    <div class="rank-count">5 <span>/5</span></div>
                </li>
            </ul>
        </section>--}}
        <!-- // О платформе -->
        <section class="section bg-light section-about" id="about">
            <div class="container">
                <!-- Block @s -->
                <div class="nk-block nk-block-about">
                    <div class="row align-items-center gutter-vr-30px pdb-x">
                        <div class="col-lg-12">
                            <div class="nk-block-text">
                                <h2 class="title">{{__('О платформе')}}</h2>
                                <p>{{__('Создание инновационной товарно-ресурсной логистической платформы на основе кооперативного взаимодействия – ответ на современные вызовы в оптимизации логистических процессов, снижении транзакционных издержек и обеспечении прозрачного обмена ресурсами. Связующий учетный утилитарный токен SUR экосистемы не только обеспечивает обменными механизмами расчётов между участниками, но и становится важным элементом мотивации и управления всей платформой.')}}</p>
                            </div>
                        </div>

                    </div>
                </div><!-- .block @e -->
                <!-- Section Head @s -->
                <div class="section-head">
                    <h2 class="title title-lg">{{__('Особенности проекта')}}</h2>
                </div><!-- .section-head @e -->
                <!-- Block @s -->
                <div class="nk-block nk-block-features mgb-m30">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="feature">
                                <div class="feature-icon dot">
                                    <em class="icon ikon ikon-paricle-alt"></em>
                                </div>
                                <div class="feature-text">
                                    <h5 class="title title-sm">{{__('Кооперативное взаимодействие')}}</h5>
                                    <p>{{__('Платформа основана на принципах сотрудничества между участниками, что позволяет оптимизировать логистические процессы и повышать эффективность использования ресурсов')}}

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature">
                                <div class="feature-icon dot">
                                    <em class="icon ikon ikon-donught"></em>
                                </div>
                                <div class="feature-text">
                                    <h5 class="title title-sm">{{__('Оптимизация логистических процессов')}}</h5>
                                    <p>{{__('Инструменты и функции платформы направлены на автоматизацию и упрощение логистических операций, что позволяет сократить время и затраты на обработку заказов.')}} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature">
                                <div class="feature-icon dot">
                                    <em class="icon ikon ikon-document"></em>
                                </div>
                                <div class="feature-text">
                                    <h5 class="title title-sm">{{__('Прозрачный обмен ресурсами')}}</h5>
                                    <p>{{__('Платформа обеспечивает высокий уровень прозрачности в процессе обмена ресурсами, что способствует доверию между участниками и уменьшает риски мошенничества.')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="feature">
                                <div class="feature-text">
                                    <h4 class="title title-md">{{__('... а так же:')}}</h4>
                                    <div class="feature-text">
                                        <h6 class="title title-sm">{{__('Снижение транзакционных издержек')}}</h6>
                                        <p>{{__('Использование технологии блокчейн и токенизации позволяет минимизировать транзакционные издержки, связанные с обменом ресурсами и расчетами между участниками.')}}</p>
                                    </div>
                                    <div class="feature-text mt-5">
                                        <h6 class="title title-sm">{{__('Связующий учетный токен SUR')}}</h6>
                                        <p>{{__('Токен SUR служит не только средством расчета, но и инструментом для управления платформой. Он может использоваться для вознаграждения участников за активное участие, предоставление ресурсов и выполнение определенных действий.')}}</p>
                                    </div>
                                    <div class="feature-text mt-5">
                                        <h6 class="title title-sm">{{__('Мотивация участников')}}</h6>
                                        <p>{{__('Токенизация процессов позволяет создать систему вознаграждений, стимулирующую пользователей к активному взаимодействию и улучшению качества предоставляемых услуг.')}}</p>
                                    </div>
                                    <div class="feature-text mt-5">
                                        <h6 class="title title-sm">{{__('Гибкость и масштабируемость')}}</h6>
                                        <p>{{__('Платформа разработана с учетом возможности масштабирования и адаптации под различные бизнес-модели, что делает её подходящей для компаний разных размеров и отраслей.')}}</p>
                                    </div>
                                    <div class="feature-text mt-5">
                                        <h6 class="title title-sm">{{__('Интеграция с существующими системами')}}</h6>
                                        <p>{{__('Возможность интеграции с другими логистическими и управленческими системами, что упрощает внедрение платформы в уже существующие бизнес-процессы.')}}</p>
                                    </div>
                                    <div class="feature-text mt-5">
                                        <h6 class="title title-sm">{{__('Аналитика и прогнозирование')}}</h6>
                                        <p>{{__('Встроенные аналитические инструменты позволяют участникам получать данные о текущих трендах, прогнозировать спрос и оптимизировать запасы.')}}</p>
                                    </div>
                                    <div class="feature-text mt-5">
                                        <h6 class="title title-sm">{{__('Поддержка и обучение')}}</h6>
                                        <p>{{__('Платформа предлагает ресурсы и поддержку для обучения пользователей, что помогает им максимально эффективно использовать все возможности системы.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .block @s -->
            </div>
        </section>
        <!-- // Концепция токена SUR -->
        <section class="section section-features bg-white" id="features">
            <div class="container">
                <!-- Block @s -->
                <div class="nk-block nk-block-features-s2">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <!-- Section Head @s -->
                            <div class="section-head">
                                <h2 class="title">{{__('Концепция токена SUR')}}</h2>
                                <p class="h4">{{__('Токен SUR – это цифровой актив, встроенный в экономическую модель платформы.')}}</p>
                                <p>{{__('Он выполняет несколько ключевых функций:')}}</p>
                            </div><!-- .section-head @e -->
                            <div class="features-list me-4 mgb-m30">
                                <div class="feature feature-s2">
                                    <div class="feature-icon dot">
                                        <em class="icon ikon ikon-cash"></em>
                                    </div>
                                    <div class="feature-text">
                                        <h5 class="title title-sm">{{__('Расчётная единица')}}</h5>
                                        <p>{{__('выступает средством взаимозачёта между участниками платформы (поставщики, производители, дистрибьюторы, потребители).')}}</p>
                                    </div>
                                </div>
                                <div class="feature feature-s2">
                                    <div class="feature-icon dot">
                                        <em class="icon ikon ikon-user"></em>
                                    </div>
                                    <div class="feature-text">
                                        <h5 class="title title-sm">{{__('Стимуляция и мотивация')}}</h5>
                                        <p>{{__('позволяет участникам получать бонусы за активность, проводить стейкинг и участвовать в распределении доходов.')}}</p>
                                    </div>
                                </div>
                                <div class="feature feature-s2">
                                    <div class="feature-icon dot">
                                        <em class="icon ikon ikon-data-server"></em>
                                    </div>
                                    <div class="feature-text">
                                        <h5 class="title title-sm">{{__('Участие в управлении')}}</h5>
                                        <p>{{__('обеспечивает элементы децентрализованного управления (DAO), позволяя держателям влиять на развитие платформы.')}}</p>
                                    </div>
                                </div>
                                <div class="feature feature-s2">
                                    <div class="feature-icon dot">
                                        <em class="icon ikon ikon-currency"></em>
                                    </div>
                                    <div class="feature-text">
                                        <h5 class="title title-sm">{{__('Инструмент для финансирования')}}</h5>
                                        <p>{{__('используется при привлечении инвестиций через ICO/IDO, позволяя сформировать стартовый капитал для развития проекта.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-5 d-flex align-items-center justify-content-center">
                            <div class="gfx py-4 ">
                                <img src="{{asset('images/gfx/gfx-a.png')}}" alt="gfx">
                            </div>
                        </div><!-- .col -->

                    </div><!-- .row -->
                </div><!-- .block @e -->
            </div>
        </section>
        <!-- // Проблемы и решения -->
        <section class="section section-problem bg-light" id="problem">
            <div class="container">
                <!-- Section Head @s -->
                <div class="section-head text-center wide-auto-sm">
                    <h2 class="title">{{__('Проблемы и решения')}}</h2>
                    <p>{{__('платформа способствует кооперации между участниками рынка, что позволяет вам использовать ресурсы более эффективно и достигать новых уровней успеха.')}}</p>
                </div><!-- .section-head @e -->
                <!-- Block @s -->
                <div class="nk-block nk-block-problems tc-light">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-6">
                            <div class="feature boxed boxed-lg bg-theme no-mg split-lg-left split-left">
                                <h4 class="title title-md">{{__('Проблемы')}}</h4>
                                 <ul class="list list-dot">
                                    <li>
                                        {{__('Высокие транзакционные издержки и задержки расчетов')}}
                                        <div class="smaller">{{__('Традиционные финансовые и логистические системы часто подразумевают множество посредников, что ведёт к высоким комиссиям, задержкам и дополнительным затратам.
                                        ')}}</div>
                                    </li>
                                    <li>
                                        {{__('Отсутствие стимулов и мотивации для участников')}}
                                        <div class="smaller">{{__('Без наличия системы вознаграждений участники платформы могут быть менее активными, что снижает эффективность обменов и развитие экосистемы.
                                        ')}}</div>
                                    </li>
                                    <li>
                                        {{__('Централизованный контроль и ограниченные возможности для управления')}}
                                        <div class="smaller">{{__('В традиционных моделях управления решения принимаются ограниченной группой, что препятствует вовлечению всего сообщества и ограничивает гибкость реагирования на рыночные изменения.
                                        ')}}</div>
                                    </li>
                                    <li>
                                        {{__('Недостаточная интеграция с партнерами и проблемы ликвидности')}}
                                        <div class="smaller">{{__('Отсутствие механизмов для привлечения партнеров и обеспечения ликвидности может стать барьером для масштабирования платформы и доверия со стороны пользователей.
                                        ')}}</div>
                                    </li>
                                    <li>
                                        {{__('Ограниченные возможности финансирования и роста проекта')}}
                                        <div class="smaller">{{__('Без эффективного инструмента для привлечения инвестиций ранние стадии развития платформы могут столкнуться с ограничениями в ресурсах, необходимых для разработки, тестирования и масштабирования.
                                        ')}}</div>
                                    </li>
                                    <li>{{__('Низкая прозрачность и риск мошенничества')}}
                                        <div class="smaller">{{__('Традиционные системы часто не имеют достаточного уровня прозрачности, что может породить риски мошенничества и затруднить аудит операций.
                                        ')}}</div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="feature-group bg-theme-alt split-right split-lg">
                                <div class="feature boxed bg-white-10">
                                    <div class="feature-text">
                                        <h4 class="title title-md">{{__('Внедрение блокчейн-технологий для снижения транзакционных издержек и увеличения прозрачности')}}</h4>
                                        <p>{{__('Использование блокчейн-технологий для автоматизации и упрощения процессов расчетов между участниками платформы. Это позволит сократить количество посредников, снизить комиссии и ускорить транзакции. Блокчейн обеспечит высокий уровень прозрачности, что поможет снизить риски мошенничества и упростить аудит операций.')}}</p>
                                    </div>
                                </div>
                                <div class="feature boxed bg-white-2">
                                    <div class="feature-text">
                                        <h4 class="title title-md">{{__('Создание системы вознаграждений и стейкинга для участников платформы')}}</h4>
                                        <p>{{__('Разработка системы вознаграждений, основанной на токенах SUR, которая будет стимулировать активное участие пользователей в экосистеме. Участники смогут получать токены за выполнение определенных действий, таких как участие в голосовании, предоставление услуг или привлечение новых пользователей. Также можно внедрить стейкинг-программы, где пользователи смогут зарабатывать дополнительные токены, блокируя свои активы на платформе.')}}</p>
                                    </div>
                                </div>
                                <div class="feature boxed bg-black-10">
                                    <div class="feature-text">
                                        <h4 class="title title-md">{{__('Децентрализованное управление и интеграция с партнерами')}}</h4>
                                        <p>{{__('Реализация децентрализованной модели управления, где все участники платформы смогут участвовать в принятии решений через голосование. Это позволит учесть интересы более широкой аудитории и повысит гибкость реагирования на изменения рынка. Кроме того, необходимо разработать механизмы для привлечения партнеров и обеспечения ликвидности, такие как интеграция с другими платформами и создание партнерских программ.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .block @e -->
            </div>
        </section>
        <!-- // Структура -->
        <section class="section section-solution bg-light pt-0" id="arhitech">
            <div class="container">
                <!-- Section Head @s -->
                <div class="section-head text-center wide-auto-sm">
                    <h2 class="title">{{__('Структура')}}</h2>
                    <p>{{__('структура модулей обеспечивает комплексный подход к управлению товарно-ресурсной логистикой, создавая эффективную экосистему для всех участников. ')}}</p>
                </div><!-- .section-head @e -->
                <!-- Block @s -->
                <div class="nk-block nk-block-features-s3">
                    <div class="row gutter-vr-40px justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="feature feature-s3 feature-center">
                                <div class="feature-icon feature-icon-lg">
                                    <em class="icon icon-lg ikon ikon-cloud"></em>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title title-md title-dark">{{__("Модуль Управления Ресурсами")}}:</h4>
                                    <p>{{__('Модуль отвечает за централизованное управление всеми ресурсами, доступными на платформе. Позволяет участникам эффективно отслеживать запасы, управлять поставками и оптимизировать использование ресурсов.')}}</p>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6 col-md-10">
                            <div class="feature feature-s3 feature-center">
                                <div class="feature-icon feature-icon-lg">
                                    <em class="icon icon-lg ikon ikon-safety"></em>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title title-md title-dark">{{__("Модуль Транзакций и Платежей")}}:</h4>
                                    <p>{{__('Модуль обеспечивает безопасные и эффективные финансовые операции между участниками платформы с использованием токена SUR. Он минимизирует транзакционные издержки и ускоряет процесс расчетов.')}}</p>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6 col-md-10">
                            <div class="feature feature-s3 feature-center">
                                <div class="feature-icon feature-icon-lg">
                                    <em class="icon icon-lg ikon ikon-cash"></em>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title title-md title-dark">{{{__('Модуль Стейкинга и Вознаграждений')}}}:</h4>
                                    <p>{{__('модуль внедряет систему стейкинга, позволяя участникам замораживать токены SUR для получения вознаграждений и участия в управлении платформой.')}}</p>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6 col-md-10">
                            <div class="feature feature-s3 feature-center">
                                <div class="feature-icon feature-icon-lg">
                                    <em class="icon icon-lg ikon ikon-globe"></em>
                                </div>
                                <div class="feature-text">
                                    <h4 class="title title-md title-dark">{{__('Модуль Аналитики и Прогнозирования')}}</h4>
                                    <p>{{__('Модуль предоставляет мощные инструменты для анализа данных и прогнозирования, что помогает участникам принимать обоснованные решения на основе рыночных тенденций и потребностей.')}}</p>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .block @e -->
            </div>
        </section>
        <!-- // Продажа SUR-->
        <section class="bg-theme bg-pattern-dots" id="tokensale">
            <div class="section section-tokensale tc-light">
                <div class="container">
                    <!-- Section Head @s -->
                    <div class="section-head text-center wide-auto">
                        <h2 class="title">{{__('SUR токен')}}</h2>
                        <p>{{__('Контракт токена SUR запущен в сети TON blockchain network.')}}</p>
                    </div><!-- .section-head @e -->
                    <!-- Block @s -->
                    <div class="nk-block nk-block-token mgb-m30">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="token-info bg-theme-dark">
                                    <h4 class="title title-md mb-2 text-sm-center">{{__('Информация о токене SUR')}}</h4>
                                    @if ($tokenData && $tokenData['success'])
                                           <table class="table table-s1 table-token">
                                     <tbody>
                                                    <tr>
                                                        <td><strong>Название</strong></td>
                                                        <td>{{ $tokenData['name'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Символ</strong></td>
                                                        <td>{{ $tokenData['symbol'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Десятичные знаки</strong></td>
                                                        <td>{{ $tokenData['decimals'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Адрес контракта</strong></td>
                                                        <td>{{ $tokenData['contract_address'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Общий выпуск</strong></td>
                                                        <td>{{ number_format($tokenData['total_supply'], 0, '', ' ') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Число держателей</strong></td>
                                                        <td>{{ number_format($tokenData['holders_count'], 0, '', ' ') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Цена в TON</strong></td>
                                                        <td>{{ number_format($tokenData['price_ton'], 9, '.', ' ') }} TON</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Цена в USD</strong></td>
                                                        <td>{{ number_format($tokenData['price_usd'], 6, '.', ' ') }} $</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Ликвидность (USD)</strong></td>
                                                        <td>{{ number_format($tokenData['liquidity_usd'], 2, '.', ' ') }} $</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>FDV / MCAP (USD)</strong></td>
                                                        <td>{{ number_format($tokenData['fdmc'], 2, '.', ' ') }} $</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Дата создания</strong></td>
                                                        <td>{{ \Carbon\Carbon::parse($tokenData['created_at'])->format('d.m.Y H:i') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Описание</strong></td>
                                                        <td>{{ $tokenData['description'] ?? 'N/A' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Изображение</strong></td>
                                                        <td>
                                                            @if (!empty($tokenData['image']))
                                                                <img src="{{ $tokenData['image'] }}" alt="Token Image" style="max-width: 100px;">
                                                            @else
                                                                N/A
                                                            @endif
                                                        </td>
                                                    </tr>

                                     </tbody>
                                    </table>
                                    @else
                                        <p style="text-align:center; color:red;">{{__('Ошибка загрузки с блокчейна TON')}}</p>
                                    @endif
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-5">
                                <div class="token-status bg-theme-dark">
                                    <h4 class="title title-md">{{__('ЭТАП БОНУСНОГО РАЗМЕЩЕНИЯ ТОКЕНОВ ')}}</h4>
                                    <div class="token-countdown countdown" data-date="2023/04/27"></div>
                                    <div class="progress-wrap progress-wrap-point">
                                        <span class="progress-info">{{__('Обьем этапа ')}} <span>603 870 000</span> SUR</span>
                                        <span class="progress-info">{{__('Размещено ')}} <span>59 366 777.32 </span>SUR (16%)</span>
                                        <div class="progress-bar">
                                            <div class="progress-percent bg-grad" data-percent="16"></div>

                                            <div class="progress-point progress-point-2">{{__('Бонус')}} <span>603m</span></div>
                                        </div>
                                    </div>
                                    <p><a href="{{route('gift')}}" class="btn btn-grad p-5">{{__('Получить 7.54 SUR  бесплатно сейчас')}}</a></p>
                                    <p><a href="https://dyor.io/ru/token/EQD_oJx8gODY2DTkhWQFbtm48CJLgynOdhYzD12fKaj7dx9y" class="btn btn-grad">{{__('Купить токен SUR')}}</a></p>
                                    <span class="token-min">{{__('Обязательно кошелек TonKeeper')}}</span>
                                </div>
                                <div class="bonus bg-theme-dark">
                                    <div class="bonus-info">
                                        <div class="bonus-percent">61% <small>{{__('Бонусы')}}</small></div>
                                        <div class="bonus-date">{{__('603 870 000 SUR')}}</div>
                                        <span class="bonus-badge badge-xs">{{__('сейчас')}}</span>
                                    </div>
                                    <div class="bonus-info">
                                        <div class="bonus-percent">39%<small>{{__(' Продажа')}}</small></div>
                                        <div class="bonus-date">{{__('(ICO/IDO)')}}</div>
                                    </div>
                                </div>

                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </div><!-- .section-tokensale -->
            <div class="section-tokendes">
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block nk-block-alocation mgb-m30">
                        <div class="row">
                            <div class="col-12">
                                <div class="token-alocate-item">
                                    <div class="token-alocate-graph">
                                        <span>SUR</span>
                                        <canvas class="chart-canvas" id="token-alocate"></canvas>
                                    </div>
                                    <ul class="chart-data" data-canvas="token-alocate" data-canvas-type="doughnut">
                                        <li data-color="#223fa8" data-title="{{__('Бонусная программа')}}" data-amount="61"></li>
                                        <li data-color="#8fa0df" data-title="{{__('Публичное размещение (ICO/IDO)')}}" data-amount="39"></li>

                                    </ul>
                                </div>
                            </div><!-- .col -->

                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
                <div class="nk-ovm ovm-bottom ovm-h-70 bg-light"></div><!-- .nk-ovm -->
            </div><!-- .section-tokendes -->
        </section>
        <!-- // -->
        <section class="section bg-light section-document" id="documents">
            <div class="container">
                <!-- Section Head @s -->
                <div class="section-head text-center wide-auto">
                    <h2 class="title">ICO SUR {{__('токен')}}</h2>
                    <p>{{_('Контракт токена  SUR создан в сети блокчейн TON.')}}</p>
                </div><!-- .section-head @e -->
                <!-- Block @s -->
                <div class="nk-block nk-block-document">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card card-lg">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="nk-block-img px-4 pb-4 pb-md-0">
                                            <img src="images/doc-a.png" alt="doc">
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="nk-block-text">
                                            <h4 class="title title-md">{{__('Больше информации - ')}} Whitepaper</h4>
                                            <p>{{__('Наша цель — создать инновационную товарно-ресурсную логистическую платформу, которая обеспечит эффективное и прозрачное кооперативное взаимодействие между всеми участниками цепочки поставок. ')}}</p>
                                            <ul class="btn-grp gutter-30px gutter-vr-20px">
                                                <li><a href="{{asset('assets/docs/WhitePaperSUR.pdf')}}" target="_blank" class="btn btn-grad">{{__('Читать Whitepaper')}}</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .box -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .block @e -->
            </div>
        </section>
        <!-- // -->
        <section class="section section-roadmap bg-white" id="roadmap">
            <div class="container">
                <!-- Section Head @s -->
                <div class="section-head text-center wide-auto">
                    <h6 class="title title-xs title-light">{{__('Дорожная карта проекта')}}</h6>
                 </div><!-- .section-head @e -->
                <!-- Block @s -->
                <div class="nk-block nk-block-roadmap">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="roadmap-wrap">
                                <div class="roadmap-line"></div>
                                <div class="roadmap">
                                    <div class="roadmap-year">2025</div>
                                </div>
                                <div class="roadmap roadmap-right roadmap-finished">
                                    <div class="roadmap-step">
                                        <div class="roadmap-head">
                                            <span class="roadmap-time">{{__('Март')}} 2025</span>
                                            <span class="roadmap-title">{{__('Идея, токен и запуск контракта')}}</span>
                                        </div>
                                        <p>{{__('Определение концепции: Четкое формулирование идеи вашей товарно-ресурсной логистической платформы, включая её уникальные особенности и преимущества.')}}</p>
                                        <p>{{__('Анализ рынка: Исследование потребностей целевой аудитории и существующих решений на рынке, чтобы убедиться в актуальности вашей идеи.')}}</p>
                                    </div>
                                </div>
                                <div class="roadmap roadmap-left roadmap-finished">
                                    <div class="roadmap-step">
                                        <div class="roadmap-head">
                                            <span class="roadmap-time">{{__('2 кв')}} 2025</span>
                                            <span class="roadmap-title">{{__('Запуск бонусной программы')}}</span>
                                        </div>
                                        <p>{{__('Определение критериев для получения вознаграждений.')}}</p>
                                        <p>{{__('Разработка и запуск механизма начисления токенов за выполнение действий в рамках платформы.')}}</p>

                                    </div>
                                </div>
                                <div class="roadmap roadmap-right">
                                    <div class="roadmap-step">
                                        <div class="roadmap-head">
                                            <span class="roadmap-time">{{__('3-4 кв')}} 2025</span>
                                            <span class="roadmap-title">{{__('Архитектура')}}</span>
                                        </div>
                                        <p>{{__('Определение архитектурных компонентов.Создание схемы архитектуры системы, включая фронтенд, бэкенд, базы данных и блокчейн-компоненты. Разработка RESTful или GraphQL API для взаимодействия между компонентами системы.')}}</p>
                                        <p>{{__('Разработка прототипов пользовательского интерфейса (UI). Проведение тестирования прототипов с пользователями для получения обратной связи и внесения корректировок.')}}</p>
                                    </div>
                                </div>
                                <div class="roadmap">
                                    <div class="roadmap-year">2026</div>
                                </div>
                                <div class="roadmap roadmap-right">
                                    <div class="roadmap-step">
                                        <div class="roadmap-head">
                                            <span class="roadmap-time">{{__('1-3 кв')}} 2026</span>
                                            <span class="roadmap-title">{{__('Компоненты и маркетинг')}}</span>
                                        </div>
                                        <p>{{__('Разработка фронтенд и бэкенд компонентов согласно архитектурному дизайну')}}</p>
                                        <p>{{__('Реализация маркетингового плана развития платформы, реализация УТП. Разработка стратегии для каждого канала, включая план публикаций и бюджет.')}}</p>
                                        <p>{{__('PPC и таргетированная реклама.Предоставление качественной поддержки и ресурсов для пользователей')}}</p>
                                    </div>
                                </div>
                                <div class="roadmap roadmap-left">
                                    <div class="roadmap-step">
                                        <div class="roadmap-head">
                                            <span class="roadmap-time">{{__('4 кв')}} 2026</span>
                                            <span class="roadmap-title">{{__('Реализация и интеграция')}}</span>
                                        </div>
                                        <p>{{__('Постоянная интеграция и развертывание (CI/CD). Обеспечение регулярных обновлений и исправлений на основе обратной связи от пользователей и тестирования.')}}</p>
                                        <p>{{__('Поддержка и сопровождение пользователей.Обеспечение безопасности данных и конфиденциальности.')}}</p>
                                        <p>{{__('Документация для пользователей, описывающая функциональность платформы и инструкции по использованию.')}}</p>
                                        <p>{{__('Проведение обучающих сессий для команды разработки и поддержки, чтобы они были в курсе архитектуры и функциональности платформы.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->

                </div>
                <!-- Block @e -->
            </div>
        </section>
        <!-- // -->
        <section class="section section-team bg-light" id="team">
            <div class="container">
                <!-- Block @s -->
                <div class="nk-block nk-block-team-featured team-featured">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <div class="team-featured-photo tc-light">
                                <img src="{{asset('images/team/large-a.png')}}" alt="Founder">
                                <h5 class="team-featured-info ">{{__('Вадим Коряков')}}</h5>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="team-featured-cont">
                                <h6 class="title title-xs title-light">{{__('ЗА ЭТОЙ ИДЕЕЙ')}}</h6>
                                <h2 class="title title-lg title-dark">{{__('Инициатор и основатель')}}</h2>
                                <p>{{__('КООРДИНАТОР по связям с общественностью "НАРОД" (Народной Ассоциации Российских Оздоровительных Движений)')}}
                                    <ul class="small">
                                        <li>{{__('🔹Председатель совета Потребительского общества взаимного обеспечения «Межрегиональное объединение пайщиков».')}}</li>
                                        <li>{{__('🔹Соучредитель АНО « Институт развития цифровой экономики»')}}</li>
                                        <li>{{__('🔹Директор Ассоциации разработчиков и пользователей цифровых информационных блокчейн технологий и криптовалют в рамках Брикс')}}</li>
                                        <li>{{__('🔹Советник вице-президента Ассоциации участников проекта «Международная аэрокосмическая система глобального мониторинга и прогнозирования».')}}</li>
                                        <li>{{__('🔹Директор по развитию Торговый дом « Новые технологии»')}}</li>
                                        <li>{{__('🔹Руководитель информационно аналитического отдела Краснознамённого Советского Казачьего Войска')}}</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div><!-- .row -->
                </div>
                <!-- Block @e -->
            </div>
        </section>

        <!-- // -->
        <section class="section section-m section-partners bg-light" id="partners">
            <div class="container">
                <!-- Block @s -->
                <div class="nk-block block-partners">
                    <h6 class="title title-xs title-light text-center">{{__('технологии')}}</h6>
                    <ul class="partner-list flex-lg-nowrap">
                        <li class="partner-logo"><img src="{{asset('images/partners/a.png')}}" alt="partner"></li>
                        <li class="partner-logo"><img src="{{asset('images/partners/b.png')}}" alt="partner"></li>
                        <li class="partner-logo"><img src="{{asset('images/partners/c.png')}}" alt="partner"></li>

                    </ul>
                </div>
                <!-- Block @e -->
            </div>
        </section>
    </main>
@endsection('content')
