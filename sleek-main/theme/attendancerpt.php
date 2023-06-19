<?php
session_start();
//authorization
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
    NProgress.configure({ showSpinner: false });
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
                </div>
              </ul>
            </li>
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="activites.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Daily Activites</span>
              </a>
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
              <a class="sidenav-item-link" href="viewfeedback.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">View Feedbacks</span>
              </a>
            </li>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                aria-expanded="false" aria-controls="app">
                <i class="mdi mdi-pencil-box-multiple"></i>
                <span class="nav-text">Payment</span> <b class="caret"></b>
              </a>

              <ul class="collapse " id="app" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="apayment.php">
                      <span class="nav-text">Add Payment</span>
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="pu.php">
                      <span class="nav-text">Paid Users</span>
                    </a>
                  </li>

                </div>
              </ul>
            </li>
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="assignsitter.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Assign Sitters</span>
              </a>
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

            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="addfood.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Add nutrition</span>
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





          <div class="row">
            <div class="col-lg-6">

              <?php
              include 'dbconnect.php';

              $uname = $_SESSION['username'];

              $i = 1;

              ?>

              <!DOCTYPE html>
              <html lang="en">

              <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
                  rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
                  crossorigin="anonymous">
                <title>Attendance</title>

                <style>
                  table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }

                  td,
                  th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }

                  tr:nth-child(even) {
                    background-color: #dddddd;
                  }
                </style>

              </head>

              <form action="" method="post">

                <p>From: </p>
                <input type="date" name="fromdate" required> &nbsp;
                <br><br>
                <p>To: </p>
                <input type="date" name="todate" required> &nbsp;


                <button type="submit" name="date_submit">Search</button>
                <div>
                  <input type="button" class="btn btn-success" value="print" onclick="PrintDiv();" />
                </div>


              </form>
              <table>
                <tbody>
                  <th>Sl. No.</th>
                  <th>Baby Name</th>
                  <th>Date</th>
                  <th>Status</th>
                  <?php
                  if (isset($_POST['date_submit'])) {
                    $from_date = $_POST['fromdate'];
                    $to_date = $_POST['todate'];
                    $date_query = mysql_query("SELECT a.baby_name, b.att_date, b.att FROM tbl_registration a INNER JOIN tbl_attendence b ON a.baby_id = b.baby AND b.att_date between '" . $from_date . "' AND '" . $to_date . "'");
                    if (mysql_num_rows($date_query) > 0) {
                      while ($row = mysql_fetch_array($date_query)) {
                        ?>

                        <tr>
                          <td>
                            <?php echo $i; ?>
                          </td>
                          <td>
                            <?php echo $row['baby_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['att_date']; ?>
                          </td>
                          <td>
                            <?php echo $row['att']; ?>
                          </td>
                        </tr>
                        <?php
                        $i++;
                      }
                    }
                  } else {
                    echo "<p>No records</p>";
                  }

                  ?>
                </tbody>
              </table>
              <div id="divToPrint" style="display:none;">
                <div>
                  <h1>Attendance Report</h1>
                  <table>
                    <tbody>
                      <th>Sl. No.</th>
                      <th>Baby Name</th>
                      <th>Date</th>
                      <th>Status</th>
                      <?php
                      if (isset($_POST['date_submit'])) {
                        $from_date = $_POST['fromdate'];
                        $to_date = $_POST['todate'];
                        $date_query = mysql_query("SELECT a.baby_name, b.att_date, b.att FROM tbl_registration a INNER JOIN tbl_attendence b ON a.baby_id = b.baby AND b.att_date between '" . $from_date . "' AND '" . $to_date . "'");
                        if (mysql_num_rows($date_query) > 0) {
                          while ($row = mysql_fetch_array($date_query)) {
                            ?>

                            <tr>
                              <td>
                                <?php echo $i; ?>
                              </td>
                              <td>
                                <?php echo $row['baby_name']; ?>
                              </td>
                              <td>
                                <?php echo $row['att_date']; ?>
                              </td>
                              <td>
                                <?php echo $row['att']; ?>
                              </td>
                            </tr>
                            <?php
                            $i++;
                          }
                        }
                      } else {
                        echo "<p>No records</p>";
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>

              <script type="text/javascript">
                function PrintDiv() {
                  var divToPrint = document.getElementById('divToPrint');
                  var popupWin = window.open('', '_blank', 'width=1000,height=2500');
                  popupWin.document.open();
                  popupWin.document.write('<html><style>table{font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td,th{border: 1px solid #dddddd;text-align: left;padding: 8px;}tr:nth-child(even) {background-color: #dddddd;}</style><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                  popupWin.document.close();
                }

              </script>
            </div>