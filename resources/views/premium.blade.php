@extends('layouts.app')
@section('content')

<header class="">
    @include('layouts.navigation')
</header>

<div class="d-flex justify-content-center py-3">
  <p class="fw-bold fs-3">Premium Plans</p>
</div>

<div class="container">
  <div class="row mb-3">
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h4 class="h6">Basic - 1 Month</h4>
          <h2 class="">&#8358;1,500</h2>
          <p class="fst-italic">UNLIMITED DOWNLOADS</p>
          <div class="d-grid gap-2 mt-4">
            <a href="" class="btn btn-success">START NOW</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h4 class="h6">Starter - 3 Months</h4>
          <h2 class="">&#8358;3,500</h2>
          <p class="fst-italic">UNLIMITED DOWNLOADS</p>
          <div class="d-grid gap-2 mt-4">
            <a href="" class="btn btn-success">START NOW</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h4 class="h6">Classic - 6 Months</h4>
          <h2 class="">&#8358;6,000</h2>
          <p class="fst-italic">UNLIMITED DOWNLOADS</p>
          <div class="d-grid gap-2 mt-4">
            <a href="" class="btn btn-success">START NOW</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h4 class="h6">Pro - 1 Year</h4>
          <h2 class="">&#8358;10,500</h2>
          <p class="fst-italic">UNLIMITED DOWNLOADS</p>
          <div class="d-grid gap-2 mt-4">
            <a href="" class="btn btn-success">START NOW</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <h3 class="">Frequently Asked Questions</h3>
    <p class="">What is Premium?</p>
    <p class="">How can I pay for my subscription?</p>
    <p class="">Can I get a refund after payment?</p>
  </div>
</div>

@endsection