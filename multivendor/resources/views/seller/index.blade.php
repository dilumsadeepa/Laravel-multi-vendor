<?php
use Carbon\Carbon;
$date = Carbon::now()->format('Y-m-d');
$time = Carbon::now()->format('H:i:s');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Seller Dashbord</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->


    {{-- nav start --}}

    @include('seller.sellernav')

    {{-- nav end --}}


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>



      <!-- start side bar -->

      @include('seller.sellersidebar')


      {{-- end if sidebar --}}






      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  @auth
                  <h3 class="font-weight-bold">Welcome {{auth()->user()->name}}</h3>
                  @endauth
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>

              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        {{-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>Stats @</h2> --}}
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">{{ $date }}</h4>
                        <h6 class="font-weight-normal">{{ $time }}</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today’s Orders</p>
                      <p class="fs-30 mb-2">4</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">This month Orders</p>
                      <p class="fs-30 mb-2">22</p>
                      <p>22.00% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">All Orders</p>
                      <p class="fs-30 mb-2">230</p>
                      <p>2.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Toatl Revenue</p>
                      <p class="fs-30 mb-2">EUR 2300</p>
                      <p>0.22% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>







          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Orders</h4>
                <p class="card-description">
                  All <code>.Orders</code>
                </p>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          User
                        </th>
                        <th>
                          User name
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Order Date
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td>
                        <td>
                          Herman Beck
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2023
                        </td>
                        <td>
                            <button href="{{url('orderdetail')}}" type="button"  class="btn btn-success btn-icon-text">
                                <i class="ti-file btn-icon-append"></i>                                                    
                                View
                              </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face2.jpg" alt="image"/>
                        </td>
                        <td>
                          Messsy Adam
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $245.30
                        </td>
                        <td>
                            May 15, 2023
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-file btn-icon-append"></i>                                                    
                                View
                              </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face3.jpg" alt="image"/>
                        </td>
                        <td>
                          John Richards
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $138.00
                        </td>
                        <td>
                            May 15, 2023
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-file btn-icon-append"></i>                                                    
                                View
                              </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face4.jpg" alt="image"/>
                        </td>
                        <td>
                          Peter Meggik
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                            May 15, 2023
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-file btn-icon-append"></i>                                                    
                                View
                              </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face5.jpg" alt="image"/>
                        </td>
                        <td>
                          Edward
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 160.25
                        </td>
                        <td>
                            May 15, 2023
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-file btn-icon-append"></i>                                                    
                                View
                              </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face6.jpg" alt="image"/>
                        </td>
                        <td>
                          John Doe
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 123.21
                        </td>
                        <td>
                            May 15, 2023
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-file btn-icon-append"></i>                                                    
                                View
                              </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../images/faces/face7.jpg" alt="image"/>
                        </td>
                        <td>
                          Henry Tom
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td>
                          $ 150.00
                        </td>
                        <td>
                            May 15, 2023
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-file btn-icon-append"></i>                                                    
                                View
                              </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->


        <!-- footer start -->

          @include('seller.sellerfooter')

        <!-- footer end -->


      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

