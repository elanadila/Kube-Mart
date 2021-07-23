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
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img
                      src="{{ ('assets/img/icon-user.png') }}"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, Ela
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block mt-2" href="cart.html">
                    <img src="{{ ('assets/img/icon-cart-empty.svg') }}" alt="" />
                  </a>
                </li>
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Hi, Ela
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block" href="#">
                    Cart
                  </a>
                </li>
              </ul>
            </div>
          </nav>

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Products</h2>
                <p class="dashboard-subtitle">
                  Manage it well and get money
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <a
                      href="/dashboard-products-create"
                      class="btn btn-success"
                      >Add New Product</a
                    >
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details"
                    >
                      <div class="card-body">
                        <img
                          src="{{ ('assets/img/product-card-1.png') }} "
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details"
                    >
                      <div class="card-body">
                        <img
                          src="{{ ('assets/img/product-card-2.png') }}"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details"
                    >
                      <div class="card-body">
                        <img
                          src="{{ ('assets/img/product-card-3.png') }}"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details"
                    >
                      <div class="card-body">
                        <img
                          src="{{ ('assets/img/product-card-4.png') }}"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="/dashboard-products-details"
                    >
                      <div class="card-body">
                        <img
                          src="{{ ('assets/img/product-card-5.png') }}"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
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