@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Add New Photo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Add New Photo</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body py-3">
              <!-- Add New Photo Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data" action="{{route('photos.store')}}" id="frmAddNew">
                @csrf
                <div class="col-12">
                  <!-- <label for="title" class="form-label">Title</label> -->
                  <input type="text" class="form-control" id="title" name="title" placeholder="Add title" required>
                </div>
                <div class="col-12">
                  <!-- <label for="files" class="form-label">Files</label> -->
                  <input type="file" name="files[]" id="files" class="form-control" accept=".jpg, .jpeg, .png" multiple required>
                </div>
              </form><!-- End Add New Photo Form -->

            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div class="card">
            <div class="card-body py-3">
              <div class="d-grid">
                <button type="submit" class="btn btn-primary" form="frmAddNew">Publish</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection