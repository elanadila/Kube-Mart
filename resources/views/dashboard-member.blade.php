@extends('layout/admin')

@section('container')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
  </head>

  <body>
    <div class="page-dashboard">
      
        <!-- Page Content -->
        <div id="page-content-wrapper">
          
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
            >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Member KUBE Mart Toko Malwas</h2>
                <p class="dashboard-subtitle">
                  Berikut list anggota yang bisa akases toko Malwas
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
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="{{ ('assets/img/icon-testimonial-1.png') }}"
                                  alt="" style="width: 50px;"
                                />
                              </div>
                              <div class="col-md-4">
                                Ahmad Adli
                              </div>
                              <div class="col-md-3">
                                Cimahi
                              </div>
                              <div class="col-md-3">
                              089602333222
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
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="{{ ('assets/img/icon-testimonial-3.png') }}"
                                  alt="" style="width: 50px;"
                                />
                              </div>
                              <div class="col-md-4">
                                Hana
                              </div>
                              <div class="col-md-3">
                                Bandung
                              </div>
                              <div class="col-md-3">
                              089602333222
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
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="{{ ('assets/img/icon-testimonial-2.png') }}"
                                  alt=""
                                  style="width: 50px;"
                                />
                              </div>
                              <div class="col-md-4">
                                Ela Nadila
                              </div>
                              <div class="col-md-3">
                                Garut
                              </div>
                              <div class="col-md-3">
                                089602333222
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
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="buy"
                    role="tabpanel"
                    aria-labelledby="buy-tab"
                  >
                    <div class="row mt-3">
                      <div class="col-12 mt-2">
                        <a
                          class="card card-list d-block"
                          href="/dashboard-transactions-details"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="{{ ('assets/img/icon-testimonial-3.png') }}"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">
                                Shirup Marzzan
                              </div>
                              <div class="col-md-3">
                                Rich
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
  </body>
</html>
@endsection
