@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Add New Audio</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Add New Audio</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body py-3">
              <!-- Add New Photo Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data" action="{{route('audios.store')}}" id="frmAddNew">
                @csrf
                <div class="col-lg-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Add title" required>
                </div>
                <div class="col-lg-6">
                  <label for="author" class="form-label">Author</label>
                  <input type="text" class="form-control" id="author" name="author" placeholder="Add Author" required>
                </div>
                <div class="col-lg-6">
                  <label for="image" class="form-label">Cover Image</label>
                  <input type="file" name="image" id="image" class="form-control" accept=".jpeg,.jpg,.png" required>
                </div>
                <div class="col-lg-6">
                  <label for="file" class="form-label">Audio File</label>
                  <input type="file" name="file" id="file" class="form-control" accept=".mp3,.wav" required>
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