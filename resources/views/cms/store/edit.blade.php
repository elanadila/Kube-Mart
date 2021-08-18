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
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">
                  Update your current profile
                </p>
              </div>
              @include('layout.alert')
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="{{ route('store.updateKube', $store->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card">
                        <div class="card-body">
                          <div class="row mb-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Your Name</label>
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
                            <!-- <div class="col-md-4">
                              <div class="form-group">
                                <label for="province">Province</label>
                                <select
                                  name="province"
                                  id="province"
                                  class="form-control"
                                >
                                  <option value="West Java">West Java</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="city">City</label>
                                <select
                                  name="city"
                                  id="city"
                                  class="form-control"
                                >
                                  <option value="Bandung">Bandung</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="postalCode"
                                  name="postalCode"
                                  value="40512"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="country">Country</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="country"
                                  name="country"
                                  value="Indonesia"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="mobile"
                                  name="mobile"
                                  value="+628 2020 11111"
                                />
                              </div>
                            </div> -->
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
                              >
                                Save Now
                              </button>
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