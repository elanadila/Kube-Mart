@extends('layout/main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<body>
  
<div class="page-content page-home">
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
                  UKM Pangan
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
                  UKM Pertanian
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
                  UKM Kerajinan
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
                  UKM Peternakan
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
                  UKM Kesenian
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
                  UKM Rekreasi
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
                  Tas Malwas
				  
                </div>
                <div class="products-price">
                  Rp 890.000
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
                  Golek Waris
                </div>
                <div class="products-price">
                  Rp 94.509
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
                  Efris
                </div>
                <div class="products-price">
                  Rp 199.409
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
                  Herbal Jahe Merah
                </div>
                <div class="products-price">
                  Rp 50.000
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
                  Rp 45.184
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
                  Kerupuk Jember
                </div>
                <div class="products-price">
                  Rp 20.000
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
                  Wayang Cepot
                </div>
                <div class="products-price">
                  Rp 200.199
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
                  Tanaman Obat
                </div>
                <div class="products-price">
                  Rp 28.000
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
