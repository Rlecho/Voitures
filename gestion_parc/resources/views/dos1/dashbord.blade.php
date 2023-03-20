<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('font/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('font/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href=" {{asset('font/vendors/css/vendor.bundle.base.css ') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('font/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('font/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset ('font/css/style.css ') }}">
    <link rel="stylesheet" href="{{asset ('font/css/style.css.map ') }}">
    <!-- End layout styles -->
  </head>
        <body>
            <section style="background-color: #ffffff;">
                <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="index.html"><img src=" {{ asset ('font/images/logo.png') }}" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-stretch">
                        <button class=" btn_sign " type="button">
                        <span>S'inscrire</span>
                        </button>
                    
                        <button class=" btn_log" type="button">
                        <span>Se connecter</span>
                        </button>
                    </div>
            </nav>
            </section>
           
            <div class="container-fluid page-body-wrapper">

<!-- partial:partials/_sidebar.html -->
{% include 'connectes/partials/_sidebar.html' %}

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
          <p>Like what you see? Check out our premium version for more.</p>
          <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
          <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
          <i class="mdi mdi-close" id="bannerClose"></i>
        </span>
      </div>
    </div>
    <div class="d-xl-flex justify-content-between align-items-start">
      <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
      <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
        <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
          <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
          <button type="button" class="btn btn-link text-light py-0">3 Month</button>
        </div>
        <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
          <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
            <h6 class="dropdown-header">Settings</h6>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
          <ul class="nav nav-tabs tab-transparent" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Conversion</a>
            </li>
          </ul>
          <div class="d-md-block d-none">
            <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
            <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
          </div>
        </div>
        <div class="tab-content tab-transparent-content">
          <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
            <div class="row">
              <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body text-center">
                    <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                    <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                    <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                    <p class="mt-4 mb-0">Completed</p>
                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body text-center">
                    <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                    <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                    <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                    <p class="mt-4 mb-0">Increased since yesterday</p>
                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                  </div>
                </div>
              </div>
              <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body text-center">
                    <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                    <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                    <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                    <p class="mt-4 mb-0">Increased since yesterday</p>
                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body text-center">
                    <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                    <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                    <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                    <p class="mt-4 mb-0">Decreased since yesterday</p>
                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
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


        </body>


</html>
