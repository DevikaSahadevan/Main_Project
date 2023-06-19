<?php
error_reporting(0);
session_start();
//authorization
include 'dbconnect.php';
if (!isset($_SESSION['username']) || $_SESSION['user'] != 'admin') {
  echo "<script>alert('You are not authorized to view this page!');</script>";
  echo "<script>location.href='../../index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

  <!-- theme meta -->
  <meta name="theme-name" content="sleek" />

  <title>Admin Panel</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
    rel="stylesheet" />

  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  <!-- No Extra plugin used -->
  <link href='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
  <link href='assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>


  <link href='assets/plugins/toastr/toastr.min.css' rel='stylesheet'>







  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>



  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">

    <!-- Github Link -->





    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="index.php" title="Sleek Dashboard">
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
              height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>

            <span class="brand-name text-truncate">Admin Dashboard</span>
          </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="index.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                aria-expanded="false" aria-controls="app">
                <i class="mdi mdi-pencil-box-multiple"></i>
                <span class="nav-text">Users</span> <b class="caret"></b>
              </a>

              <ul class="collapse " id="app" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="req.php">
                      <span class="nav-text">New Requests</span>
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="ausers.php">
                      <span class="nav-text">Approved Users</span>
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="rusers.php">
                      <span class="nav-text">Rejected Users</span>
                    </a>
                  </li>


                </div>
              </ul>
            </li>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                aria-expanded="false" aria-controls="components">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">Baby Sitters</span> <b class="caret"></b>
              </a>

              <ul class="collapse " id="components" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="sreg.php">
                      <span class="nav-text">Enroll</span>
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="sitters.php">
                      <span class="nav-text">Sitters List</span>
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="bsitters.php">
                      <span class="nav-text">Blocked Sitters</span>

                    </a>
                  </li>


                </div>
              </ul>
            </li>
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="apayment.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Payment</span>
              </a>
            </li>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                aria-expanded="false" aria-controls="app">
                <i class="mdi mdi-pencil-box-multiple"></i>
                <span class="nav-text"> Attendance</span> <b class="caret"></b>
              </a>

              <ul class="collapse " id="app" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="check-attendance.php">
                      <span class="nav-text">Check-attendance</span>
                    </a>
                  </li>
                  <li class="">
                    <a class="sidenav-item-link" href="viewattendance.php">
                      <span class="nav-text">Attendance List</span>
                    </a>
                  </li>
                  <li class="">
                    <a class="sidenav-item-link" href="attendancerpt.php">
                      <span class="nav-text">Attendance Report</span>
                    </a>
                  </li>
                </div>
              </ul>

            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="users.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Chat</span>
              </a>
            </li>
            </li>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                aria-expanded="false" aria-controls="app">

                <ul class="collapse " id="app" data-parent="#sidebar-menu">
                  <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="nutrition.php">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Add nutrition</span>
                    </a>
                  </li>
                  <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="viewfeedback.php">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">View Feedbacks</span>
                    </a>


                  </li>

                  <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="profile.php">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">My profile</span>
                    </a>
                  </li>
            </li>


            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="logout.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Logout</span>
              </a>


            </li>















            <!-- <li class="section-title">
                  Pages
                </li> -->





            <!-- <li class="section-title">
                  Documentation
                </li> -->
          </ul>
        </div>


      </div>
    </aside>


    <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
    <div class="page-wrapper">

      <!-- Header -->
      <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->

          <!-- search form -->
          <div class="search-form d-none d-lg-inline-block">


          </div>

          <div class="navbar-right ">
            <ul class="nav navbar-nav">


              <!-- User Account -->
              <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="../../profile_pic/img_avatar.png" class="user-image" alt="User Image" />
                  <span class="d-none d-lg-inline-block">Admin</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->


                  <li>
                    <a href="profile.php">
                      <i class="mdi mdi-account"></i> My Profile
                    </a>
                  </li>


                  <li class="dropdown-footer">
                    <a href="logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
      <div class="content-wrapper">
        <div class="content">






          <!-- Top Statistics -->

          <?php
          if (isset($_POST['add_food'])) {

            $id = autoid("tbl_nutrition", "baby_id");
            $user_id = $_POST['user_id'];
            $a_date = $_POST['a_date'];
            $nutrition = $_POST['nutrition'];
            // $image = $_FILES['activity_img']['tmp_name'];
            $target_dir = "uploads/"; //saving folder
            $target_file = $target_dir.$_FILES["activity_img"]["name"]."_.jpg"; //filename
            move_uploaded_file($_FILES["activity_img"]["tmp_name"], $target_file); //uploading
            $query = "INSERT INTO tbl_fooditems(`userid`,`date`,`nutrition`,`img`) VALUES('$user_id','$a_date','$nutrition','$target_file')";
            $query_run = mysql_query($query);
          }
          ?>
          <div class="row">
            <div class="col-lg-6">

              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card card-default">
                  <div class="card-header card-header-border-bottom">
                    <h2>Assign FoodItems</h2>
                  </div>
                  <div class="col-sm-12 mb-3">
                    <label class="text-dark font-weight-medium" for="">User</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                      <option value="" selected disabled> Select User</option>
                      <?php
                      $query = "SELECT baby_id, baby_name FROM tbl_registration";
                      $query_run = mysql_query($query);
                      while ($row = mysql_fetch_assoc($query_run)) {

                        ?>
                        <option value="<?php echo $row['baby_id'] ?>"><?php echo $row['baby_name'] ?></option>
                        <?php
                      }
                      ?>

                    </select>
                  </div>
                  <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Select date</label>
                    <input type="date" name="a_date" class="form-control mb-3" required> &nbsp;
                  </div>

                  <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Breakfast</label>
                    <div class="input-group mb-2">

                      <select class="form-control" id="activites" name="activites" required>
                        <option value="" selected disabled>Select Food Items</option>
                        <option value="dancing">Waffles and Fresh Fruits</option>
                        <option value="drawing">Scrambled eggs and turkey sausage</option>
                        <option value="painting">French toast and ham/option>
                        <option value="nature_play">Cereal with fresh fruit</option>
                        <option value="water_play">Oatmeal and fresh fruit</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Upload image</label>
                    <input type="file" name="food_img" class="form-control mb-3" required>
                  </div>




                  <button class="my-1 btn btn-sm btn-success mt-1" name="add_nutrition" type="submit">Add Nutrition</button>

                </div>
            </div>
            </form>

          </div>
          <div class="row">
            <div class="col-xl-10">

              <!-- New Customers -->
              <div class="card card-table-border-none">
                <div class="card-header justify-content-between ">
                  <h2>Nutrition</h2>

                </div>

                <div class="card-body pt-0" data-simplebar="" style="height:100%;">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>User</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Image</th>
                      </tr>
                      <tr>
                        <?php
                        $query_run = mysql_query("SELECT a.*,b.baby_name FROM tbl_fooditems a JOIN tbl_registration b ON a.userid = b.baby_id");
                        while ($row3 = mysql_fetch_assoc($query_run)) {

                          ?>
                        <td><?php echo $row3['baby_name']; ?></td>
                        
                        <td><?php echo $row3['date']; ?></td>
                        
                        <td><?php echo $row3['nutrition']; ?></td>
                        
                        <td><img width="100px" src="<?php echo $row3['img']; ?>"/></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>


          </div>













        </div> <!-- End Content -->
      </div> <!-- End Content Wrapper -->


      <!-- Footer -->


    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


  <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

  <!-- Javascript -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/simplebar/simplebar.min.js"></script>

  <script src='assets/plugins/charts/Chart.min.js'></script>
  <script src='assets/js/chart.js'></script>




  <script src='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
  <script src='assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
  <script src='assets/js/vector-map.js'></script>

  <script src='assets/plugins/daterangepicker/moment.min.js'></script>
  <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
  <script src='assets/js/date-range.js'></script>








  <script src='assets/plugins/toastr/toastr.min.js'></script>












  <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
  <script src="assets/options/optionswitcher.js"></script>
</body>

</html>