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
    <div class="row g-3 mb-3">
      @for($i = 0; $i < 6; $i++)
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center bg-light rounded p-3">
          <div class="left d-flex align-items-center">
            <a href="#" class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
              </svg>
            </a>
            <div class="mx-3 rounded-circle" style="height:75px;width:75px;background-image:url('img/aud1.jpeg');background-size:cover"></div>
            <div>
              <h4 class="h5">Heart beat</h4>
              <h6>Afripik</h6>
            </div>
          </div>
          <div class="right d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
              <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
            </svg>
            <span class="mx-3">2:30</span>
            <button class="btn btn-sm btn-outline-dark rounded-pill">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg>
              <span>Like</span>
            </button>
            <button class="btn btn-sm btn-outline-dark rounded-pill ms-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
              </svg>
              <span>Download</span>
            </button>
          </div>
        </div>
      </div>
      @endfor
      <div class="col-12 text-center">
        <a href="" class="btn btn-outline-dark">See More</a>
      </div>
    </div>
  </div>
</div>


@endsection