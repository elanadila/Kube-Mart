@extends('layout/admin')

@section('container')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
  </head>

  <body>
    <div class="page-dashboard">

        <!-- Page Content -->
        <div id="page-content-wrapper">


          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Add New Store</h2>
                <p class="dashboard-subtitle">
                  Registration Store
                </p>
              </div>
              @include('layout.alert')
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">

                  <form method="POST" action="{{ route('auth.register-submit') }}" class="mt-3">
                     @csrf
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input
                                        type="text"
                                        class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                        aria-describedby="nameHelp"
                                        v-model="name"
                                        autofocus,
                                        name="name"
                                        value="{{ old('name' )}}"
                                    />
                                    @if($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                        </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                              <label>KUBE Name</label>
                              <input
                                  type="text"
                                  class="form-control {{$errors->has('namatoko') ? 'is-invalid' : ''}}"
                                  aria-describedby="namatoko"
                                  v-model="namatoko"
                                  name="namatoko"
                                  value="{{ old('name' )}}"
                              />
                            @if($errors->has('namatoko'))
                                <div class="text-danger">{{ $errors->first('namatoko') }}</div>
                            @endif

                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label>Email</label>
                            <input
                                type="email"
                                class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                                aria-describedby="emailHelp"
                                v-model="email"
                                name="email"
                                value="{{ old('name' )}}"
                                
                            />
                            @if($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                            </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" name="password"/>
                              @if($errors->has('password'))
                                  <div class="text-danger">{{ $errors->first('password') }}</div>
                              @endif
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group" v-if="is_store_open">
                  <label>Category</label>
                  <select name="category_store_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" >{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col">
                          <button
                            type="submit"
                            class="btn btn-success btn-block px-5"
                          >
                            Registration Store
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>
@endsection
