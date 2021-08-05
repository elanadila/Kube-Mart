@extends('layout/main')

@section('container')
<!DOCTYPE html>
<html lang="en">

  <body>
    <!-- Page Content -->
	  <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#storeCarousel"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
				  <div class="slider">
				  <figure>
					<div class="slide">
                    <img
                      src="{{ ('assets/img/banner.jpg') }}"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
					</div>
                  <div class="slide">
                    <img
                      src="{{ ('assets/img/banner.jpg') }}"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="slide">
                    <img
                      src="{{ ('assets/img/banner.jpg') }}"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
				  </figure>
				  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a class="component-categories d-block" href="#">
                <div class="categories-image">
                  <img
                    src="{{ ('assets/img/vegetable.png') }}"
                    alt="Gadgets Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Sumber Sayuran
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a class="component-categories d-block" href="#">
                <div class="categories-image">
                  <img
                    src="{{ ('assets/img/fruits.png') }}"
                    alt="Furniture Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                Sumber Buah Buahan
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a class="component-categories d-block" href="#">
                <div class="categories-image">
                  <img
                    src="{{ ('assets/img/carbohydrates.png') }}"
                    alt="Makeup Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                Sumber Karbohidrat
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a class="component-categories d-block" href="#">
                <div class="categories-image">
                  <img
                    src="{{ ('assets/img/protein.png') }}"
                    alt="Sneaker Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                Sumber Protein
                </p>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>New Products</h5>
            </div>
          </div>
          <div class="row">
          @foreach( $products as $product)
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a class="component-products d-block" href="/product-details/{{ $product->id }}">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-apple-watch.jpg')}});
                    "
                  ></div>
                </div>
                <div class="products-text">
                {{$product->name}}
				  
                </div>
                <div class="products-price">
                Rp. {{$product->price}}
                </div>
				
              </a>
            </div>
            @endforeach
          </div>
          
        </div>
      </section>
    </div>
  </body>
</html>
@endsection
