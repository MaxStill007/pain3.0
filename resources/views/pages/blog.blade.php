<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Веб-сервис для разработки различного вида программного обеспеччения на заказ.">
    <meta name="keywords" content="Купить, Заказать, ПО, игра, мобильное приложение, программа, VR, веб-страница, сайт">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="180">
    
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml" sizes="any">

    <title>Блог</title>

    <!--Bootstrap style-->
    @vite('resources/css/bootstrap.css')
    
    <!--App script-->
    @vite('resources/js/app.js')
       
    <!--Bootstrap, CardCarousel JS-->
    @vite('resources/js/bootstrap.bundle.min.js')
    @vite('resources/js/cardcarousel.js')
    @vite('resources/js/modal.js')

    <!-- Font Awesome Cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--Jquery JS-->
    @vite('resources/js/jquery.js')

    <!--Google Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
    />
    
    <!--Custom CSS style-->
    @vite('resources/css/style.css')

  </head>

  <body class="vh-100 bg-CustomDark">
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
                  <a class="nav-link active" href="{{ url('/blog') }}">Блог</a>
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

    <section class="my-md-5" id="example">
      <div class="mb-5 pt-3">
        <h5 class="text-CustomPrimary text-center">Отдел блогов</h5>
        <h1 class="text-CustomWhite text-center headlines mx-5 px-3">
          Наши последние новости
        </h1>
      </div>

      <div class="mt-5 mx-auto CustomWidth">
        <div class="row">
          @foreach ($blogs as $blogs)
          <div class="col-md-4 py-3 py-md-0">
            <div class="card bg-CustomBrown border-0">
              <img src="/img/{{$blogs->image}}" class="card-img-center float-center rounded-0" alt="" />
              <div class="card-body text-CustomWhite">
                <div
                    class="card-body col-12 px-0 py-auto text-CustomWhite d-flex flex-column flex-md-row align-self-center"
                >
                    <h5 class="card-title col-12 col-md-6 px-0 headlines"><span class="text-CustomPrimary">От: </span>{{$blogs->author}}</h5>
                    
                    <h5 class="card-text col-12 col-md-6 px-0 text-md-end">{{$blogs->created_at}}</h5>
                </div>

                <div 
                    class="card-body col-12 px-0 py-auto text-CustomWhite d-flex flex-column flex-md-row align-self-center"
                >
                    <h3 class="headlines">{{$blogs->title}}</h3>
                </div>
                <div 
                    class="card-body col-12 px-0 py-auto text-CustomWhite d-flex flex-column flex-md-row align-self-center"
                >
                    <a href="" class="text-CustomPrimary text-decoration-none d-flex align-items-center" style="gap: 8px">
                        <h5 class="mb-0">Читать дальше</h5>
                        <span class="material-icons-outlined">arrow_forward</span>
                    </a>
                </div>

              </div>

            </div>
          </div>
          @endforeach
          </div>
        </div>
      </div>
      
    </section>



    <section class="bg-CustomBrown">
      
      <footer id="footer" class="container text-CustomWhite text-center bg-CustomBrown CustomWidth pt-4 pb-2">
        <h1 class="headlines">Logo</h1>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus
          fugiat, ipsa quos nulla qui alias.
        </p>
        <div class="social-links">
          @foreach ($social as $social)
          <button
          class="btn border-0"
          onclick="window.open('{{$social->link}}');"
          >
            <i class="fa-brands fa-{{$social->name}}"></i>
          </button>
          @endforeach
        </div>
        
        <div class="copyright">
          <p>&copy;Copyright ... . All Rights Reserved</p>
        </div>
      </footer>
    </section>



    

  </body>
</html>