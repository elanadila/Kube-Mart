@extends('layout/main')

@section('container')
 <!-- Page Content -->
 <div class="page-content page-home">
   
      
   <section class="store-new-products">
        <div class="container">
            <div class="container">
            <!-- Page Content -->
        <div id="page-content-wrapper">
          
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
            >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">List Toko</h2>
                <p class="dashboard-subtitle">
                  Berikut Adalah List Toko KUBE Mart
                </p>
              </div>
              <div class="dashboard-content">
                <div class="tab-content" id="myTabContent">
                  <div
                    class="tab-pane fade show active"
                    id="sell"
                    role="tabpanel"
                    aria-labelledby="sell-tab"
                    >
                    <div class="row mt-3">
                      <div class="col-12 mt-2">
                      @foreach( $stores as $store)
                        <a
                          class="card card-list d-block"
                          href="/store/{{ $store->id }}"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="{{ ('assets/img/dashboard-icon-product-1.png') }}"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">
                              {{$store->name}}
                              </div>
                              <div class="col-md-3">
                                Sutiah
                              </div>
                              <div class="col-md-3">
                                12 Januari, 2020
                              </div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="{{ ('assets/img/dashboard-arrow-right.svg') }}"
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
              </div>
            </div>
          </div>


     </div>
     </div>
   </section>
   
@endsection
