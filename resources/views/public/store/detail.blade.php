@extends('layout/main')

@section('container')
  <body>
  <div class="page-content page-home">
    <div class="page-dashboard">
      

        <!-- Page Content -->
        <div id="page-content-wrapper" style="  background: white;">
        

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
            >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Store</h2>
                <p class="dashboard-subtitle">
                  Store Details
                </p>
              </div>
              <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                            <img
                              src="{{ ('../assets/img/product-details-dashboard.png') }} "
                              alt=""
                              class="w-100 mb-3"
                            />
                          </div>
                          <div class="col-12 col-md-8">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">KUBE Name</div>
                                <div class="product-subtitle">{{$store->name}}</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Member KUBE </div>
                                <div class="product-subtitle">
                                  Ahmad Adli<br>
                                  Ela
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Mobile
                                </div>
                                <div class="product-subtitle">
                                {{$store->phone}}
                                </div>
                              </div>
                              <div class="col-12 col-md-12">
                                <div class="product-title">Description KUBE </div>
                                <div class="product-subtitle">{{$store->description}}</div>
                              </div>
                              <div class="col-12 col-md-12">
                                <div class="product-title">Address </div>
                                <div class="product-subtitle">{{$store->address}}</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
</div>
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var transactionDetails = new Vue({
        el: "#transactionDetails",
        data: {
          status: "SHIPPING",
          resi: "BDO12308012132",
        },
      });
    </script>
  </body>
</html>
@endsection
