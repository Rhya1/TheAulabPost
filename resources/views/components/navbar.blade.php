<nav class="navbar navbar-expand-lg fixed-top navcolor">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">The Aulab Post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Articoli</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a class="dropdown-item" href="{{route('article.byCategory', compact ('category'))}}">{{$category->name}}</a></li>
            @endforeach
          </ul>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ordina
            </a>
          <ul class="dropdown-menu">
            <li class="nav-link"><a href="{{route('article.byNew')}}">Newest</a>
            </li>
            <li class="nav-link"><a href="{{route('article.byOld')}}">Oldest</a>
            </li>
          </ul>
          
          @guest
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          
          @else
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('careers')}}">Lavora con noi</a></li>

              @if(Auth::user()->is_admin)
                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
              @endif

              @if(Auth::user()->is_revisor)
                <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisor</a></li>
              @endif

              @if(Auth::user()->is_writer)
                <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard Writer</a></li>
              @endif

              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" 
                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">@csrf</form>
              </li>
            </ul>
            <li class="nav-item">
              <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
            </li>
          </li>
          
          @endguest
          
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form method="GET" action="{{route('article.search')}}" class="d-flex" role="search">
          <input class="form-control me-2" name="query" type="search" placeholder="Cerca..." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cerca...</button>
        </form>
      </div>
    </div>
  </nav>