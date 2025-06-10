<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Веб-сервис для разработки различного вида программного обеспеччения на заказ.">
    <meta name="keywords" content="Купить, Заказать, ПО, игра, мобильное приложение, программа, VR, веб-страница, сайт">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="180">
    
    <title>О нас</title>

    <!--Bootstrap style-->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    
    <!--Bootstrap script-->
    <script
      defer
      src="/js/bootstrap.bundle.min.js"
    ></script>

    <!--JQuery script-->
    <script
      defer
      src="/js/jquery.js"
    ></script>

    <!--Custom JS script-->
    <script
      defer
      src="/js/cardcarousel.js"
    ></script>
    
    <!-- Font Awesome Cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    
    <!--Google Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
    />
    
    <!--Custom CSS style-->
    <link rel="stylesheet" href="/css/style.css" />
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
                  <a class="nav-link active" href="/about">О нас</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="/product">Портфолио</a>
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