@extends('layouts.main')

@section('content')
<section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
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
@endsection