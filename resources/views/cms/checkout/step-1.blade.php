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
                    <table class="table">
                    @foreach($products as $product)
                       
                      <tr>
                        <td>{{ $product['name'] }} 
                          <br>Rp. {{$product['price'] }} x {{$product['quantity']}}</td>
                        <td>Rp. {{$product['quantity'] * $product['price']}}</td>
                      </tr>
                      @endforeach
                    </table> 
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                    <b>Billing Address</b>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      {{$transaction->address}},  {{$transaction->city}}, {{$transaction->province}}, {{$transaction->country}}, {{$transaction->postal_code}}.
                    </div>
                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                     Please <b>Transfer</b> Money Amounting to <b>Rp. {{$transaction->total_price}} </b>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                    Transfer to Account: <b>MANDIRI : 13011293846</b>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                    On Behalf Of : <b>PT. KUBEMART INDONESIA</b>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                    Attention: If you have transferred, don't forget to screenshot/photo of the proof of payment.
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <a
                        href=" {{ route('checkout.step-2') }}"
                        class="btn btn-primary mt-4 px-4 btn-block"
                    >
                        Already Paid
                    </a>
                  </div>
                </div>
      </div>
    </div>
  </section>
</div>


@endsection
