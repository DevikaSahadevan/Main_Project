<?php
  session_start();
  $username=$_SESSION['username'];
  // $namequery = "SELECT uname FROM tbl_login WHERE username='$username'";
  // $namequery_run = mysql_query($namequery);
  // $name = mysql_fetch_assoc($namequery_run);
  if(!isset($_SESSION['username'])||$_SESSION['user']!='user')
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='../index.php';</script>";
  }
?>

<?php
 // session_start();
  //authorization
  if(!isset($_SESSION['username'])||$_SESSION['user']!='user')
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='../index.php';</script>";
  }
?>

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="sitters.php" class="nav-item nav-link">BabySitters</a>
                    <a href="feedback.php" class="nav-item nav-link">Feedback</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Attendence</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="view-attendance.php" class="dropdown-item">View Attendance</a>
                            <a href="viewattrpt.php" class="dropdown-item">Attendance Report</a>
                        </div>
                    </div>
                    <a href="payment.php" class="nav-item nav-link">Payments</a>
                    <a href="nutrition.php" class="nav-item nav-link">Nutritions</a>
                    <a href="activites.php" class="nav-item nav-link">Activites</a>
                    <a href="d.php" class="nav-item nav-link">MyProfile</a>
                    
                    <!-- <a href="chat/real_chat/index.php" class="nav-item nav-link">Chat -->
                    <?php
                      // $_SESSION['username']=$username;
                    ?>
                    <!-- </a> -->
                    <form action="Chat/chat.php" method="post">
                      <input type="hidden" name="userid" value="<?php echo $username; ?>">
                      <button class="nav-item nav-link" style="border:none;background:#fff;"> Chat</button>
                    </form>
                    
                    <a href="profile.php" class="nav-item nav-link active"><?php echo $username; ?></a>
                </div>
                <a href="logout.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>