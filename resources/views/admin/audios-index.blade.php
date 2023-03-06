@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
      <h1>Audios</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Audios</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

      @foreach ($audios as $audio)
      <div class="row mb-3">
        <div class="col-3 d-flex align-items-center">
          <div class="mx-3 rounded-circle" style="height:75px;width:75px;background-image:url({{url('_audios')}}/{{$audio->image}});background-size:cover"></div>
          <div>
            <h4 class="h5">{{$audio->title}}</h4>
            <h6>{{$audio->author}}</h6>
          </div>
        </div>
        <div class="col-9 d-flex align-items-center">
          <audio controls class="w-100">
            <source src="{{url('_audios')}}/{{$audio->file}}" type="audio/mpeg">
            <source src="{{url('_audios')}}/{{$audio->file}}" type="audio/wav">
            Your browser does not support the audio element.
          </audio>
        </div>
      </div>
      @endforeach

    </section>
@endsection