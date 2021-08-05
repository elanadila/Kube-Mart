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
                <h2 class="dashboard-title">{{$product->name}}</h2>
                <p class="dashboard-subtitle">
                  Product Details
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Product Name</label>
                                <input
                                  type="text"
                                  class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                  id="name"
                                  aria-describedby="name"
                                  name="name"
                                  value="{{$product->name}}"
                                />
                                @if($errors->has('name'))
                                  <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Price</label>
                                <input
                                  type="number"
                                  class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}"
                                  id="price"
                                  aria-describedby="price"
                                  name="price"
                                  value="{{$product->price}}"
                                />
                                @if($errors->has('price'))
                                  <div class="text-danger">{{ $errors->first('price') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Stock</label>
                                <input
                                  type="number"
                                  class="form-control {{$errors->has('stock') ? 'is-invalid' : ''}}"
                                  id="stock"
                                  aria-describedby="stock"
                                  name="stock"
                                  value="{{$product->stock}}"
                                />
                                @if($errors->has('stock'))
                                  <div class="text-danger">{{ $errors->first('stock') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Weight</label>
                                <input
                                  type="text"
                                  class="form-control {{$errors->has('weight') ? 'is-invalid' : ''}}"
                                  id="weight"
                                  aria-describedby="weight"
                                  name="weight"
                                  value="{{$product->weight}}"
                                />
                                @if($errors->has('weight'))
                                  <div class="text-danger">{{ $errors->first('weight') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea
                                  name="description"
                                  id=""
                                  cols="30"
                                  rows="4"
                                  class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
                                >{{$product->description}}
                                </textarea>
                                @if($errors->has('description'))
                                  <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="thumbnail">thumbnail</label>
                                <input
                                  type="file"
                                  multiple
                                  class="form-control pt-1"
                                  id="thumbnail"
                                  aria-describedby="thumbnail"
                                  name="thumbnail"
                                  value=""
                                />
                                @if($errors->has('thumbnail'))
                                  <div class="text-danger">{{ $errors->first('thumbnail') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="category_id">Category Product</label>
                                <select name="category_id" class="form-control {{$errors->has('category_id') ? 'is-invalid' : ''}}">
                                  @foreach($categories as $category)
                                  @if($product->category_id == $category->id)
                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                  @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endif
                                  @endforeach
                                </select>
                                @if($errors->has('category_id'))
                                  <div class="text-danger">{{ $errors->first('category_id') }}</div>
                                @endif
                              </div>
                            </div>
                            <div class="col">
                              <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger btn-block px-5">
                                Delete this Product
                              </a>
                                <button
                                type="submit"
                                class="btn btn-success btn-block px-5"
                              >
                                Update Data
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                        </div>
                      </div>
                    </div>
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
    <script>
      function thisFileUpload() {
        document.getElementById("file").click();
      }
    </script>
  </body>
</html>
@endsection
