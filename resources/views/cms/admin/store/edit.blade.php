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
                <h2 class="dashboard-title">Store {{$store->name}}</h2>
                <p class="dashboard-subtitle">
                  Update your current store
                </p>
              </div>
              @include('layout.alert')
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="{{ route('store.update', $store->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card">
                        <div class="card-body">
                          <div class="row mb-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Your Store Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="name"
                                  aria-describedby="emailHelp"
                                  name="name"
                                  value="{{$store->name}}"
                                />
                                @if($errors->has('name'))
                                  <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="phone">Phone</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="phone"
                                  aria-describedby="phone"
                                  name="phone"
                                  value="{{$store->phone}}"
                                />
                                @if($errors->has('phone'))
                                  <div class="text-danger">{{ $errors->first('phone') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="email"
                                  aria-describedby="emailHelp"
                                  name="email"
                                  value="{{auth()->user()->email}}"
                                />
                                @if($errors->has('name'))
                                  <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-group" v-if="is_store_open">
                                <label>Category</label>
                                <select name="category_store_id" class="form-control">
                                  @foreach($categories as $category)
                                  <option value="{{$product->category->name}}" >{{$category->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="addressOne">address</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="address"
                                  aria-describedby="address"
                                  name="address"
                                  value="{{$store->address}}"
                                />
                                @if($errors->has('address'))
                                  <div class="text-danger">{{ $errors->first('address') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="addressTwo">Description</label>
                                <textarea
                                  name="description"
                                  id=""
                                  cols="30"
                                  rows="4"
                                  class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
                                >{{$store->description}}
                                </textarea>
                                @if($errors->has('description'))
                                  <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col">
                              <button
                                type="submit"
                                class="btn btn-success btn-block px-5"
                              >
                                Update Data
                              </button>
                              <a href="{{ route('store.delete', $store->id) }}" class="btn btn-danger btn-block px-5">
                                Delete this Store
                              </a>
                              
                            </div>
                          </div>
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