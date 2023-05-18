@extends('layouts.app')
@section('content')
    {{-- <section>
        <div class="container">
            <ul class="nav col-12 col-lg-auto mx-auto mb-2 justify-content-center mb-md-0">
                <li><a class="nav-link th px-2 text-secondary">+7 (3812) 90-62-03</a></li>
                <li><a href="##" class="nav-link th px-2 text-dark">Записаться на сервис</a></li>
                <li><a href="" class="nav-link th px-2 text-dark">Заказать звонок</a></li>
                <li><a href="#" class="nav-link th px-2 text-dark">Наши услуги</a></li>
                <li><a href="#" class="nav-link th px-2 text-dark">Блог</a></li>
                <li><a href="#" class="nav-link th px-2 text-dark">Отзывы</a></li>
                <li><a href="filials" class="nav-link th px-2 text-dark">Филиалы</a></li>
            </ul>
        </div>
    </section> --}}

    {{-- шапка --}}

    <header class="p-3 bg-light text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="home" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="../public/photo/logo/logo.png" width="125">
                </a>

                {{-- <form class="col-12 col-lg-auto mx-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Поисковая система..."aria-label="Search">
                </form> --}}

                <ul class="nav col-12 col-lg-auto mx-auto mb-2 justify-content-center mb-md-0">
                    <li><a class="nav-link th px-2 text-secondary">+7 (3812) 90-62-03</a></li>
                    <li><a href="#" class="nav-link th px-2 text-dark" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Записаться на сервис</a></li>
                    <li><a href="" class="nav-link th px-2 text-dark">Заказать звонок</a></li>
                    <li><a href="#" class="nav-link th px-2 text-dark">Наши услуги</a></li>
                    <li><a href="#" class="nav-link th px-2 text-dark">Блог</a></li>
                    <li><a href="#" class="nav-link th px-2 text-dark">Отзывы</a></li>
                    <li><a href="filials" class="nav-link th px-2 text-dark">Филиалы</a></li>
                </ul>

                <div class="">
                    @guest
                        @if (Route::has('login'))
                            <a class="gradient-button" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        @endif

                        @if (Route::has('register'))
                            <a class="gradient-button" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        @endif
                    @else
                        <a class="gradient-button" href="{{ route('AdminProfile') }}">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="gradient-button" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </header>

    {{-- Слайдер --}}

    <div class="my-carousel">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../public/photo/slider/autosalon.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-2 text-start">Жестяной Ремонт:</h5>
                        <p class="text-start">Жестяно-сварочные работы</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../public/photo/slider/autosalon2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-2 text-start">РАССРОЧКА НА РЕМОНТ И ЗАПЧАСТИ</h5>
                        <p class="text-start">Без комиссии и процентов сроком на 3, 4 или 6 месяцев</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../public/photo/slider/autosalon3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-2 text-start">ЗАМЕНА МАСЛА В ДВС БЕСПЛАТНО</h5>
                        <p class="text-start">При покупке масла и фильтра в сети автосервиса AutoWorks</p>
                    </div>
                    <a name="yslygi">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h2 class="title text-center py-3">Оставтье заявку</h2>
                        <h5 class="title text-center py-2"> и наш менеджер свяжется с вами в ближайшее время</h5>
                        <div class="anketa d-flex align-items-center flex-wrap justify-content-center">
                            <form action="mail.php" method="POST">
                                <div class="form-group">
                                    <label for="">Ваше имя</label>
                                    <input type="text" class="form-control" id="" name="user_name"
                                        placeholder="Например, Иван">
                                </div>

                                <div class="form-group">
                                    <label for="">Введите ваш номер телефона</label>
                                    <input type="text" class="form-control" id="" name="user_tel"
                                        placeholder="8(913)-653-78-43">
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Отправить" class="gradient-button" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    {{-- Наши услуги --}}

    <section id="advertisers" class="advertisers-service-sec pt-5">
        <div class="section-header text-center">
            <h2 class="fw-bold fs-1">
                Наши
                <span class="span-text">услуги </span>
            </h2>
            <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
        </div>
        <div class="container">
            <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
                <div class="col">
                    <div class="service-card">
                        <h3>Покраска:</h3>
                        <p>Автомобиля, деталей</p>
                    </div>
                </div>
                <div class="col">
                    <div class="service-card">
                        <h3>Полировка:</h3>
                        <p>Полировка автомобиля</p>
                    </div>
                </div>
                <div class="col">
                    <div class="service-card">
                        <h3>Ремонт:</h3>
                        <p>Вмятин, осколков, царапин</p>
                    </div>
                </div>
                <div class="col">
                    <div class="service-card">
                        <h3>Ремонт по маркам:</h3>
                        <p>Любые марки машин</p>
                    </div>
                </div>
                <div class="col">
                    <div class="service-card">
                        <h3>Жестяной ремонт:</h3>
                        <p>Жестяно-сварочные работы</p>
                    </div>
                </div>
                <div class="col">
                    <div class="service-card">
                        <h3>Антикоррозийная обработка:</h3>
                        <p>Замена масла</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- О нас --}}

    <section>
        <div class="row">
            <div class="section-header text-center mt-5">
                <h2 class="fw-bold fs-1">
                    Наши
                    <span class="span-text">приемущества </span>
                </h2>
                <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
            </div>
        </div>
        <div class="container">
            <div class="container-card">
                <div class="card-main">
                    <div class="box">
                        <div class="content">
                            <img src="../public/photo/card/quality.png" width="125">
                            <div class="container mt-3">
                                <h3>Качество услуг</h3>
                                <p>Применяем строгие стандарты качества</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-main">
                    <div class="box">
                        <div class="content">
                            <img src="../public/photo/card/prise.png" width="125">
                            <div class="container mt-3">
                                <h3>Адекватные цены</h3>
                                <p>Рассчитаем расходы в минимальную цену</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-main">
                    <div class="box">
                        <div class="content">
                            <img src="../public/photo/card/clock.png" width="125">
                            <div class="container mt-3">
                                <h3>Соблюдаем сроки</h3>
                                <p>Выдача автомобиля вовремя!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>

    </section>

    <section class="map" id="map">
        <div class="section-header text-center mb-5">
            <h2 class="fw-bold fs-1">
                Где нас
                <span class="span-text">найти </span>
            </h2>
            <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
        </div>
        <div class="container">
            <div class="align-item-center" style="position:relative;overflow:hidden;"><a
                    href="https://yandex.ru/maps/66/omsk/?utm_medium=mapframe&utm_source=maps"
                    style="color:#eee;font-size:12px;position:absolute;top:0px;">Омск</a><a
                    href="https://yandex.ru/maps/66/omsk/house/yeniseyskaya_ulitsa_1_9/Y0oYdQNiT0UGQFtufXV2d3pgbA==/?indoorLevel=1&ll=73.342601%2C54.976638&utm_medium=mapframe&utm_source=maps&z=17.15"
                    style="color:#eee;font-size:12px;position:absolute;top:14px;">Енисейская улица, 1/9 —
                    Яндекс Карты</a><iframe
                    src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=73.342601%2C54.976638&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NzE0MDU1NBI80KDQvtGB0YHQuNGPLCDQntC80YHQuiwg0JXQvdC40YHQtdC50YHQutCw0Y8g0YPQu9C40YbQsCwgMS85IgoNaa-SQhUU6FtC&z=17.15"
                    width="1500" height="400" frameborder="1" allowfullscreen="true"
                    style="position:relative;"></iframe></div>
        </div>
    </section>

    <a href="https://t.me/+Ul7IGpldLyk5ZGJi">

        <div class="cards-list">

            <div class="cardpost 1">
                <div class="card_image"> <img src="../public/photo/card/qrcode.png" /> </div>

            </div>

    </a>

    <a href="https://vk.com/fucccckingbitch">

        <div class="cardpost 2">
            <div class="card_image">
                <img src="../public/photo/card/vkn.png" />
            </div>
        </div>

    </a>

    <a href="">

        <div class="cardpost 3">
            <div class="card_image">
                <img src="https://media.giphy.com/media/5a3xbeZj7AkqG8197S/giphy.gif" />
            </div>
        </div>

    </a>

    <a href="">

        <div class="cardpost 3">
            <div class="card_image">
                <img src="https://media.giphy.com/media/OrNkIcgmjBQeFM1vEs/giphy.gif" />
            </div>
        </div>

    </a>

    <a href="">

        <div class="cardpost 4">
            <div class="card_image">
                <img src="https://media.giphy.com/media/l41YmiCZ8HXvVl5M4/giphy.gif" />
            </div>
            {{-- <div class="card_title title-black">
            <p>Card Title</p>
          </div> --}}
        </div>

    </a>

    </div>

    {{-- футер --}}

    <footer>
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <img src="../public/photo/logo/logo.png" width="125">
                </div>
                <div class="media-icons">
                    {{-- <a href="#"><i class="fab fa-facebook">VK</i></a>
              <a href="https://www.instagram.com/AutoWorks/"><i class="fab fa-instagram">INS</i></a> --}}
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Полезные ссылки</li>
                    <li><a class="th" href="#">Главная</a></li>
                    <li><a class="th" href="{% url 'about' %}">О нас</a></li>
                    <li><a class="th" href="#yslygi">Наши услуги</a></li>
                    <li><a class="th" href="{% url 'about' %}">Филиалы</a></li>

                </ul>
                <ul class="box">
                    <li class="link_name">Полезные ссылки</li>
                    <li><a class="th" href="#">Главная</a></li>
                    <li><a class="th" href="{% url 'about' %}">О нас</a></li>
                    <li><a class="th" href="#yslygi">Наши услуги</a></li>
                    <li><a class="th" href="{% url 'about' %}">Филиалы</a></li>

                </ul>
                <ul class="box">
                    <li class="link_name">Полезные ссылки</li>
                    <li><a class="th" href="#">Главная</a></li>
                    <li><a class="th" href="{% url 'about' %}">О нас</a></li>
                    <li><a class="th" href="#yslygi">Наши услуги</a></li>
                    <li><a class="th" href="{% url 'about' %}">Филиалы</a></li>

                </ul>
                <ul class="box">
                    <li class="link_name">Полезные ссылки</li>
                    <li><a class="th" href="#">Главная</a></li>
                    <li><a class="th" href="{% url 'about' %}">О нас</a></li>
                    <li><a class="th" href="#yslygi">Наши услуги</a></li>
                    <li><a class="th" href="{% url 'about' %}">Филиалы</a></li>

                </ul>
                <ul class="box">
                    <li class="link_name">Наши контакты</li>
                    <li><a class="th">+7 (3812) 90-62-03</a></li>
                    <li><a class="th" target="on_blank"
                            href="mailto:'connectpicoindia@gmail.com'">AutoWorksOffical@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">АвтоМир.ru © 2023 <a href="#">Prod by lomt1k & Creeze.</a></span>
            </div>
        </div>
    </footer>
    <script></script>
@endsection
