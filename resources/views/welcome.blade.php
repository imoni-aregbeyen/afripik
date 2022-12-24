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
    <a href="{{ route('register') }}" class="btn btn-success">Sign up for free</a>
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

<section class="container py-5">
  <div class="row">
    <div class="col-lg">
      <h3 class="">
        <span>Best Choice for</span>
        <span class="text-success">Creative</span>
      </h3>

      <div class="d-flex align-items-center py-3">
        <div class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
          </svg>
        </div>
        <div class="ps-3">
          <h4 class="mt-0">High quality assets</h4>
          <p class="mb-0">Download images of the best quality for your projects.</p>
        </div>
      </div>

      <div class="d-flex align-items-center py-3">
        <div class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </div>
        <div class="ps-3">
          <h4 class="mt-0">Find contents easily</h4>
          <p class="mb-0">Get images that meet your needs by searching for them.</p>
        </div>
      </div>

      <div class="d-flex align-items-center py-3">
        <div class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
          </svg>
        </div>
        <div class="ps-3">
          <h4 class="mt-0">New images and contents</h4>
          <p class="mb-0">Our library is updated with fresh contents on a daily basis.</p>
        </div>
      </div>

      <div class="d-flex align-items-center py-3">
        <div class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
          </svg>
        </div>
        <div class="ps-3">
          <h4 class="mt-0">Multiple download options</h4>
          <p class="mb-0">Download images with or without backgrounds.</p>
        </div>
      </div>

    </div>
    <div class="col-lg">
      <div class="row g-2">
        <div class="col-lg">
          <div class="row g-2">
            <div class="col-12">
              <div class="h-200 rounded" style="background-image: url('img/videos.jpeg');"></div>
            </div>
            <div class="col-12">
              <div class="h-200 rounded" style="background-image: url('img/photos.jpeg');"></div>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="row g-2">
            <div class="col-12">
              <div class="h-400 rounded" style="background-image: url('img/audio.jpeg');"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection