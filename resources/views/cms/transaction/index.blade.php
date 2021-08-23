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
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: white;
  color: #0c0d36;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
    /* border-bottom: 2px solid #0c0d36; */
}

.tablink:hover {
  border-bottom: 2px solid #0c0d36;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: #0c0d36;
  display: none;
  padding: 60px 0px;
  height: 100%;
}

#Sell {background-color: #f5f5fb;}
#Buy {background-color: #f5f5fb;}
</style>

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
                <h2 class="dashboard-title">Transactions</h2>
                <p class="dashboard-subtitle">
                  Big result start from the small one
                </p>
              </div>
              <div class="dashboard-content">
              <button class="tablink" onclick="openPage('Sell', this, '#f5f5fb')" id="defaultOpen">Sell Product</button>
              <button class="tablink" onclick="openPage('Buy', this, '#f5f5fb')" >Buy Product</button>
                <!-- <ul class="nav nav-pills" id="myTab" role="tablist" >
                  <li class="nav-item" role="presentation" onclick="openPage('Sell', this, 'red')" id="defaultOpen">
                    <a
                      class="nav-link"
                      id="sell-tab"
                      data-toggle="tab"
                      href="#sell"
                      role="tab"
                      aria-controls="sell"
                      aria-selected="true"
                      >Sell Product</a
                    >
                  </li>
                  <li class="nav-item"  onclick="openPage('Buy', this, 'green')">
                    <a
                      class="nav-link"
                      id="buy-tab"
                      data-toggle="tab"
                      href="#buy"
                      role="tab"
                      aria-controls="buy"
                      aria-selected="false"
                      >Buy Product</a
                    >
                  </li>
                </ul> -->
                <div class="tabcontent" id="Sell">
                  <div
                    class="tab-pane fade show active"
                    id="sell"
                    role="tabpanel"
                    aria-labelledby="sell-tab"
                  >
                    <div class="row mt-3">
                      <div class="col-12 mt-2">
                        <a
                          class="card card-list d-block {{ (request()->is('transaction/store*')) ? 'active' : '' }}"
                          href="{{ route('transaction.detail')}}"
                        >
                          <div class="card-body">
                            <div class="row">
                              @foreach($products as $product)
                              <div class="col-md-1">
                                <img
                                  src="{{ ('../assets/img/dashboard-icon-product-1.png') }}"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">
                             {{$product->name}} 
                              </div>
                              <div class="col-md-3">
                                Sukapura Mart
                              </div>
                              @endforeach
                              @foreach($transactions as $transaction)
                             
                              <div class="col-md-3">
                              {{$transaction->created_at}} 
                              </div>
                              @endforeach
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="{{ ('../assets/img/dashboard-arrow-right.svg') }}"
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
                                  src="{{ ('../assets/img/dashboard-icon-product-1.png') }}"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">
                                Anggur
                              </div>
                              <div class="col-md-3">
                                Logam Mart
                              </div>
                              <div class="col-md-3">
                                12 Januari, 2020
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
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabcontent" id="Buy">
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
                          href="{{ route('transaction.detail') }}"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="{{ ('../assets/img/dashboard-icon-product-1.png') }}"
                                  alt=""
                                />
                              </div>
                              <div class="col-md-4">
                                Banana
                              </div>
                              <div class="col-md-3">
                                Margacinta Mart
                              </div>
                              <div class="col-md-3">
                                12 Januari, 2020
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
    <script type="text/javascript" src="{{ asset('/assets/vendor/jquery/jquery.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
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
    <script>
      function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>
   
  </body>
</html>
@endsection
