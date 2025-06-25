@extends('layouts.main')

@section('content')
<section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent border-bottom border-CustomBorder border-3">
        <div class="container">
          <!--Logo-->
          <a class="navbar-brand d-flex align-items-center me-0"  href="{{ url('/') }}">
            <img src="/img/logo.svg" class="me-2" style="width: 40px; height: 40px; object-fit: contain" alt="PowerApp Logo" />
            <h4 class="headlines mb-0">PowerApp</h4>
          </a>
          <!--Toggle Btn-->
          <button
            class="navbar-toggler shadow-none border-0"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--SideBar-->
          <div
            class="sidebar offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <!--SideBar Header-->
            <div class="offcanvas-header text-CustomWhite border-bottom">
              <img src="/img/logo.svg" class="me-2" style="width: 40px; height: 40px; object-fit: contain" alt="PowerApp Logo" />
              <h4 class="offcanvas-title headlines mb-0" id="offcanvasNavbarLabel">PowerApp</h4>
              
              <button
                type="button"
                class="btn-close btn-close-CustomWhite shadow-none"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <!--SideBar Body-->
            <div class="offcanvas-body d-flex flex-lg-row flex-column p-4">
              <ul
                class="navbar-nav text-nowrap justify-content-center aligh-items-center fs-5 flex-grow-1 pe-3"
              >
                <li class="nav-item mx-2">
                  <a class="nav-link " aria-current="page" href="{{ url('/') }}"
                    >Главная</a
                  >
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="{{ url('/product') }}">Портфолио</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="{{ url('/blog') }}">Блог</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link active" href="{{ url('/contact') }}">Контакты</a>
                </li>
              </ul>

              <div class="d-flex">
                @if (Route::has('login'))
                            <nav class="d-flex flex-wrap justify-content-center gap-3">
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="btn btn-CustomDimPrimary text-CustomWhite headlines fs-6 mx-auto px-3 py-2 rounded-3 d-flex aligh-items-center justify-content-center"
                                    >
                                        Мой профиль
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-CustomDimPrimary text-CustomWhite headlines fs-6 mx-auto px-3 py-2 rounded-3 d-flex aligh-items-center justify-content-center"
                                    >
                                        Вход
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn btn-CustomDimPrimary text-CustomWhite headlines fs-6 mx-auto px-3 py-2 rounded-3 d-flex aligh-items-center justify-content-center"
                                        >
                                            Регистрация
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                  @endif
              </div>
            </div>
          </div>
        </div>
      </nav>
</section>



<section class="contacts mb-5 bg-CustomBrown" id="contacts">
    <div class="mt-2 mb-5 pt-1 pb-5 bg-CustomDark">
        <h5 class="text-CustomPrimary text-center">Наши контакты</h5>
        <h1 class="text-CustomWhite text-center headlines mx-5 px-3">
          Как с нами связаться
        </h1>
    </div>

    <div class="container pb-4 CustomWidth">
        <div class="row d-flex flex-column flex-md-row border-0">
            <div class="col-md-5 py-4 px-4 my-md-auto text-CustomWhite order-2 order-md-1">
                <div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt me-3 mt-1 text-CustomPrimary"></i>
                        <div>
                            <h4 class="headlines">Адреса офисов</h4>
                            <p class="mb-1">Москва, ул. Тверская, д. 7</p>
                            <p class="mb-1">Санкт-Петербург, Невский пр-т, д. 28</p>
                            <p>Екатеринбург, ул. Ленина, д. 52</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-phone-alt me-3 mt-1 text-CustomPrimary"></i>
                        <div>
                            <h4 class="headlines">Телефоны</h4>
                            <p class="mb-1">+7 (495) 123-45-67</p>
                            <p>+7 (800) 100-20-30</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-envelope me-3 mt-1 text-CustomPrimary"></i>
                        <div>
                            <h4 class="headlines">Email</h4>
                            <p class="mb-1">info@powerapp.ru</p>
                            <p>support@powerapp.ru</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <i class="fas fa-clock me-3 mt-1 text-CustomPrimary"></i>
                        <div>
                            <h4 class="headlines">Часы работы</h4>
                            <p class="mb-1">Пн-Пт: 9:00 - 18:00</p>
                            <p>Сб-Вс: выходной</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Yandex Maps JS-->
            @vite('resources/js/yamap.js')

            <div class="col-md-7 py-0 px-0 mx-auto mx-md-0 order-1 order-md-2">
                <div id="map" style="width: 100%; height: 500px; background: #eee;"></div>
            </div>
        </div>
    </div>
</section>



@endsection