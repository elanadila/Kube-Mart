@extends('layout/main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<body>
  
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
                    src="{{ ('assets/img/categories-gadgets.svg') }}"
                    alt="Gadgets Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Gadgets
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
                    src="{{ ('assets/img/categories-furniture.svg') }}"
                    alt="Furniture Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Furniture
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
                    src="{{ ('assets/img/categories-makeup.svg') }}"
                    alt="Makeup Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Makeup
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
                    src="{{ ('assets/img/categories-sneaker.svg') }}"
                    alt="Sneaker Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Sneaker
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a class="component-categories d-block" href="#">
                <div class="categories-image">
                  <img
                    src="{{ ('assets/img/categories-tools.svg') }}"
                    alt="Tools Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Tools
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a class="component-categories d-block" href="#">
                <div class="categories-image">
                  <img
                    src="{{ ('assets/img/categories-baby.svg') }}"
                    alt="Baby Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Baby
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
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a class="component-products d-block" href="/details">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-apple-watch.jpg')}});
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Apple Watch 4
				  
				   <img
                    src="{{ ('assets/img/8502.jpg') }} "
					class="mr-3 rounded-circle"
                      alt="image" height="30" width="30" 
                  />
				  
                </div>
                <div class="products-price">
                  $890
                </div>
				
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a class="component-products d-block" href="/details">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-orange-bogotta.jpg')}});
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Orange Bogotta
                </div>
                <div class="products-price">
                  $94,509
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a class="component-products d-block" href="/details">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-sofa-ternyaman.jpg')}});
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Sofa Ternyaman
                </div>
                <div class="products-price">
                  $1,409
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a class="component-products d-block" href="/details">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-bubuk-maketti.jpg')}});
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Bubuk Maketti
                </div>
                <div class="products-price">
                  $225
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a class="component-products d-block" href="/details">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-tatakan-gelas.jpg')}}); 
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Tatakan Gelas
                </div>
                <div class="products-price">
                  $45,184
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a class="component-products d-block" href="/details">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-mavic-kawe.jpg')}});
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Mavic Kawe
                </div>
                <div class="products-price">
                  $503
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <a class="component-products d-block" href="/details">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-black-edition-nike.jpg')}});
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Black Edition Nike
                </div>
                <div class="products-price">
                  $70,482
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a class="component-products d-block" href="/details">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{url('assets/img/products-monkey-toys.jpg')}});
                    "
                  ></div>
                </div>
                <div class="products-text">
                  Monkey Toys
                </div>
                <div class="products-price">
                  $783
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
@endsection
