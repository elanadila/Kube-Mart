@extends('layout/admin')

@section('container')
<!DOCTYPE html>
<html lang="en">

  <body>
        <!-- Page Content -->
        <div id="page-content-wrapper">

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">
                  Look what you have made today!
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Customer
                        </div>
                        <div class="dashboard-card-subtitle">
                        {{ count($totalCustomer)}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Revenue
                        </div>
                        <div class="dashboard-card-subtitle">
                        Rp. {{$totalRevenue}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Transaction
                        </div>
                        <div class="dashboard-card-subtitle">
                        {{count($totalTransaction)}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    @foreach($transactionSell as $productTransaction)
                    <a
                          class="card card-list d-block {{ (request()->is('transaction/store*')) ? 'active' : '' }}"
                          href="{{ route('transaction.detail', $productTransaction->transaction_id) }}"
                        >

                          <div class="card-body">
                            <div class="row">

                              <div class="col-md-1">
                                <img
                                  src="{{ url('storage/'.$productTransaction->product->photo) }}"
                                  class="w-100 mb-3"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">
                              {{$productTransaction->product->name}}
                              </div>
                              <div class="col-md-3">
                              {{$productTransaction->product->store->name}}
                              </div>


                              <div class="col-md-3">
                              {{$productTransaction->created_at}}
                              </div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="{{ ('../assets/img/dashboard-arrow-right.svg') }}"
                                  alt=""
                                />
                              </div>

                            </div>
                          </div>

                        </a>
                        @endforeach
                        @foreach($transactionBuy as $productTransactionBuy)
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details"
                        >
                          <div class="card-body">
                            <div class="row">
                            <div class="col-md-1">
                                @foreach($productTransactionBuy->products_transactions as $product)
                                <img
                                  src="{{ url('storage/'.$product->product->photo) }}"
                                  alt=""
                                  class="w-100 mb-3"
                                />
                                @endforeach
                              </div>
                              <div class="col-md-4">
                              @foreach($productTransactionBuy->products_transactions as $product)
                                  {{$product->product->name}}
                                @endforeach
                              </div>
                              <div class="col-md-3">
                              @foreach($productTransactionBuy->products_transactions as $product)
                                  {{$product->product->store->name}}
                                @endforeach
                              </div>


                              <div class="col-md-3">
                              {{$productTransactionBuy->created_at}}
                              </div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="{{ ('../assets/img/dashboard-arrow-right.svg') }}"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                        @endforeach
                  </div>
                </div>
              </div>
            </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
  </body>
</html>
@endsection
