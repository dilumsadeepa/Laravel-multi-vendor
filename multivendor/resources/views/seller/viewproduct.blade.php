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

            {{-- content start --}}


           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Available Products</h4>
                  <p class="card-description">
                    List of <code>.Items</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Qnt</th>
                          <th>price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td>53275531</td>
                          <td>
                            <button type="button" class="btn btn-dark btn-icon-text">
                                Edit
                                <i class="ti-file btn-icon-append"></i>                          
                              </button>

                              <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-alert btn-icon-prepend"></i>                                                    
                                Delete
                              </button>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>53275532</td>
                          <td>15 May 2017</td>
                          <td>53275531</td>
                          <td>
                            <button type="button" class="btn btn-dark btn-icon-text">
                                Edit
                                <i class="ti-file btn-icon-append"></i>                          
                              </button>

                              <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-alert btn-icon-prepend"></i>                                                    
                                Delete
                              </button>
                          </td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>53275533</td>
                          <td>14 May 2017</td>
                          <td>53275531</td>
                          <td>
                            <button type="button" class="btn btn-dark btn-icon-text">
                                Edit
                                <i class="ti-file btn-icon-append"></i>                          
                              </button>

                              <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-alert btn-icon-prepend"></i>                                                    
                                Delete
                              </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>53275534</td>
                          <td>16 May 2017</td>
                          <td>53275531</td>
                          <td>
                            <button type="button" class="btn btn-dark btn-icon-text">
                                Edit
                                <i class="ti-file btn-icon-append"></i>                          
                              </button>

                              <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-alert btn-icon-prepend"></i>                                                    
                                Delete
                              </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td>20 May 2017</td>
                          <td>53275531</td>
                          <td>
                            <button type="button" class="btn btn-dark btn-icon-text">
                                Edit
                                <i class="ti-file btn-icon-append"></i>                          
                              </button>

                              <button type="button" class="btn btn-success btn-icon-text">
                                <i class="ti-alert btn-icon-prepend"></i>                                                    
                                Delete
                              </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            {{-- content end --}}

                
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


