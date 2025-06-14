<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Веб-сервис для разработки различного вида программного обеспеччения на заказ.">
    <meta name="keywords" content="Купить, Заказать, ПО, игра, мобильное приложение, программа, VR, веб-страница, сайт">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="180">
        
    <title>Портфолио</title>

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
    @vite('resources/css/app.css')

  </head>

  <body class="vh-100 bg-CustomDark">
    <section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
          <!--Logo-->
          <a class="navbar-brand" href="/">Logo</a>
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
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
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
                  <a class="nav-link" aria-current="page" href="/"
                    >Главная</a
                  >
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="/about">О нас</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link active" href="/product">Портфолио</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="/review">Блог</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="#">Контакты</a>
                </li>
              </ul>

              <div class="d-flex">
                <a
                  class="btn btn-CustomPrimary text-CustomDark text-center headlines fs-6 px-4 pt-2 rounded-4"
                  href="#CustomOrder"
                >
                  Заказать звонок
                </a>
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
      
      <div class="mt-5 mx-auto CustomWidth">
        <div class="row">
          @foreach ($products as $product)
          <div class="col-md-4 py-3 my-3 py-md-0">
            <div class="card bg-CustomBrown border-0">
              <img src="/img/{{$product->image}}" class="card-img-center m-4 float-center rounded-2" alt="" />
              <div class="card-body text-CustomWhite">
                <h3 class="headlines text-center">{{$product->name}}</h3>
                                                
                <button class="btn btn-CustomDimPrimary text-CustomWhite headlines fs-6 mt-3 mx-auto px-4 py-3 rounded-3 d-flex aligh-items-center justify-content-center"
                  data-bs-toggle="modal" data-bs-target="#productModal"
                  data-product-id="{{ $product->id }}"
                  data-product-category="{{ $product->category_id }}"
                  data-product-name="{{ $product->name }}"
                  data-product-date="{{ $product->created_at }}"
                  data-product-description="{{ $product->description }}"
                  data-product-image="/img/{{ $product->image }}"
                  
                  >
                  <span class="material-icons-outlined pe-2">search</span>
                    Подробности
                </button>
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



    <!-- Модальное окно -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 75%;">
            <div class="modal-content bg-CustomBrown text-CustomWhite">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Подробности о продукте</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <!-- Первая строка: изображение + информация -->
                        <div class="row align-items-start mb-3">
                            <!-- Изображение слева -->
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img id="modalProductImage" src="" alt="Product Image" class="img-fluid rounded shadow">
                            </div>

                            <!-- Информация справа -->
                            <div class="col-md-7">
                                <p id="modalProductName" class="h4 mb-3 font-weight-bold"></p>
                                <p id="modalCategValue" class="text-light mb-0">
                                    <i class="bi bi-calendar me-2"></i>Категория программного обеспечения:
                                    <span id="modalProductCategory" class="ms-2"></span>
                                </p>
                                <p id="modalDateValue" class="text-light mb-0">
                                    <i class="bi bi-calendar me-2"></i>Дата релиза проекта:
                                    <span id="modalProductDate" class="ms-2"></span>
                                </p>
                                <!-- Дополнительные поля можно добавить здесь -->
                            </div>
                        </div>

                        <!-- Вторая строка: описание на всю ширину -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <h6 class="border-bottom pb-2 mb-3">Описание:</h6>
                                <p id="modalProductDescription" class="line-height-1-8"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-CustomDimPrimary text-CustomWhite text-center headlines" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>