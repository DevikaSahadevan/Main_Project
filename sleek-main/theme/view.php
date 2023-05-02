<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

  <!-- theme meta -->
  <meta name="theme-name" content="sleek" />

  <title>Admin Panel</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

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
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
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


            </li>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app" aria-expanded="false" aria-controls="app">
                <i class="mdi mdi-pencil-box-multiple"></i>
                <span class="nav-text">Services</span> <b class="caret"></b>
              </a>

              <ul class="collapse " id="app" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="aservice.php">
                      <span class="nav-text">Add Service</span>
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="eservices.php">
                      <span class="nav-text">Edit Services</span>
                    </a>
                  </li>
                  <li class="">
                    <a class="sidenav-item-link" href="dservices.php">
                      <span class="nav-text">Deleted Services</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app" aria-expanded="false" aria-controls="app">
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

            <!-- <li class="section-title">
                  UI Elements
                </li> -->

            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components" aria-expanded="false" aria-controls="components">
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
              <a class="sidenav-item-link" href="nutrition.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Add nutrition</span>
              </a>
              <li class="has-sub active expand">
              <a class="sidenav-item-link" href="viewfeedback.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">View Feedback</span>
              </a>


            </li>

            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="profile.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">My profile</span>
              </a>


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


            </div>
            </form>



          </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
session_start();
include 'dbconnect.php';
 $id = $_GET['id'];
 $result = mysql_query("SELECT * FROM tbl_feedback WHERE f_id = $id");
$count=mysql_num_rows($result);
// printf($count);
if ($count > 0) 
{
    $texts = array();
    while ($row = mysql_fetch_assoc($result)) {
        $texts[] = $row["msg"];
    }
    $url = 'http://127.0.0.1:5000/sentiment';
    $data = json_encode(array('texts' => $texts));
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => $data,
        ),
    );
    $context  = stream_context_create($options);
    $resul = file_get_contents($url, false, $context);
    $resul = json_decode($resul, true);
  
    $positive = $resul['positive'];
    $negative = $resul['negative'];
    $neutral = $resul['neutral'];
    $total = $positive + $negative + $neutral;
  
    $pos_percent = ($positive / $total) * 100;
    $neg_percent = ($negative / $total) * 100;
    $neu_percent = ($neutral / $total) * 100;
    $pos_accuracy = ($pos_percent >( $neu_percent+$neg_percent)) ? $pos_percent : (100 -( $neu_percent+$neg_percent));
      $neg_accuracy = ($neg_percent > ($neu_percent+$pos_percent)) ? $neg_percent : (100 - ($neu_percent+$pos_percent));
    $neutral_accuracy = ($neu_percent > ($pos_percent + $neg_percent)) ? $neu_percent : (100 - ($pos_percent + $neg_percent));
  
} 
else 
{
    echo "No comments.";
    $pos_percent = 0;
    $neg_percent = 0;
    $neu_percent=0;
    $neu_percent = 0;
    $pos_accuracy = 0;
    $neg_accuracy = 0;
    $neu_accuracy = 0;
    $neutral_accuracy=0;
}
  ?>
  <div class="container-fluid">        
      <!-- <h1>Sentiment Analysis </h1> -->
      <div class="chart-container" style="margin-left:10%; width: 50%;
    height: 50%;">
          <canvas id="sentiment-chart"></canvas>
      </div>
      <div>
      <p>Positive: <?php echo $pos_accuracy ; ?></p>
      <p>Negative: <?php echo $neg_accuracy; ?></p>
      <p>Neutral: <?php echo $neutral_accuracy; ?></p>
  </div>
  </div>
  
      <script>
          var ctx = document.getElementById('sentiment-chart').getContext('2d');
          var chart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ['Positive: <?php echo $positive ."/".$total ?>', 'Negative: <?php echo $negative ."/".$total;?>', 'Neutral :<?php echo $neutral ."/".$total; ?>'],
                  datasets: [{
                      label: 'Performance Analysis percentage',
                      data: [<?php echo $pos_percent; ?>, <?php echo $neg_percent; ?>, <?php echo $neu_percent; ?>],
                      backgroundColor: [
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)'
                      ],
                      borderColor: [
                          'rgba(75, 192, 192, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(54, 162, 235, 1)'
                      ],
                      borderWidth: 1,
                    
                  }]
              },
              
              options: {
                  scales: {
                      y: {
                          beginAtZero: true,
                          ticks: {
                              stepSize: 10,
                              max: 100
                          }
                      }
                  }
              }
          });
      </script>