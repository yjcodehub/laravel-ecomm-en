@extends('layout')
@section('content')
  <main class="overflow-hidden">
    <div id="carouselExampleCaptions" class="carousel slide custome-product" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>

      </div>
      <div class="carousel-inner">
        @foreach ($products as $item)
          <div class="carousel-item {{ $item->id == 1 ? 'active' : '' }}">
            <a href="detail/{{ $item->id }}">
              <img src="{{ $item->gallery }}" class="d-block w-100" style="height: 620px;">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $item->name }}</h5>
                <p>{{ $item->description }}</p>
              </div>
            </a>
          </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container-fluid trending-wrapper my-4">
      <div class="row text-center">
        @foreach ($products as $item)
          <div class="col-lg-3 h-100">
            <a href="detail/{{ $item->id }}">
              <img src="{{ $item->gallery }}" alt="Gallery" width="250" height="250">
              <p>{{ $item->name }}</p>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection
