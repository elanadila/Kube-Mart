@extends('layout/account')

@section('container')
<div class="page-content page-cart">

  <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="images/success.svg" alt="" class="mb-4" />
              <h3 class="multisteps-form__title">TRANSACTION PROCESSED!</h3>
              <h4>Thank You. Please Wait For Verification Payment Proof</h4>  
              <!-- <div>
              <a class="btn btn-success w-50 mt-4" href="https://api.whatsapp.com/send/?phone=6282386143678&text&app_absent=0">click here</a>
              </div> -->
              <P>if your payment status doesnt have any update in long time, just email us in kubemart@gmail.com</P>
              <div>
                <a class="btn btn-success w-50 mt-4" href="{{ route('dashboard.index')}}">
                  My Dashboard
                </a>
                <a class="btn btn-signup w-50 mt-2" href="{{ route('home.index')}}">
                  Go To Shopping
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection
