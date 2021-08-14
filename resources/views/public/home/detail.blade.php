@extends('layout/account')

@section('container')


      <!-- Mobile Menu -->
      <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cart.index') }}">
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

<!-- Page Content -->
<div class="page-content page-details">
  <section
    class="store-breadcrumbs"
    data-aos="fade-down"
    data-aos-delay="100"
  >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Product Details
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="store-gallery" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-8" data-aos="zoom-in">
          <transition name="slide-fade" mode="out-in">
            <img
              :key="photos[activePhoto].id"
              :src="photos[activePhoto].url"
              class="w-100 main-image"
              alt=""
            />
          </transition>
        </div>
        <div class="col-lg-2">
          <div class="row">
            <div
              class="col-3 col-lg-12 mt-2 mt-lg-0"
              v-for="(photo, index) in photos"
              :key="photo.id"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <a href="#" @click="changeActive(index)">
                <img
                  :src="photo.url"
                  class="w-100 thumbnail-image"
                  :class="{ active: index == activePhoto }"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="store-details-container" data-aos="fade-up">
    <section class="store-heading">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-4">
            <img
              src="{{ url('storage/'.$product->photo) }} "
              alt=""
              class="w-100 mb-3"
            />
          </div>
          <div class="col-lg-6">
            <h1> {{$product->name}}</h1>
            <div class="owner">By {{$product->store->name}}</div>
            <div class="price">Rp. {{$product->price}}</div>
            <div class="store-description"> {{$product->description}}</div>
          </div>
          <div class="col-lg-2" data-aos="zoom-in">
            <a
              class="btn btn-success nav-link px-4 text-white btn-block mb-3"
              href=" {{ route('cart.store') . '?product_id=' . $product->id }}"
              >Add to Cart</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="store-review">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mt-3 mb-3">
            <h5>Customer Review (3)</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <ul class="list-unstyled">
              <li class="media">
                <img src="{{ ('../assets/img/icon-testimonial-1.png') }}"
                class="mr-3 rounded-circle"
                alt=""
                />
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Hazza Risky</h5>
                  I thought it was not good for living room. I really happy
                  to decided buy this product last week now feels like
                  homey.
                </div>
              </li>
              <li class="media my-4">
                <img
                src="{{ ('../assets/img/icon-testimonial-2.png') }}"
                class="mr-3 rounded-circle"
                alt=""
                />
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                  Color is great with the minimalist concept. Even I thought
                  it was made by Cactus industry. I do really satisfied with
                  this.
                </div>
              </li>
              <li class="media">
                <img
                src="{{ ('../assets/img/icon-testimonial-3.png') }}"
                class="mr-3 rounded-circle"
                alt=""
                />
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                  When I saw at first, it was really awesome to have with.
                  Just let me know if there is another upcoming product like
                  this.
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

@endsection