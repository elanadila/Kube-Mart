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
    <form method="POST" action="{{route('checkout.step-3-submit')}}" enctype="multipart/form-data">
    @csrf
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <div class="multisteps-form__content">
              <div class="form-row mt-4">
                <h3>Please upload your proof of payment here </h3>
                <input type="file" class="form-control pt-1" id="thumbnails" aria-describedby="thumbnails" name="payment_file"/>
                <input type="hidden" name="address" value="{{$transaction->address}}">
                <input type="hidden" name="city" value="{{$transaction->city}}">
                <input type="hidden" name="province" value="{{$transaction->province}}">
                <input type="hidden" name="country" value="{{$transaction->country}}">
                <input type="hidden" name="postal_code" value="{{$transaction->postal_code}}">
                <input type="hidden" name="phone" value="{{$transaction->phone}}">
                <input type="hidden" name="courier" value="{{$transaction->courier}}">
                <input type="hidden" name="total_price" value="{{$transaction->total_price}}">
                <label><i>Only Accepted .jpg, .jpeg, .png, .pdf</i></label>
              </div>
            </div>
            <div class="button-row d-flex mt-4">
              <button type="submit" class="btn btn-primary mt-4 px-4 btn-block">Upload Proof Of Payment</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</div>


@endsection
