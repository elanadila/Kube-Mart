@extends('layout/main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {

}


/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

  <body>
    <!-- Page Content -->
	  <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              
                <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 1</div>
  <img src="{{ ('assets/img/farming.jpg') }}" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="{{ ('assets/img/peternakan.jpg') }}" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="{{ ('assets/img/buah.jpg') }}" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
            </div>
          </div>
        </div>
      </section>
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
                    src="{{ ('assets/img/agronomy.png') }}"
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
                    src="{{ ('assets/img/fast-food.png') }}"
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
                    src="{{ ('assets/img/souvenir.png') }}"
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
                    src="{{ ('assets/img/cow.png') }}"
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
                    src="{{ ('assets/img/origami.png') }}"
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
                    src="{{ ('assets/img/paint-palette.png') }}"
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

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
@endsection
