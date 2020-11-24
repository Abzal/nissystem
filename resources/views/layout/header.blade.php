
  @livewireStyles
<header>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Super</h5>




  <nav class="navbar navbar-expand-sm navbar-light ">

    <a class="nav-link" href="{{ route('index') }}">БАСТЫ БЕТ</a>
<ul class="navbar-nav">
   <li class="nav-item dropdown">  
    <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" data-toggle="dropdown">ОҚУШЫЛАР</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('categories')}}">ОҚУШЫЛАР</a>
          <a class="dropdown-item" href="{{ route('piple') }}">ТІЗІМ</a>
          <a class="dropdown-item" href="{{ route('lessons') }}">САБАҚ</a>
        </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">МАРШРУТ</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('teacher-route-index')}}">Ваш Маршрут</a>
           @can('isKMmoderator')
          <a class="dropdown-item" href="{{ route('teacher-route-allview')}}">Все Маршруты</a>
          @endcan  
        </div>
  </li>
     
</ul>   
        
  </nav>
              @if (Route::has('login'))

                    @auth

                    @include('layout.icon')

                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-primary ml-2">Register</a>
                        @endif
                    @endif

            @endif
 
</div>
</header>
