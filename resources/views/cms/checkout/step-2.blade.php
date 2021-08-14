@extends('layout/account')

@section('container')
<div class="page-content page-cart">
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
              <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Checkout
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="store-cart">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12 table-responsive">
        <div class="multisteps-form__content">
                  <div class="form-row mt-4">

<h3>Please upload your proof of payment here </h3>
                  <input
                      type="file"
                      multiple
                      class="form-control pt-1"
                      id="thumbnails"
                      aria-describedby="thumbnails"
                      name="thumbnails"
                    />
                  </div>
                  </div>
                  
                  <div class="button-row d-flex mt-4">
                    <a
                        href=" {{ route('checkout.step-3') }}"
                        class="btn btn-primary mt-4 px-4 btn-block"
                    >
                      Upload Proof Of Payment
                    </a>
                  </div>
                </div>
      </div>
    </div>
  </section>
</div>


@endsection
