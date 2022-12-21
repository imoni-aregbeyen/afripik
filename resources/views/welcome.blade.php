@extends('layouts.app')
@section('content')
<header class="bg-img">
  <div class="overlay">
    @include('layouts.navigation')
    <div class="py-lg-5 my-lg-3"></div>
    <section class="container text-center py-5">
      <h1 class="text-white mb-3">DISCOVER FREE IMAGES, AUDIO AND VIDEOS</h1>
      <div class="row">
        <div class="col-lg-4 mx-auto">
          <form class="mb-3" role="search">
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
          <p class="text-white">Trending: office, art, autumn, coffee, animal</p>
        </div>
      </div>
    </section>
  </div>
</header>

<section class="container-fuild py-3 bg-dark text-light text-center">
  <p class="my-0">
    <span>Create An Account To Access More Downloads</span>
    <a href="#" class="btn btn-success">Sign up for free</a>
  </p>
</section>

<section class="container py-5">
  <h2 class="text-center mb-3">
    <span class="text-success">Explore</span>
    <span>trending categories on Afripik</span>
  </h2>
  <h3 class="">FREE STOCK IMAGES</h3>
  <div class="row g-2">
    <div class="col-lg-7">
      <div class="h-500" style="background-image: url('img/hotel.jpeg');"></div>
    </div>
    <div class="col-lg-5">
      <div class="row g-2">
        <div class="col-12">
          <div class="h-250" style="background-image: url('img/food.jpeg');"></div>
        </div>
        <div class="col-12">
          <div class="h-250" style="background-image: url('img/models.jpeg');"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-2">
    <div class="col-lg">
      <div class="row g-2">
        <div class="col-12">
          <div class="h-600" style="background-image: url('img/photography.jpeg');"></div>
        </div>
        <div class="col-12">
          <div class="h-700" style="background-image: url('img/animals.jpeg');"></div>
        </div>
      </div>
    </div>
    <div class="col-lg">
      <div class="row g-2">
        <div class="col-12">
          <div class="h-500" style="background-image: url('img/transportation.jpeg');"></div>
        </div>
        <div class="col-12">
          <div class="row g-0">
            <div class="col-lg">
              <div class="h-400" style="background-image: url('img/sports.jpeg');"></div>
            </div>
            <div class="col-lg">
              <div class="h-400" style="background-image: url('img/ice-cream.jpeg');"></div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="h-400" style="background-image: url('img/music.jpeg');"></div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection