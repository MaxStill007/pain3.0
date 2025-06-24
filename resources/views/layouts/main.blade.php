<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Веб-сервис для разработки различного вида программного обеспеччения на заказ.">
    <meta name="keywords" content="Купить, Заказать, ПО, игра, мобильное приложение, программа, VR, веб-страница, сайт">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="180">
    
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml" sizes="any">

    
    <title>PowerApp</title>

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

    <!-- Подключение API Яндекс.Карт -->
    <script src="https://api-maps.yandex.ru/2.1/?apikey=383e1788-f0e5-4504-817b-7eb11cde62ad&lang=ru_RU" type="text/javascript"></script>

  </head>

    <body class="vh-100 bg-CustomDark">
        <main>
            @yield('content')
        </main>
        

        <section class="bg-CustomBrown">
            @include('components.footer')
        </section>

    </body>
</html>