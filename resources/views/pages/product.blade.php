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
                  <a class="nav-link active" href="{{ url('/product') }}">Портфолио</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="{{ url('/blog') }}">Блог</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="#">Контакты</a>
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

    <!--Reason Section-->
    <section class="about bg-CustomBrown" id="about">
      <div class="container pb-4 CustomWidth">
        <div class="row d-flex flex-column flex-md-row border-0">
          <div class="col-10 col-md-6 py-0 px-0 mx-auto mx-md-0">
            <div class="card border-0 pt-4 bg-CustomBrown">
              <img
                src="/img/reason-1.jpg"
                class="card-img-center float-center rounded-2"
                alt=""
              />
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-4 px-5 my-md-auto text-CustomWhite">
            <h5 class="text-CustomPrimary">Личное портфолио</h5>
            <h1 class="headlines">Преимущества на рынке разработки на заказ</h1>
            <p class="mt-md-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
              perferendis dolorem, numquam earum at nam beatae voluptate natus
              consectetur facere, saepe cupiditate ut exercitationem deserunt,
              facilis quam perspiciatis autem iure illo harum minima. Quas,
              vitae aperiam laudantium alias asperiores nulla rerum, nihil
              eveniet perferendis sint illum accusamus officiis aliquam nam.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="my-md-5" id="example">
      <div class="my-5 pt-5">
        <h5 class="text-CustomPrimary text-center">Портфолио</h5>
        <h1 class="text-CustomWhite text-center headlines mx-5 px-3">
          Перечень проектов
        </h1>
      </div>

      <div class="container CustomWidth mt-3 mt-md-5">
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
        
          <a href="{{ route('product.page') }}" 
              class="btn headlines fs-6 px-4 py-3 rounded-3 {{ !$activeCategory ? 'btn-CustomDimPrimary text-CustomWhite' : 'btn-light text-dark' }}">
              Все продукты
          </a>
        
          @foreach($categories as $key => $name)
            <a href="{{ route('product.page', ['category' => $key]) }}" 
               class="btn headlines fs-6 px-4 py-3 rounded-3 {{ $activeCategory === $key ? 'btn-CustomDimPrimary text-CustomWhite' : 'btn-light text-dark' }}">
                {{ $name }}
            </a>
          @endforeach
        </div>
      </div>
      
      @include('components.portfolio')
      
    </section>
@endsection