@extends('layout')
@section('content')
  <div class="container custome-product my-5">
    <div class="row row-cols-sm-2 row-cols-1">
      <div class="col">
        <img src="{{ $data->gallery }}" class="img-fluid">
      </div>
      <div class="col">
        <a href="/">Go Back</a>
        <h1 class="display-5">Product Detail</h1>
        <h1>{{ $data->name }}</h1>
        <h4> Rs. {{ $data->price }}</h4>
        <p class="mb-0">{{ $data->description }}</p>
        <p>Category : {{ $data->category }}</p>
        <div>
          <button class="btn btn-primary">Add To cart</button>
          <button class="btn btn-success">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
@endsection
