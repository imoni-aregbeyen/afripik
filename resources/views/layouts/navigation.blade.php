<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{ route('dashboard') }}">{{ strtoupper(config('app.name')) }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between ps-lg-5" id="navbarSupportedContent">
      <form class="" role="search">
        <div class="input-group border rounded">
          <input class="form-control border-0 w-50" type="search" placeholder="Search for free files..." aria-label="Search">
          <select name="select" id="select" class="form-select border-top-0 border-bottom-0">
            <option value="images">Images</option>
            <option value="audios">Audios</option>
            <option value="videos">Videos</option>
          </select>
          <button class="btn btn-light" type="submit"><i class="bi bi-search"></i></button>
        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Get Premium</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Browse</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Log In</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success" href="{{ route('register') }}">Sign Up</a>
        </li>
        @else
        <form method="POST" action="{{ route('logout') }}" class="nav-item">
          @csrf
          <button type="submit" class="btn btn-success">Log Out</button>
        </form>
        @endguest        
      </ul>
    </div>
  </div>
</nav>

