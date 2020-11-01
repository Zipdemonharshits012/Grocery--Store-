<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>


    <div class="container-scroller">

      <!-- Navigation Bar Left -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <br>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="index.php" class="nav-link">
              <div class="nav-profile-text d-flex flex-column pr-3">
                <h3 class="font-weight-medium mb-2">Arihant<br>Marketing</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Orders</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" href="categories.php">
              <i class="mdi mdi-apps-box menu-icon"></i>
              <span class="menu-title">Categories</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" href="products.php">
              <i class="mdi mdi-apps menu-icon"></i>
              <span class="menu-title">Products</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">
              <i class="mdi mdi-comment-question-outline menu-icon"></i>
              <span class="menu-title">FAQ</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /Navigation Bar Left -->

      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>



        <!-- Navigation Bar Top-->
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">

              <li class="nav-item nav-profile dropdown border-0">
                <button type="button" class="btn btn-danger">Signout</button>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- /Navigation Bar Top-->



        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="row">
              <div class="col-xl-12 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4">Categories</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-light">
                          <tr>
                            <th>ID</th>
                            <th>Question</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Table row -->
                          <tr>
                            <td>
                              <p class="mb-0 font-weight-medium">1</p>
                            </td>
                            <td>Angular Admin</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                              <a href="answer.php">
                                <div class="badge badge-inverse-danger" style="font-size: small ;"> Answer </div>
                              </a>
                            </td>
                          </tr>
                          <!-- /Table row -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
        <!-- main-panel ends -->



      </div>



    </div>



    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
