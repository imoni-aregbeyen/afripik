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
      <div class="">
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
  <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="audio-tab-pane" role="tabpanel" aria-labelledby="audio-tab" tabindex="0">...</div>
</div>


@endsection