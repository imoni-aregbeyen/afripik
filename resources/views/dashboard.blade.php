@extends('layouts.app')
@section('content')

<style>
  .nav-link.rounded-pill {
    color: #212529;
    border: 1px solid #212529;
  }
  .nav-link.rounded-pill.active {
    background-color: #212529;
  }
</style>

<header class="">
    @include('layouts.navigation')
</header>

<ul class="nav nav-pills justify-content-evenly col-lg-4 mx-auto py-3" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link rounded-pill active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true">Images</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link rounded-pill" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane" type="button" role="tab" aria-controls="video-tab-pane" aria-selected="false">Videos</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link rounded-pill" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio-tab-pane" type="button" role="tab" aria-controls="audio-tab-pane" aria-selected="false">Audios</button>
  </li>
</ul>
<div class="tab-content container" id="myTabContent">
  <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
    <div class="d-flex justify-content-between align-items-center">
      <h3 class="">FREE STOCK IMAGES</h3>
      <div class="d-none d-lg-block">
        <div class="dropdown d-inline-block">
          <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Orientation
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Any orientation</a></li>
            <li><a class="dropdown-item" href="#">Horizontal</a></li>
            <li><a class="dropdown-item" href="#">Vertical</a></li>
          </ul>
        </div>
        <div class="dropdown d-inline-block">
          <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sort by
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Most popular</a></li>
            <li><a class="dropdown-item" href="#">Trending</a></li>
            <li><a class="dropdown-item" href="#">Latest</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row g-2">
      <div class="col-lg-4">
        <div class="row g-2">
          <div class="col-12">
            <div class="h-500" style="background-image: url('img/football.png');"></div>
          </div>
          <div class="col-12">
            <div class="h-400" style="background-image: url('img/wallpaper.png');"></div>
          </div>
          <div class="col-12">
            <div class="h-400" style="background-image: url('img/splash.png');"></div>
          </div>
          <div class="col-12">
            <div class="h-600" style="background-image: url('img/gallery.png');"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row g-2">
          <div class="col-12">
            <div class="h-700" style="background-image: url('img/woman.png');"></div>
          </div>
          <div class="col-12">
            <div class="h-800" style="background-image: url('img/vr.png');"></div>
          </div>
          <div class="col-12">
            <div class="h-400" style="background-image: url('img/icecream.png');"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row g-2">
          <div class="col-12">
            <div class="h-500" style="background-image: url('img/top_of_skyscraper.png');"></div>
          </div>
          <div class="col-12">
            <div class="h-400" style="background-image: url('img/food1.png');"></div>
          </div>
          <div class="col-12">
            <div class="h-400" style="background-image: url('img/food2.png');"></div>
          </div>
          <div class="col-12">
            <div class="h-600" style="background-image: url('img/music2.png');"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5 text-center">
      <button class="btn btn-outline-dark">See More</button>
    </div>
  </div>
  <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab" tabindex="0">
    <div class="d-flex justify-content-between align-items-center">
      <h3 class="">FREE TRENDING VIDEOS</h3>
      <div class="d-none d-lg-block">
        <div class="dropdown d-inline-block">
          <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sort by
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Most popular</a></li>
            <li><a class="dropdown-item" href="#">Trending</a></li>
            <li><a class="dropdown-item" href="#">Latest</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row g-2">
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid1.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid2.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid3.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid4.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid5.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid6.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid7.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid8.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
      <div class="col-md-6 col-lg-4 position-relative">
        <div class="h-600" style="background-image: url('img/vid9.jpeg');"></div>
        <a href="" class="btn btn-light rounded-circle border-secondary position-absolute top-0 start-0 m-3 p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
          </svg>
        </a>
        <span class="badge bg-success position-absolute bottom-0 start-0 m-3 p-2 fs-6">0:58</span>
      </div>
    </div>
    <div class="py-5 text-center">
      <button class="btn btn-outline-dark">See More</button>
    </div>
  </div>
  <div class="tab-pane fade" id="audio-tab-pane" role="tabpanel" aria-labelledby="audio-tab" tabindex="0">
    <div class="d-flex justify-content-between align-items-center">
      <h3 class="">FREE STOCK AUDIO</h3>
      <div class="d-none d-lg-block">
        <div class="dropdown d-inline-block">
          <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sort by
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Most popular</a></li>
            <li><a class="dropdown-item" href="#">Trending</a></li>
            <li><a class="dropdown-item" href="#">Latest</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center bg-light rounded p-3">
          <div class="left">
            <a href="#" class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
              </svg>
            </a>
            
          </div>
          <div class="right">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection