@extends('layout/main')

@section('container')
  <!-- Page Content -->
  <div class="page-content page-auth">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login">
            <div class="col-lg-6 text-center">
              <img
                src="{{ ('assets/img/login-placeholder.png') }}"
                alt=""
                class="img-fluid mb-4 mb-lg-none"
              />
            </div>
            <div class="col-lg-5">
              <h2>
                Belanja kebutuhan utama, <br />
                menjadi lebih mudah
              </h2>
              @include('layout.alert')

              <form method="POST" action="{{ route('auth.login-submit') }}" class="mt-3">
                @csrf
                <div class="form-group">
                  <label>Email address</label>
                  <input
                    name="email"
                    type="email"
                    class="form-control w-75 {{$errors->has('email') ? 'is-invalid' : ''}}"
                    aria-describedby="emailHelp"
                  />
                  @if($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control w-75 {{$errors->has('password') ? 'is-invalid' : ''}}" />
                  @if($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                  @endif
                </div>
                <button type="submit" class="btn btn-success btn-block mt-4">
                  Sign In To My Account
                </button>
                <a class="btn btn-signup w-75 mt-2" href="register.html">
                  Sign Up
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
@endsection
