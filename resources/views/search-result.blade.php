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

<div class="d-flex justify-content-center py-3">
  <p class="fw-bold fs-3">Showing result for <q><?php echo $_GET['search'] ?></q></p>
</div>

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
            <div class="h-500" style="background-image: url('img/football.png');" data-bs-toggle="modal" data-bs-target="#registerOverlay"></div>
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

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerOverlay">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="registerOverlay" tabindex="-1" aria-labelledby="registerOverlayLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-0">
      <div class="modal-header border-bottom-0">
        <!-- <h1 class="modal-title fs-5" id="registerOverlayLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-7">
            <img src="{{ asset('img/traveling.png') }}" alt="Traveling" class="img-fluid">
          </div>
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h5 class="h4">Download Limit Reached</h5>
            <p class="">Create an account or Sign in to access more downloads and features</p>
            <div class="mb-3">
              <a href="{{ route('register') }}" class="btn btn-success">Create an Account</a>
              <a href="{{ route('login') }}" class="btn btn-outline-dark">Sign In</a>
            </div>
            <p>
              <span>Any questions?</span>
              <a href="" class="">Contact Support</a>
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer border-top-0">
        
      </div>
    </div>
  </div>
</div>


@endsection