<nav class="navbar navbar-expand-lg bg-CustomDark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('img/logo.svg') }}" alt="Logo" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        @foreach($menuItems as $item)
          <li class="nav-item">
            <a 
              class="nav-link {{ Route::currentRouteName() == $item['route'] ? 'active fw-bold' : '' }}" 
              href="{{ route($item['route']) }}"
            >
              {{ $item['title'] }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>