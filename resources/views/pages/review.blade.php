<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Веб-сервис для разработки различного вида программного обеспеччения на заказ.">
    <meta name="keywords" content="Купить, Заказать, ПО, игра, мобильное приложение, программа, VR, веб-страница, сайт">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="180">
    
    <title>Блог</title>

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
                  <a class="nav-link" href="/about">О нас</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="/product">Портфолио</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link active" href="/review">Блог</a>
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
              <h5 class="text-CustomPrimary">Lorem ipsum</h5>
              <h1 class="headlines">Lorem ipsum dolor sit amet consectetur</h1>
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
      <div class="mb-5 pt-3">
        <h5 class="text-CustomPrimary text-center">Отдел блогов</h5>
        <h1 class="text-CustomWhite text-center headlines mx-5 px-3">
          Наши последние новости
        </h1>
      </div>

      <div class="mt-5 mx-auto CustomWidth">
        <div class="row">
          @foreach ($review as $review)
          <div class="col-md-4 py-3 py-md-0">
            <div class="card bg-CustomBrown border-0">
              <img src="{{$review->image_path}}" class="card-img-center float-center rounded-0" alt="" />
              <div class="card-body text-CustomWhite">
                <div
                    class="card-body col-12 px-0 py-auto text-CustomWhite d-flex flex-column flex-md-row align-self-center"
                >
                    <h5 class="card-title col-12 col-md-6 px-0 headlines"><span class="text-CustomPrimary">От: </span>{{$review->author}}</h5>
                    
                    <h5 class="card-text col-12 col-md-6 px-0 text-md-end">{{$review->date}}</h5>
                </div>

                <div 
                    class="card-body col-12 px-0 py-auto text-CustomWhite d-flex flex-column flex-md-row align-self-center"
                >
                    <h3 class="headlines">{{$review->title}}</h3>
                </div>
                <div 
                    class="card-body col-12 px-0 py-auto text-CustomWhite d-flex flex-column flex-md-row align-self-center"
                >
                    <a href="" class="text-CustomPrimary" style="text-decoration: none;">
                        <h5 class="mb-3">Читать дальше <span class="material-icons-outlined">arrow_forward</span></h5>
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