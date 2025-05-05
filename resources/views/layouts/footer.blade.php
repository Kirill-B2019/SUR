<!-- Footer -->
<footer class="nk-footer bg-theme-grad">
    @if(Route::is('home'))
    <section class="section no-pdy overflow-hidden section-contact bg-transparent" id="contact">
        <div class="container">
            <!-- Block @s -->
            <div class="nk-block block-contact">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-6">
                        <div class="contact-wrap split split-left split-lg-left bg-white">
                            <h5 class="title title-md">{{__('Связаться с нами')}}</h5>
                            <form class="nk-form-submit" action="#" method="post">
                                <div class="field-item">
                                    <input name="contact-name" type="text" class="input-line required">
                                    <label class="field-label field-label-line">{{__('Имя')}}</label>
                                </div>
                                <div class="field-item">
                                    <input name="contact-email" type="email" class="input-line required email">
                                    <label class="field-label field-label-line">{{__('Ваш email')}}</label>
                                </div>
                                <div class="field-item">
                                    <textarea name="contact-message" class="input-line input-textarea required"></textarea>
                                    <label class="field-label field-label-line">{{__('Сообщение')}}</label>
                                </div>
                                <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-grad">{{__('Отправить')}}</button>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-results"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="contact-wrap split split-right split-lg-right bg-genitian bg-theme tc-light">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <ul class="contact-list">
                                    <li>
                                        <em class="contact-icon fas fa-globe"></em>
                                        <div class="contact-text">
                                            <h6>ICO SUR</h6>
                                            <span>surpay.io</span>
                                        </div>
                                    </li>

                                    <li>
                                        <em class="contact-icon fas fa-envelope"></em>
                                        <div class="contact-text">
                                            <span>sur@surpay.io</span>
                                        </div>
                                    </li>
                                    <li>
                                        <em class="contact-icon fas fa-paper-plane"></em>
                                        <div class="contact-text">
                                            <span>{{__('Присоединяйтесь в Telegram')}}</span>
                                        </div>
                                    </li>
                                </ul>
                                {{-- <div class="contact-social">
                                     <h6>{{__('Станьте частью нашего сообщества')}}</h6>
                                     <ul class="social-links">
                                         <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                                         <li><a href="#"><em class="fab fa-medium-m"></em></a></li>
                                         <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                         <li><a href="#"><em class="fab fa-youtube"></em></a></li>
                                         <li><a href="#"><em class="fab fa-bitcoin"></em></a></li>
                                         <li><a href="#"><em class="fab fa-github"></em></a></li>
                                     </ul>
                                 </div>--}}
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .block @e -->
        </div>
        <div class="nk-ovm ovm-top ovm-h-60 bg-light"></div><!-- .nk-ovm -->
    </section>
    @endif
    <!-- // -->
    <section class="section section-footer tc-light bg-transparent">
        <div class="container">
            <!-- Block @s -->
            <div class="nk-block block-footer mgb-m30">
                <div class="row">
                    <div class="col-lg-6 col-sm-4">
                        <div class="wgs wgs-menu">
                            <h6 class="wgs-title">SURPAY</h6>
                            <div class="wgs-body">
                                <ul class="wgs-links">
                                    <li><a href="{{route('home')}}#about">{{__('О платформе')}}</a></li>
                                    <li><a href="{{route('home')}}#arhitech">{{__('Структура')}}</a></li>
                                    <li><a href="{{route('home')}}#features">{{__('О токене SUR')}}</a></li>
                                    <li><a href="{{route('home')}}#roadmap">{{__('Дорожная карта')}}</a></li>
                                    <li><a href="{{route('home')}}#wp"><strong>{{__('White Paper')}}</strong></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->

                    <div class="col-lg-6 order-lg-first">
                        <div class="wgs wgs-text">
                            <div class="wgs-body">
                                <a href="./" class="wgs-logo">
                                    <img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo">
                                </a>
                                <p>Copyright &copy; 2025 ICO SUR. <br>All rights reserved. </p>
                                <p class="copyright-text">Шаблон от KB для SURpay.iO.</p>
                                <p>
                                    {{__('Поставщик данных')}}
                                    <a href="https://dyor.io/getapi" target="_blank" style="display: inline-flex;">
                                        DYOR.io <img src="https://dyor.io/img/logos/dyorLogo.svg" alt="DYOR.io logo" width="16" height="16" style="margin-left: 4px;" />
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .block @e -->
        </div>
    </section>
    <div class="nk-ovm shape-b"></div>
</footer>
