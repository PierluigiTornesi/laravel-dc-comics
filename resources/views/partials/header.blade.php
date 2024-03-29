<header>
    <div>
        <img src=" {{ Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC">
    </div>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home')}}">DC Comics Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('comics.index')}}">List of Comics</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>