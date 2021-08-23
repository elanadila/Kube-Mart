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
                Cart
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
          <table
            class="table table-borderless table-cart"
            aria-describedby="Cart"
          >
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Name &amp; Seller</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Menu</th>
              </tr>
            </thead>
            <tbody>
              @forelse($carts as $cart)
              @if(!is_null($cart->product))
              <tr>
                <td style="width: 20%;">
                  <img
                    src="{{ url('storage/'.(is_null($cart->product) ? 0 : $cart->product->photo) ) }}"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 30%;">
                  <div class="product-title">{{ (is_null($cart->product) ? '-' : $cart->product->name) }}</div>
                  <div class="product-subtitle">{{ (is_null($cart->product) ? 0 : $cart->product->store->name)  }}</div>
                </td>
                <td style="width: 20%;">
                  <div class="product-title">Rp. {{ (is_null($cart->product) ? 0 :  $cart->product->price) }}</div>
                  <div class="product-subtitle">Rupiah</div>
                </td>
                <td style="width: 10%;">
                <div class="product-title">{{$cart->quantity}}</div>
                    
                </td>
                <td style="width: 20%;">
                <div class="product-title">Rp. {{$cart->quantity * (is_null($cart->product) ? 0 : $cart->product->price)}}</div>
                </td>
                <td style="width: 15%;">
                  <a href="{{ route('cart.remove') . '?product_id='.$cart->product->id }}" class="btn btn-remove-cart">
                    Remove
                  </a>
                </td>
              </tr>
              @endif
              @empty
              <tr>
                <td>
                0 Cart found
                </td>
              </tr>
              @endforelse
              <!-- <tr>
                <td style="width: 25%;">
                  <img
                    src="{{ ('assets/img/product-cart-2.jpg') }}"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 25%;">
                  <div class="product-title">Sneaker</div>
                  <div class="product-subtitle">by BuildWith Angga</div>
                </td>
                <td style="width: 25%;">
                  <div class="product-title">Rp. 80.309</div>
                  <div class="product-subtitle">Rupiah</div>
                </td>
                <td style="width: 25%;">
                  <a href="#" class="btn btn-remove-cart">
                    Remove
                  </a>
                </td>
              </tr>
              <tr>
                <td style="width: 25%;">
                  <img
                    src="{{ ('assets/img/product-cart-3.jpg') }}"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 25%;">
                  <div class="product-title">Coffee Holder</div>
                  <div class="product-subtitle">by Addictex</div>
                </td>
                <td style="width: 25%;">
                  <div class="product-title">Rp. 13.492</div>
                  <div class="product-subtitle">Rupiah</div>
                </td>
                <td style="width: 25%;">
                  <a href="#" class="btn btn-remove-cart">
                    Remove
                  </a>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2 class="mb-4">Shipping Details</h2>
        </div>
      </div>
      <form method="POST" action="{{ route('checkout.step-1-submit') }}" class="mt-3">
      @csrf
      <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
        <div class="col-md-6">
          <div class="form-group">
            <label for="address">Address</label>
            <input
              type="text"
              class="form-control"
              id="address"
              aria-describedby="address"
              name="address"
              value="{{ old('address' )}}"
            />
            @if($errors->has('address'))
              <div class="text-danger">{{ $errors->first('address') }}</div>
            @endif
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="province">Province</label>
            <select name="province" id="province" class="form-control">
              <option value="West Java">West Java</option>
            </select>
          </div>
        </div>
        @if($errors->has('province'))
          <div class="text-danger">{{ $errors->first('province') }}</div>
        @endif
        <div class="col-md-4">
          <div class="form-group">
            <label for="city">City</label>
            <select name="city" id="city" class="form-control">
              <option value="Bandung">Bandung</option>
            </select>
          </div>
        </div>
        @if($errors->has('city'))
          <div class="text-danger">{{ $errors->first('city') }}</div>
        @endif
        <div class="col-md-4">
          <div class="form-group">
            <label for="postal_code">Postal Code</label>
            <input
              type="text"
              class="form-control"
              id="postal_code"
              name="postal_code"
              value="{{ old('postal_code' )}}"
            />
          </div>
        </div>
        @if($errors->has('postal_code'))
          <div class="text-danger">{{ $errors->first('postal_code') }}</div>
        @endif
        <div class="col-md-6">
          <div class="form-group">
            <label for="country">Country</label>
            <input
              type="text"
              class="form-control"
              id="country"
              name="country"
              value="{{ old('country' )}}"
            />
          </div>
        </div>
        @if($errors->has('country'))
          <div class="text-danger">{{ $errors->first('country') }}</div>
        @endif
        <div class="col-md-6">
          <div class="form-group">
            <label for="phone">Mobile</label>
            <input
              type="text"
              class="form-control"
              id="phone"
              name="phone"
              value="{{ old('phone' )}}"
            />
          </div>
        </div>
        @if($errors->has('phone'))
          <div class="text-danger">{{ $errors->first('phone') }}</div>
        @endif
        <div class="col-md-4">
          <div class="form-group">
            <label for="courier">Courier</label>
            <select name="courier" id="courier" class="form-control">
              <option value="JNE">JNE</option>
            </select>
          </div>
        </div>
        @if($errors->has('courier'))
          <div class="text-danger">{{ $errors->first('courier') }}</div>
        @endif
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2>Payment Informations</h2>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-4 col-md-2">
          <div class="product-title">Rp. 11.000</div>
          <div class="product-subtitle">Ship to Jakarta</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title text-success">Rp. {{ $totalPrice }}</div>
          <div class="product-subtitle">Total</div>
        </div>
        <div class="col-8 col-md-3">
          <button type="submit" 
            class="btn btn-success mt-4 px-4 btn-block"
          >
            Checkout Now
          </a>
        </div>
      </div>
      </form>
    </div>
  </section>
</div>


@endsection
