<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Веб-сервис для разработки различного вида программного обеспеччения на заказ.">
    <meta name="keywords" content="Купить, Заказать, ПО, игра, мобильное приложение, программа, VR, веб-страница, сайт">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="180">
    
    
    <title>Главная</title>

    <!--Bootstrap style-->
    @vite('resources/css/bootstrap.css');
    
    <!--App script-->
    @vite('resources/js/app.js');
       
    <!--Bootstrap, CardCarousel and Jquery JS-->
    

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
    @vite('resources/css/app.css');

  </head>
<body class="vh-100 bg-CustomDark">
    <!--NavBar-->
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
                  <a class="nav-link active" aria-current="page" href="/"
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

    <!--Section Employers пожевал фигу-->
    <section class="container CustomEmpoyersWidth mb-5" id="Types">
      <div class="my-5 pt-5">
        <h5 class="text-CustomPrimary text-center">Наша команда</h5>
        <h1 class="text-CustomWhite text-center headlines mx-5 px-3">
          Интервью членов команды
        </h1>
      </div>

      <div class="container bg-CustomDark py-3">
        <div id="testimonialCarousel" class="carousel">
          <div class="carousel-inner CustomCardInner">
            <div class="carousel-item active CustomCardItem">
              <div class="card shadow-sm rounded-3 p-2 mx-1 bg-CustomBrown text-CustomWhite">
                <div class="quotes display-2 text-body-tertiary">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    "Some quick example text to build on the card title and make
                    up the bulk of the card's content."
                  </p>
                  <div class="d-flex align-items-center pt-4">
                    <img src="/img/testimonial-1.jpg" alt="" style="width: 70px; max-height: 70px; border-radius: 50%; margin-right: 1rem; overflow: hidden;" />
                    <div>
                      <h5 class="card-title fw-bold">Jane Doe</h5>
                      <span class="text-secondary">CEO, Example Company</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item CustomCardItem">
              <div class="card shadow-sm rounded-3 p-2 mx-1 bg-CustomBrown text-CustomWhite">
                <div class="quotes display-2 text-body-tertiary">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    "Some quick example text to build on the card title and make
                    up the bulk of the card's content."
                  </p>
                  <div class="d-flex align-items-center pt-4">
                    <img src="/img/testimonial-2.jpg" alt="" style="width: 70px; max-height: 70px; border-radius: 50%; margin-right: 1rem; overflow: hidden;"/>
                    <div>
                      <h5 class="card-title fw-bold">June Doe</h5>
                      <span class="text-secondary">CEO, Example Company</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item CustomCardItem">
              <div class="card shadow-sm rounded-3 p-2 mx-1 bg-CustomBrown text-CustomWhite">
                <div class="quotes display-2 text-body-tertiary">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    "Some quick example text to build on the card title and make
                    up the bulk of the card's content."
                  </p>
                  <div class="d-flex align-items-center pt-4">
                    <img src="/img/testimonial-1.jpg" alt="" style="width: 70px; max-height: 70px; border-radius: 50%; margin-right: 1rem; overflow: hidden;"/>
                    <div>
                      <h5 class="card-title fw-bold">John Doe</h5>
                      <span class="text-secondary">CEO, Example Company</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item CustomCardItem">
              <div class="card shadow-sm rounded-3 p-2 mx-1 bg-CustomBrown text-CustomWhite">
                <div class="quotes display-2 text-body-tertiary">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    "Some quick example text to build on the card title and make
                    up the bulk of the card's content."
                  </p>
                  <div class="d-flex align-items-center pt-4">
                    <img src="/img/testimonial-2.jpg" alt="" style="width: 70px; max-height: 70px; border-radius: 50%; margin-right: 1rem; overflow: hidden;"/>
                    <div>
                      <h5 class="card-title fw-bold">Card title 4</h5>
                      <span class="text-secondary">CEO, Example Company</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item CustomCardItem">
              <div class="card shadow-sm rounded-3 p-2 mx-1 bg-CustomBrown text-CustomWhite">
                <div class="quotes display-2 text-body-tertiary">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    "Some quick example text to build on the card title and make
                    up the bulk of the card's content."
                  </p>
                  <div class="d-flex align-items-center pt-4">
                    <img src="/img/testimonial-1.jpg" alt="" style="width: 70px; max-height: 70px; border-radius: 50%; margin-right: 1rem; overflow: hidden;"/>
                    <div>
                      <h5 class="card-title fw-bold">Card title 5</h5>
                      <span class="text-secondary">CEO, Example Company</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item CustomCardItem">
              <div class="card shadow-sm rounded-3 p-2 mx-1 bg-CustomBrown text-CustomWhite">
                <div class="quotes display-2 text-body-tertiary">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    "Some quick example text to build on the card title and make
                    up the bulk of the card's content."
                  </p>
                  <div class="d-flex align-items-center pt-4">
                    <img src="/img/testimonial-2.jpg" alt="" style="width: 70px; max-height: 70px; border-radius: 50%; margin-right: 1rem; overflow: hidden;"/>
                    <div>
                      <h5 class="card-title fw-bold">Card title 6</h5>
                      <span class="text-secondary">CEO, Example Company</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#testimonialCarousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- Footer Start -->
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