@extends('layout/main')

@section('container')
<!DOCTYPE html>
<html lang="en">

  <body>
    <!-- Page Content -->
	  <div class="page-content page-home">

    <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a class="component-categories d-block" href="{{ route('category.detail', 1) }}">
                <div class="categories-image">
                  <img
                    src="{{ ('/../assets/img/agronomy.png') }}"
                    alt="Gadgets Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Agriculture
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a class="component-categories d-block" href="{{ route('category.detail', 2) }}">
                <div class="categories-image">
                  <img
                    src="{{ ('/../assets/img/fast-food.png') }}"
                    alt="Furniture Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                Food
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a class="component-categories d-block" href="{{ route('category.detail', 3) }}">
                <div class="categories-image">
                  <img
                    src="{{ ('/../assets/img/souvenir.png') }}"
                    alt="Makeup Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                Souvenir
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a class="component-categories d-block" href="{{ route('category.detail', 4) }}">
                <div class="categories-image">
                  <img
                    src="{{ ('/../assets/img/cow.png') }}"
                    alt="Sneaker Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                Farm
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a class="component-categories d-block" href="{{ route('category.detail', 5) }}">
                <div class="categories-image">
                  <img
                    src="{{ ('/../assets/img/origami.png') }}"
                    alt="Sneaker Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                Craft
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a class="component-categories d-block" href="{{ route('category.detail', 6) }}">
                <div class="categories-image">
                  <img
                    src="{{ ('/../assets/img/paint-palette.png') }}"
                    alt="Sneaker Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                Art
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
              <a class="component-products d-block" href="{{ route('home.detail', $product->id) }}">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url({{ url('storage/'.$product->photo) }});
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
