<!DOCTYPE html>
<html lang="Ru-ru">
<head>
    <meta charset="UTF-8"/>
    <title>НПК «РВТС»</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="shortcut icon" href="{{asset('img/favicon/favicon.ico')}}" type="image/x-icon"/>
    <link rel="icon" href="{{asset('img/favicon/favicon.ico')}}" type="image/x-icon"/>
    <meta name="description" content="Научно-Производственная компания «РВТС» – разработчик умных систем учёта энергоресурсов (smart meter) и других отраслевых проектов в области Интернета вещей (IoT)"/>
    <link rel="image_src" href="https://rvts.ru/img/og/og.jpg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://rvts.ru/"/>
    <meta property="og:image" content="https://rvts.ru/img/og/og.jpg"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="1024"/>
    <meta property="og:image:height" content="512"/>
    <meta property="og:title" content="НПК «РВТС»"/>
    <meta property="og:description" content="Научно-Производственная компания «РВТС» – разработчик умных систем учёта энергоресурсов (smart meter) и других отраслевых проектов в области Интернета вещей (IoT)."/>
    <meta property="og:locale" content="Ru-ru"/>
    <meta property="og:site_name" content="https://rvts.ru/"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="https://rvts.ru/"/>
    <meta name="twitter:title" content="НПК «РВТС»"/>
    <meta name="twitter:description" content="Научно-Производственная компания «РВТС» – разработчик умных систем учёта энергоресурсов (smart meter) и других отраслевых проектов в области Интернета вещей (IoT)."/>
    <meta name="twitter:creator" content="rvts.ru"/>
    <meta name="twitter:image:src" content="https://rvts.ru/img/og/twitter.jpg"/>
    <meta name="twitter:domain" content="https://rvts.ru/"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="wrapper"><header class="header">
        <div class="container">
            <div class="header__wrap">
                <div class="header-logo"><img src="{{asset('img/svg/logo.svg')}}" alt="Лготип НПК РВТС"></div>
                <div class="header__bar">
                    <button class="btn btn--secondary header-btn js-callback-btn">Связаться с нами</button>
                    <div class="header__contacts">
                        <div><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></div>
                        <div><a href="tel:{{setting('site.phone')}}">{{setting('site.phone')}}</a></div>
                    </div>
                </div>
                <button class="btn burger header-burger js-mob-menu" title="Развернуть Меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <nav class="nav nav--header">
                <ul>
                    <li><a class="js-scroll" href="#about">О нас</a></li>
                    <li><a class="js-scroll" href="#technologies">Технологии</a></li>
                    <li><a class="js-scroll" href="#decisions">Решения</a></li>
                    <li><a class="js-scroll" href="#advantages">Преимущества</a></li>
                    <li><a class="js-scroll" href="#openings">Вакансии</a></li>
                    <li><a class="js-scroll" href="#team">Наша команда</a></li>
                    <li><a class="js-scroll" href="#contacts">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <header class="header-fix" id="js-header-fix">
        <div class="container">
            <div class="header-fix__wrap">
                <div class="header-fix-logo">
                    <img src="{{asset('img/svg/logo-revers.svg')}}" alt="Лготип НПК РВТС">
                </div>
                <nav class="nav">
                    <ul>
                        <li class="hide"><a class="js-scroll" href="#about">О нас</a></li>
                        <li><a class="js-scroll" href="#technologies">Технологии</a></li>
                        <li><a class="js-scroll" href="#decisions">Решения</a></li>
                        <li><a class="js-scroll" href="#advantages">Преимущества</a></li>
                        <li><a class="js-scroll" href="#openings">Вакансии</a></li>
                        <li class="hide"><a class="js-scroll" href="#team">Наша команда</a></li>
                        <li><a class="js-scroll" href="#contacts">Контакты</a></li>
                    </ul>
                </nav>
                <button class="btn burger" id="js-short-menu" title="Развернуть Меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a href="tel:+74958990490" class="header-fix-tel">{{setting('site.phone')}}</a>
                <button class="btn burger header-burger js-mob-menu" title="Развернуть Меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <nav class="mob-menu" id="js-mob-menu">
        <button class="btn mob-menu__close js-mob-menu" title="Закрыть меню">
            <img src="{{asset('img/svg/close.svg')}}" alt="">
        </button>
        <ul>
            <ul>
                <li><a class="js-scroll js-mob-menu" href="#about">О нас</a></li>
                <li><a class="js-scroll js-mob-menu" href="#technologies">Технологии</a></li>
                <li><a class="js-scroll js-mob-menu" href="#decisions">Решения</a></li>
                <li><a class="js-scroll js-mob-menu" href="#advantages">Преимущества</a></li>
                <li><a class="js-scroll js-mob-menu" href="#openings">Вакансии</a></li>
                <li><a class="js-scroll js-mob-menu" href="#team">Наша команда</a></li>
                <li><a class="js-scroll js-mob-menu" href="#contacts">Контакты</a></li>
            </ul>
        </ul>
        <div class="header__contacts">
            <div><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></div>
            <div><a href="tel:+{{setting('site.phone')}}">{{setting('site.phone')}}</a></div>
        </div>
        <button class="btn btn--secondary-dark header-btn js-callback-btn">Связаться с нами</button>
    </nav>


    <main class="main">
        <section class="hero">
            @if(isset($sliders))
            <div class="hero-bg" id="js-hero-bg">

                @foreach($sliders as $slider)
                    <div><div class="hero-bg-slide"><img src="{{'storage/'.$slider->image ?? asset('img/pic/hero-3-min.jpg')}}" alt=""></div></div>
                @endforeach
            </div>
            <div class="hero-particles-js hero-particles-js--left" id="js-particles-js-left"></div>
            <div class="hero-particles-js hero-particles-js--right" id="js-particles-js-right"></div>
            <div class="hero-slider" id="js-hero">
                    @foreach($sliders as $slider)
                        <div>
                            <div class="hero-slide">
                                <div class="container">
                                    <div class="hero-slide__wrap">
                                        <div class="hero-slide__content">
                                            <h2 class="hero-slide__title">{{$slider->title}}</h2>
                                            <p class="hero-slide__txt">{{$slider->line1}} <br> {{$slider->line2}} <br> {{$slider->line3}}</p>
                                            <button class="btn btn--revers hero-slide__btn js-order-btn">{{$slider->button}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
              {{--  <div>
                    <div class="hero-slide">
                        <div class="container">
                            <div class="hero-slide__wrap">
                                <div class="hero-slide__content">
                                    <h2 class="hero-slide__title">Весь спектр технологий Интернета вещей</h2>
                                    <p class="hero-slide__txt">LPWAN для беспроводной передачи данных. <br>Для проводной — G3 PLC и RS-485. <br>Стандарты GSM и LTE для телематических решений.</p>
                                    <button class="btn btn--revers hero-slide__btn js-order-btn">Узнать больше</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="hero-slide">
                        <div class="container">
                            <div class="hero-slide__wrap">
                                <div class="hero-slide__content">
                                    <h2 class="hero-slide__title">RVTS Cloud</h2>
                                    <p class="hero-slide__txt">Умные приборы интеллектуального учета ресурсов. <br>Продвинутая система диспетчеризации.<br>Облачные решения.</p>
                                    <button class="btn btn--revers hero-slide__btn js-order-btn">Узнать больше</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="hero-slide">
                        <div class="container">
                            <div class="hero-slide__wrap">
                                <div class="hero-slide__content">
                                    <h2 class="hero-slide__title">Решения для Умного города</h2>
                                    <p class="hero-slide__txt">Безопасность транспорта и грузоперевозок. <br>Контроль освещения улиц и дорог. <br>Управление городской инфраструктурой.</p>
                                    <button class="btn btn--revers hero-slide__btn js-order-btn">Узнать больше</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}

            </div>
            @endif
        </section>
        <section class="sec about" id="about">
            <div class="container">
                <h2 class="sec-title">О нас</h2>
                <div class="sec-txt">
                    <p>{!! nl2br(setting('site.about_us')) ?? '' !!}</p>
                </div>
            </div>
        </section>
        <section class="technologies" id="technologies">
            <div class="container">
                <h2 class="sec-title">Технологии, которые мы используем</h2>
                <div class="sec-txt">
                    <p>{!! nl2br(setting('site.tech_section')) ?? '' !!}</p>
                </div>
                <div class="technologies__list">
                    <section class="technologies-item">
                        <img src="{{asset('img/svg/tech-1.svg')}}" alt="" class="technologies-item__pic">
                        <h3 class="technologies-item__title">NB-IoT</h3>
                        <p class="technologies-item__txt">Технология NB-IoT улучшает энергопотребление устройств и пропускную способность систем. При этом NB-IoT охватывает сигналом большие территории по сравнению с LTE. </p>
                    </section>
                    <section class="technologies-item">
                        <img src="{{asset('img/svg/tech-2.svg')}}" alt="" class="technologies-item__pic">
                        <h3 class="technologies-item__title">UNB</h3>
                        <p class="technologies-item__txt">В России с минимальными ограничениями доступна полоса шириной лишь 500 кГц. UNB обеспечивает такое эффективное использование радиочастотного спектра, что даже в ней можно уместить тысячи каналов.</p>
                    </section>
                    <section class="technologies-item">
                        <img src="{{asset('img/svg/tech-3.svg')}}" alt="" class="technologies-item__pic">
                        <h3 class="technologies-item__title">GSM</h3>
                        <p class="technologies-item__txt">Глобальный стандарт цифровой мобильной связи, получивший широкое распространение и ставший своего рода классикой для современных систем коммуникаций.</p>
                    </section>
                    <section class="technologies-item">
                        <img src="{{asset('img/svg/tech-4.svg')}}" alt="" class="technologies-item__pic">
                        <h3 class="technologies-item__title">PLC</h3>
                        <p class="technologies-item__txt">PLC позволяет использовать силовые электросети в качестве физической среды для обмена информацией. Технология обеспечивает высокий уровень информационной безопасности  и стабильность соединения.</p>
                    </section>
                    <section class="technologies-item">
                        <img src="{{asset('img/svg/tech-5.svg')}}" alt="" class="technologies-item__pic">
                        <h3 class="technologies-item__title">LPWAN</h3>
                        <p class="technologies-item__txt">Когда требуется построить систему связи максимально дешево и просто, чаще всего используется LPWAN. Недорогие устройства и простота в эксплуатации являются немаловажными преимуществами данной технологии.</p>
                    </section>
                    <section class="technologies-item">
                        <img src="{{asset('img/svg/tech-6.svg')}}" alt="" class="technologies-item__pic">
                        <h3 class="technologies-item__title">NB-I</h3>
                        <p class="technologies-item__txt">Мы завершаем разработку NB-I – протокола промышленного стандарта обмена данными нового поколения. Уже в ближайшее время будем готовы начать интеграционные процессы с производственными предприятиями.</p>
                    </section>
                </div>
                <div class="technologies__bar">
                    <button class="btn btn--secondary js-order-btn">Узнать подробнее<span> о наших технологиях</span></button>
                </div>
            </div>
        </section>
        <section class="sec decisions" id="decisions">
            <div class="container">
                <h2 class="sec-title">Готовые решения</h2>
                <div class="decisions__wrap">
                    @php $i = 1 @endphp
                    @foreach($decisions as $key => $d)
                        @if($key != 0)
                        <div class="decisions__hide hided">
                        @endif
                            @foreach($d as $decision)
                                <section class="decision">
                                    <div class="decision__pic"><img src="{{asset('storage/'.$decision['image'])}}" alt=""></div>
                                    <div class="decision__main">
                                        <div>
                                            {!! nl2br($decision['text']) !!}
                                        </div>
                                        <div class="decision__footer">
                                            @if(empty($decision['button_link']))
                                                <button class="btn btn--primery decision__btn js-order-btn">{{$decision['button_name']}}</button>
                                            @else
                                                <a class="btn btn--primery decision__btn" href="{{$decision['button_link']}}" target="_blank">{{$decision['button_name']}}</a>
                                            @endif
                                            @if(!empty($decision['pdf_link']))
                                                    <a href="{{$decision['pdf_link']}}" target="_blank" class="decision__download">
                                                        <span>Узнать подробнее</span><span>PDF</span>
                                                    </a>
                                            @endif
                                        </div>
                                    </div>
                                </section>
                            @endforeach
                        @if($key != 0)
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="decisions__footer">
                    <button class="btn btn--secondary-blue js-show-more">Еще решения</button>
                </div>
            </div>
        </section>
        <section class="advantages" id="advantages">
            <div class="container">
                <h2 class="sec-title">Преимущества работы с нами</h2>
                <div class="advantages__wrap">
                    <section class="advantage">
                        <img src="{{asset('img/svg/advantages-1.svg')}}" alt="" class="advantage__icn">
                        <h3 class="advantage__title">Быстрый ввод в эксплуатацию</h3>
                        <p class="advantage__txt">Применение модульности и виртуализации позволяет нам быстро вводить системы в эксплуатацию без существенной переработки инфраструктуры заказчика.</p>
                    </section>
                    <section class="advantage">
                        <img src="{{asset('img/svg/advantages-2.svg')}}" alt="" class="advantage__icn">
                        <h3 class="advantage__title">Безопасность передачи и защита данных</h3>
                        <p class="advantage__txt">Мы придерживаемся высочайших стандартов информационной безопасности. Каждый наш проект сопровождается аналитической работой соответствующих специалистов.</p>
                    </section>
                    <section class="advantage">
                        <img src="{{asset('img/svg/advantages-3.svg')}}" alt="" class="advantage__icn">
                        <h3 class="advantage__title">Гибкий подход</h3>
                        <p class="advantage__txt">Нестандартные проекты и уникальные запросы клиентов всегда находят у нас понимание. Наши решения полностью кастомизируются под ваши потребности.</p>
                    </section>
                    <section class="advantage">
                        <img src="{{asset('img/svg/advantages-4.svg')}}" alt="" class="advantage__icn">
                        <h3 class="advantage__title">Единая информационная система</h3>
                        <p class="advantage__txt">Единая информационная среда НПК «РВТС» позволяет осуществлять технический мониторинг и коммерческий учёт в режиме онлайн.</p>
                    </section>
                    <section class="advantage">
                        <img src="{{asset('img/svg/advantages-5.svg')}}" alt="" class="advantage__icn">
                        <h3 class="advantage__title">Глубокое знание потребностей наших клиентов</h3>
                        <p class="advantage__txt">Мы умеем предвосхищать и знаем «узкие места» при построении любой системы. Именно за это нас ценят и выбирают лидеры в своих областях.</p>
                    </section>
                    <section class="advantage">
                        <img src="{{asset('img/svg/advantages-6.svg')}}" alt="" class="advantage__icn">
                        <h3 class="advantage__title">Многолетний отраслевой опыт команды</h3>
                        <p class="advantage__txt">За плечами нашей команды десятки сложнейших инфраструктурных проектов. Наш опыт даёт понимание, какие решения будут наиболее эффективны.</p>
                    </section>
                </div>
            </div>
        </section>
        <section class="sec openings" id="openings">
            <div class="container">
                <h2 class="sec-title">Вакансии</h2>
                <div class="openings-top">
                    <div class="openings-top__logo">
                        <img src="{{asset('img/svg/logo-grey.svg')}}" alt="НПК РВТС">
                    </div>
                    <div class="openings-top__main">
                      {{--  <p>Требования к опыту работы  – не менее 3 лет.</p>
                        <p>Условия:</p>
                        <ul>
                            <li>офисные и удаленные рабочие места;</li>
                            <li>оформление по ТД или по договору ГПХ; </li>
                            <li>возможность заключения ДП для самозанятых и профильных ИП.</li>
                        </ul>--}}
                        {!! nl2br(setting('site.vacantion_title')) !!}
                    </div>
                </div>
                <div class="openings__wrap">
                    <section class="openings-item">
                        <div class="openings-item__pic"><img src="{{asset('img/pic/vak-1-min.jpg')}}" alt=""></div>
                        <div class="openings-item__main">
                          <div>
                              {!! nl2br($vacantions[0]['text']) !!}
                          </div>
                        </div>
                        <div class="openings-item__footer">
                            <button class="btn btn--primery openings-item__btn js-order-btn">Подать заявку</button>
                        </div>
                    </section>

                    <section class="openings-item">
                        <div class="openings-item__pic"><img src="{{asset('img/pic/vak-2-min.jpg')}}" alt=""></div>
                        <div class="openings-item__main">
                           <div> {!! nl2br($vacantions[1]['text']) !!}</div>
                        </div>
                        <div class="openings-item__footer">
                            <button class="btn btn--primery openings-item__btn js-order-btn">Подать заявку</button>
                        </div>
                    </section>

                    <section class="openings-item">
                        <div class="openings-item__pic"><img src="{{asset('img/pic/vak-3-min.jpg')}}" alt=""></div>
                        <div class="openings-item__main">
                         <div>
                             {!! nl2br($vacantions[2]['text']) !!}
                         </div>
                        </div>
                        <div class="openings-item__footer">
                            <button class="btn btn--primery openings-item__btn js-order-btn">Подать заявку</button>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <section class="team" id="team">
            <div class="container">
                <h2 class="sec-title">Наша команда</h2>
                <div class="sec-txt">
                    <p>{!! nl2br(setting('site.our_team')) ?? '' !!}</p>
                </div>
            </div>
        </section>
        <section class="contacts" id="contacts">
            <div class="container">
                <h2 class="sec-title">Контакты</h2>
                <div class="contacts__wrap">
                    <div class="contacts__item"><a href="tel:{{setting('site.phone')}}">{{setting('site.phone')}}</a></div>
                    <div class="contacts__item"><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></div>
                    <div class="contacts__item"><address>{{setting('site.address')}}</address></div>
                </div>
            </div>
            <div class="map" id="js-map"></div>
        </section>
        <script src="https://api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&lang=ru-RU&scroll=true"></script>
        <script>
            window.addEventListener("DOMContentLoaded", function(){
                ymaps.ready(init);
                function init() {
                    var map = new ymaps.Map('js-map', {
                        center: [{{$coordinates[0]}}, {{$coordinates[1]}}],
                        zoom: 16,
                        controls: []
                    });
                    var myPlacemark = new ymaps.GeoObject({
                        geometry: {
                            type: "Point",
                            coordinates: [{{$coordinates[0]}}, {{$coordinates[1]}}]
                        }
                    });
                    map.geoObjects.add(myPlacemark);
                    map.behaviors.disable('scrollZoom')
                };
            });
        </script>
    </main><footer class="footer">
        <div class="container">
            <nav class="nav nav--footer">
                <ul>
                    <li><a class="js-scroll" href="#about">О нас</a></li>
                    <li><a class="js-scroll" href="#technologies">Технологии</a></li>
                    <li><a class="js-scroll" href="#decisions">Решения</a></li>
                    <li><a class="js-scroll" href="#advantages">Преимущества</a></li>
                    <li><a class="js-scroll" href="#openings">Вакансии</a></li>
                    <li><a class="js-scroll" href="#team">Наша команда</a></li>
                    <li><a class="js-scroll" href="#contacts">Контакты</a></li>
                </ul>
            </nav>
            <div class="footer__wrap">
                <div class="nav nav--short">
                    <ul>
                        <li><a href="polit.pdf">Политика конфиденциальности</a></li>
                    </ul>
                </div>
                <div class="footer__contacts">
                    <div><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></div>
                    <div><a href="tel:{{setting('site.phone')}}">setting('site.phone')</a></div>
                </div>
                <button class="btn btn--secondary-dark footer__btn js-callback-btn">Связаться с нами</button>
            </div>
            <div class="bdk">
                Создание сайта <a href="https://bigdatak.com/" target="_blank">Big Data Key</a>
            </div>
            <p class="footer-copyright">© НПК РВТС 2021</p>
        </div>
    </footer><div class="popup js-popup" id="js-popup">
        <div class="popup__overlay js-close-popup"></div>
        <div class="popup__main">
            <button class="btn popup__close js-close-popup" title="Закрыть окно">
                <img src="{{asset('img/svg/close.svg')}}" alt="">
            </button>
            <h2 class="popup__title js-popup-title">Связаться с нами</h2>
            <form action="{{route('send')}}" method="POST" class="popup__form js-form-val">
                @csrf
                <input hidden type="text" name="title" class="js-hide-input">
                <input required class="input" type="text" name="name" placeholder="Имя">
                <input required class="input js-val js-tel" type="tel" name="tel" placeholder="Телефон">
                <button class="btn btn--primery popup__btn" type="submit">Отправить заявку</button>
                <sub class="popup__sub">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</sub>
            </form>
        </div>
    </div>

    <div class="popup js-popup" id="js-confirm">
        <div class="popup__overlay js-close-popup"></div>
        <div class="popup__main">
            <button class="btn popup__close js-close-popup" title="Закрыть окно">
                <img src="{{asset('img/svg/close.svg')}}" alt="">
            </button>
            <h2 class="popup__title">Ваша заявка принята</h2>
            <p class="popup__txt">В ближайшее время с вами свяжется менеджер для уточнения деталей</p>
        </div>
    </div>

</div>
<script src="{{asset('js/vendors.min.js')}}"></script>
<script src="{{asset('js/scripts.min.js')}}"></script>
</body>
</html>
