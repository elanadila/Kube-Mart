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

    <title>Store - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/style/main.css') }}">
    <!-- <link href="style/main.css" rel="stylesheet" /> -->
  </head>

  <body>
    <!-- Navigation -->
     <!-- Desktop Menu -->
     <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
      aria-label="Navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="dashboard.html">
          <img src="{{ ('../assets/img/logo.svg') }}" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="{{ Request::is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home.index')}}">Home </a>
            </li>
            <li class="{{ Request::is('categories') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('category.index')}}">Categories</a>
            </li>
            <li class="{{ Request::is('map') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/map')}}">Address</a>
            </li>
			      <li class="{{ Request::is('store') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/store')}}">Store</a>
            </li>
          </ul>

          <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            @if(auth()->check(Auth::check()))
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
                  src="{{ ('../assets/img/icon-user.png') }}"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, {{is_null(auth()->user()->store) ? "-" : auth()->user()->store->name}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                <a class="dropdown-item" href="dashboard-account.html"
                  >Settings</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
            @else
            @endif
            <li class="nav-item">
              <a class="nav-link d-inline-block mt-2" href="/cart">
                <img src="{{ ('../assets/img/icon-cart-empty.svg') }}" alt="" />
              </a>
            </li>
          </ul>

          <!-- Mobile Menu -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a class="nav-link" href="/cart">
                Hi, {{is_null(auth()->user()->store) ? "-" : auth()->user()->store->name}}
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block" href="#">
                Cart
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    @yield('container')

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">
              2019 Copyright Store. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('/assets/vendor/jquery/jquery.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script type="text/javascript" src="{{ asset('/assets/script/navbar-scroll.js') }}"></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script type="text/javascript" src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>

    <script  type="text/javascript" src="{{ asset('/assets/function.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('/assets/script.js') }}"></script>

    <script>
      AOS.init();
    </script>
    <script src="{{ asset('/assets/vue/vue.js') }}"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script>
      Vue.use(Toasted);

      var register = new Vue({
        el: "#register",
        mounted() {
          AOS.init();
          this.$toasted.error(
            "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
            {
              position: "top-center",
              className: "rounded",
              duration: 1000,
            }
          );
        },
        data: {
          name: "Rich Chigga",
          email: "kamujagoan@gmail.id",
          password: "",
          is_store_open: true,
          store_name: "",
        },
      });
    </script>
  </body>
</html>
