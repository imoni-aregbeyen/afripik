@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>{{$photo->title}}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">{{$photo->title}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <?php
      $files = json_decode($photo->files, true);
      ?>
      <div class="row g-3">
        <div class="col-8">
          @foreach ($files as $file)
            <img src="{{url('_photos')}}/{{$file}}" alt="" class="img-fluid img-thumbnail">
          @endforeach
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body py-3">
              <!-- Edit Photo Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data" action="{{route('photos.update', $photo)}}" id="frmEdit">
                @csrf
                @method('put')
                <div class="col-12">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Add title" value="{{$photo->title}}" required>
                </div>
                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-primary">Update Details</button>
                </div>
              </form><!-- End Edit Photo Form -->
              <form action="{{route('photos.destroy', $photo)}}" method="post" onsubmit="return confirm('Confirm Delete')">
                @csrf
                @method('delete')
                <div class="d-grid">
                  <button type="submit" class="btn btn-sm btn-outline-danger border-0">Delete</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection