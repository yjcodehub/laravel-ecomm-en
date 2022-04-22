@extends('layout')
@section('content')
  <div class="container custome-login">
    <div class="row h-100 d-flex justify-content-center align-items-center">
      <div class="col-8">
        <div class="card shadow">
          <div class="card-body">
            <h4 class="text-center display-6 mb-5">Login Form</h4>
            <form action="login" method="POST">
              @csrf
              <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp"
                  value="{{ old('email') }}">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="Password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
