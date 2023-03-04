@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Photos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Photos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <style>
      .img-500 {
        height: 500px;
      }
      .img-250 {
        height: 250px;
      }
    </style>

    <section class="section">
      <div class="row g-3">
        @foreach ($photos as $photo)
          <?php
          $files = json_decode($photo->files, true);
          ?>
          <div class="col-lg-4">
            <a href="{{route('photos.show', $photo)}}" class="d-block img-250" style=
            "background-image:url({{url('_photos')}}/{{$files[0]}});
            background-size:cover;background-position:center center"></a>
          </div>
        @endforeach
      </div>
    </section>
@endsection