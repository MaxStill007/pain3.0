@extends('layouts.main')

@section('content')
    <!--NavBar-->
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
                  <a class="nav-link active" aria-current="page" href="{{ url('/') }}"
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

    
    <!--Slider BG-->
    <section id="slider">
      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#hero-carousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#hero-carousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#hero-carousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>

        <!--Slider Items-->
        <div class="carousel-inner">
          @foreach ($carousels as $carousels)
          <div class="carousel-item active c-item">
            <img
              src="/img/{{$carousels->image}}"
              class="d-block w-100 c-img"
              alt="Slide {{ $loop->iteration }}"
            />
            <!--Slider Item 1-->
            <div
              class="carousel-caption text-CustomWhite text-center text-lg-start top-0 mt-lg-4 mx-lg-4 pt-lg-5 px-lg-5"
            >
              <h1 class="display-1 fw-bolder headlines">{{$carousels->name}}</h1>
              <p class="mt-2 mt-lg-5 fs-5 text-uppercase">
                {{$carousels->description}}
              </p>
              <button
                class="btn btn-CustomDimPrimary text-CustomDark headlines px-4 py-2 fs-5 mt-2 ms-lg-5 mt-lg-5"
              >
                Заказать
              </button>
            </div>
          </div>
          @endforeach
          
        </div>
        <!--Slider Buttons-->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    
    <!--Card Roadmap-->
    <section id="Roadmap">
      <div class="my-5 pt-5">
        <h5 class="text-CustomPrimary text-center">Как мы выполняем заказы</h5>
        <h1 class="text-CustomWhite text-center headlines mx-5 px-3">
          Этапы разработки продукта
        </h1>
      </div>

      <div
        class="row row-cols-1 row-cols-md-2 row-cols-xl-3 px-0 px-sm-3 px-md-0 my-5 g-5 d-flex aligh-items-center justify-content-center mx-auto CustomWidth"
      >
        <!--Card Items-->
        @foreach ($roadmap as $roadmap)
        <div class="col">
          <div
            class="card d-flex flex-row flex-md-column bg-CustomDark border-0"
          >
            <div class="col-4 col-md-4">
              <img
                src="/img/feature-{{$roadmap->image}}.svg"
                class="card-img-start float-start bg-CustomDark ms-3 pt-3"
                alt="..."
              />
            </div>
            <div
              class="card-body col-8 col-md-12 text-CustomWhite bg-CustomDark"
            >
              <div class="d-flex flex-row headlines">
                <h4 class="text-CustomPrimary me-2">0{{$roadmap->image}}</h4>
                <h4 class="card-title">{{$roadmap->name}}</h4>
              </div>
              <p class="card-text">
                {{$roadmap->description}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>

    <!--Reason Section-->
    <section class="about mt-5 bg-CustomBrown" id="about">
      <div class="container pb-4 CustomWidth">
        <div class="row d-flex flex-column flex-md-row border-0">
          <div class="col-10 col-md-6 py-0 px-0 mx-auto mx-md-0">
            <div class="card border-0 pt-4 bg-CustomBrown">
              <img
                src="/img/reason-2.jpg"
                class="card-img-center float-center rounded-2"
                alt=""
              />
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-4 px-5 my-md-auto text-CustomWhite">
            <h5 class="text-CustomPrimary">Мобильные приложения</h5>
            <h1 class="headlines">Для чего компании обращаются к нам</h1>
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

    <!--Product Example-->
    <section class="my-md-5" id="example">
      <div class="my-5 pt-5">
        <h5 class="text-CustomPrimary text-center">Наши продукты</h5>
        <h1 class="text-CustomWhite text-center headlines mx-5 px-3">
          Популярные приложения
        </h1>
      </div>

      @include('components.portfolio')
      
      <div class="container CustomWidth mt-3 mt-md-5 d-flex aligh-items-center justify-content-center">
        <button
          class="btn btn-CustomDimPrimary text-CustomWhite text-uppercase headlines fs-6 px-3 py-3 rounded-4 d-flex aligh-items-center"
          onclick="location.href='/product'"
        >
          Все продукты
        </button>
      </div>
    </section>


    <!-- Section Types Start-->
    <section class="" id="Types">
      <div class="my-5 pt-5">
        <h5 class="text-CustomPrimary text-center">Типы заказов</h5>
        <h1 class="text-CustomWhite text-center headlines mx-5 px-3">
          Какие виды проектов мы выполняем
        </h1>
      </div>

      <div
        class="row row-cols-1 row-cols-xl-2 px-0 px-sm-3 px-md-0 my-5 g-5 d-flex aligh-items-center justify-content-center mx-auto CustomWidth"
      >
        @foreach ($types as $types)
        <div class="col mb-3">
          <div
            class="card d-flex flex-row bg-CustomDark border border-CustomBorder p-3"
          >
            <div class="col-4 col-md-2 align-self-center">
              <img
                src="/img/{{$types->image}}"
                class="card-img-start float-start bg-CustomDark me-2 me-md-3"
                alt="..."
              />
            </div>
            <div
              class="card-body col-8 col-md-10 px-0 py-auto text-CustomWhite bg-CustomDark d-flex flex-column flex-md-row align-self-center"
            >
              <h5 class="card-title col-12 col-md-8 px-0 headlines">{{$types->name}}</h5>
              <h5 class="card-text col-12 col-md-4 px-0 text-CustomDimPrimary">{{$types->description}}</h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </section>

@endsection