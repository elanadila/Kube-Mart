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
 <!-- Page Content -->
 <div class="page-dashboard">
   
    
            <!-- Page Content -->
        <div id="page-content-wrapper">
          
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
            >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">List KUBE</h2>
                <p class="dashboard-subtitle">
                  Berikut Adalah List Toko KUBE Mart
                </p>
              </div>
              <div class="row">
                  <div class="col-12">
                  @include('layout.alert')
                    <a
                      href="{{ route('store.create') }}"
                      class="btn btn-success"
                      >Add New Store (Registration)</a
                    >
                  </div>
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
                          href="{{ route('store.edit', $store->id) }}"
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
                              {{$store->name}}
                              </div>
                              <div class="col-md-3">
                              {{$store->address}}
                              </div>
                              <div class="col-md-3">
                              {{$store->phone}}
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

   
@endsection
