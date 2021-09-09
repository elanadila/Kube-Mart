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
                    @foreach($listsTransactions as $productTransaction)
                    <div class="card card-list d-block {{ (request()->is('transaction/store*')) ? 'active' : '' }}" >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                          <a href="{{ route('transaction.detail', $productTransaction['transaction_id']) }}">
                            {{$productTransaction['type']}}
                          </a>
                          </div>
                          <div class="col-md-3" style="color: white;">
                          {!! $productTransaction['status'] !!}
                          </div>
                          <div class="col-md-3">
                          Rp. {{ $productTransaction['total'] }}
                          </div>
                          <div class="col-md-3">
                          {{$productTransaction['date']}}
                          </div>
                        </div>
                      </div>
                    </div>
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
