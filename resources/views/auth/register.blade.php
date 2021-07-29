@extends('layout/main')

@section('container')
  <!-- Page Content -->
	<div class="page-content page-home">
    <div class="page-content page-auth mt-5" id="register">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4">
              @include('layout.alert')
              <h2>
                Memulai untuk jual beli <br />
                dengan cara terbaru
              </h2>
              <form method="POST" action="{{ route('auth.register-submit') }}" class="mt-3">
                @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input
                    type="text"
                    class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                    aria-describedby="nameHelp"
                    v-model="name"
                    autofocus,
                    name="name"
                  />
                  @if($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input
                    type="email"
                    class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                    aria-describedby="emailHelp"
                    v-model="email"
                    name="email"
                    
                  />
                  @if($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" name="password"/>
                  @if($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Nama Toko</label>
                  <input
                    type="text"
                    class="form-control {{$errors->has('namatoko') ? 'is-invalid' : ''}}"
                    aria-describedby="namatoko"
                    v-model="namatoko"
                    name="namatoko"
                  />
                  @if($errors->has('namatoko'))
                    <div class="text-danger">{{ $errors->first('namatoko') }}</div>
                  @endif

                </div>
                <div class="form-group">
                  <p class="text-muted">
                    Isi nama toko jika anda ingin menjual produk anda
                  </p>
                  
                </div>
                <div class="form-group" v-if="is_store_open">
                  <label>Kategori</label>
                  <select name="category_store_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" >{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-success btn-block mt-4">
                  Sign Up Now
                </button>
                <button type="submit" class="btn btn-signup btn-block mt-2">
                  Back to Sign In
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
@endsection