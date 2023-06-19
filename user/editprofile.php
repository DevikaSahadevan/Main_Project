<?php
error_reporting(0);
session_start();

include '../dbconnect.php';

$us = $_SESSION['username'];

$chk1 = "SELECT * FROM `tbl_login` WHERE `username`='$us'";
$chk = mysql_query($chk1, $con);
while ($rq = mysql_fetch_array($chk)) {
  $u_id = $rq['login_id'];
}

if(isset($_POST['edit_submit'])){
    $uid = $_POST['edit_submit'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $sname = $_POST['sname'];
    $hname = $_POST['hname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $babyname = $_POST['babyname'];
    // $mailid = $_POST['mailid'];
    $aphno = $_POST['aphno'];
    $gphno = $_POST['gphno'];
    $fullname = $_POST['fullname'];
    $update_query = mysql_query("UPDATE tbl_registration SET g_name = '$fullname', g_phno = '$gphno', g_aphno = '$aphno', baby_name = '$babyname', b_dob = '$dob', b_gender = '$gender', h_name = '$hname', s_name = '$sname', zipcode = '$zipcode', city = '$city'
                                WHERE baby_id = '$uid'");
    if($update_query){
      echo '<script>alert("Profile updated");</script>';
      echo '<script>window.location.href="d.php"</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script>

  </script>
  <meta charset="utf-8">
  <title>Kider</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <!-- <style>
    .creditCardForm {
    max-width: 700px;
    background-color: #fff;
    margin: 100px auto;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}
.creditCardForm label {
    width: 100%;
    margin-bottom: 10px;
}
.creditCardForm .heading h1 {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: #4c4e56;
}
.creditCardForm .payment {
    float: left;
    font-size: 18px;
    padding: 10px 25px;
    margin-top: 20px;
    position: relative;
}
.creditCardForm .payment .form-group {
    float: left;
    margin-bottom: 15px;
}
.creditCardForm .payment .form-control {
    line-height: 40px;
    height: auto;
    padding: 0 16px;
}
.creditCardForm .owner {
    width: 63%;
    margin-right: 10px;
}
.creditCardForm .CVV {
    width: 35%;
}
.creditCardForm #card-number-field {
    width: 100%;
}
.creditCardForm #expiration-date {
    width: 49%;
}
.creditCardForm #credit_cards {
    width: 50%;
    margin-top: 25px;
    text-align: right;
}
.creditCardForm #pay-now {
    width: 100%;
    margin-top: 25px;
}
.creditCardForm .payment .btn {
    width: 100%;
    margin-top: 3px;
    font-size: 24px;
    background-color: #2ec4a5;
    color: white;
}
.creditCardForm .payment select {
    padding: 10px;
    margin-right: 15px;
}
.transparent {
    opacity: 0.2;
}
@media(max-width: 650px) {
    .creditCardForm .owner,
    .creditCardForm .CVV,
    .creditCardForm #expiration-date,
    .creditCardForm #credit_cards {
        width: 100%;
    }
    .creditCardForm #credit_cards {
        text-align: left;
    }
}

    #approve {
  background-color: blue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
#reject {
  
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
#c {
  
  background-color: black;

} -->
  <!-- </style> -->
  <style>
    /* .pricing {
            @include translate(-49%, -49.1%);
            position: absolute;
            left: 50%;
            top: 50%;
            width: 310px;
            font-size: 0;
            opacity: 1;
            transition: opacity .2s ease;
        }

        .price-option {
            display: inline-block;
            width: 6.25em;
            vertical-align: middle;
            margin-right: 0.3125em;
            font-size: 16px;
            opacity: 1;
            transition: opacity .2s ease;
        }

        .price-option:last-child {
            margin-right: 0;
        }

        .pricing:hover .price-option {
            opacity: 0.6;
        }

        .pricing:hover .price-option:hover {
            opacity: 1;
        }

        .price-option__detail {
            padding: 2em 0;
            background: white;
            text-align: center;
        }

        .price-option--low .price-option__detail {
            border-radius: .25em 0 0 0;
        }

        .price-option--mid .price-option__detail {
            padding: 2.3em 0;
            border-radius: .25em .25em 0 0;
        }

        .price-option--high .price-option__detail {
            border-radius: 0 .25em 0 0;
        }

        .price-option__cost,
        .price-option__type {
            display: block;
        }

        .price-option__cost {
            font-size: 1.5em;
            color: #383838;
        }

        .price-option__type {
            font-size: .7em;
            text-transform: uppercase;
            color: #909090;
        }

        .price-option__purchase {
            position: relative;
            display: block;
            padding: .6em;
            font-size: .875em;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            color: rgba(0, 0, 0, 0.6);
        }

        .price-option--low .price-option__purchase {
            background: #a7d155;
            border-radius: 0 0 0 .25em;
        }

        .price-option--mid .price-option__purchase {
            background: #eada42;
            border-radius: 0 0 .25em .25em;
        }

        .price-option--high .price-option__purchase {
            background: #e54e4b;
            border-radius: 0 0 .25em 0;
        }

        .price-option__purchase:before {
            content: '';
            position: absolute;
            bottom: 100%;
            left: 50%;
            display: block;
            width: 0;
            height: 0;
            margin-left: -5px;
            border-width: 0 5px 5px;
            border-style: solid;
        }

        .price-option--low .price-option__purchase:before {
            border-color: transparent transparent #a7d155;
        }

        .price-option--mid .price-option__purchase:before {
            border-color: transparent transparent #eada42;
        }

        .price-option--high .price-option__purchase:before {
            border-color: transparent transparent #e54e4b;
        } */
    @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);

    .pricing {
      text-align: center;
      border: 1px solid #f0f0f0;
      color: #777;
      font-size: 30px;
      padding-left: 0;
      margin-bottom: 30px;
      font-family: 'Lato';
    }

    .pricing img {
      display: block;
      margin: auto;
      width: 32px;
    }

    .pricing li:first-child,
    .pricing li:last-child {
      padding: 20px 13px;
    }

    .pricing li {
      list-style: none;
      padding: 13px;
    }

    .pricing li+li {
      border-top: 1px solid #f0f0f0;
    }

    .pricing big {
      font-size: 32px;
    }

    .pricing h3 {
      margin-bottom: 0;
      font-size: 36px;
    }

    .pricing span {
      font-size: 12px;
      color: #999;
      font-weight: normal;
    }

    .pricing li:nth-last-child(2) {
      padding: 30px 13px;
    }

    .pricing button {
      width: auto;
      margin: auto;
      font-size: 15px;
      font-weight: bold;
      border-radius: 50px;
      color: #fff;
      padding: 9px 24px;
      background: #aaa;
      opacity: 1;
      transition: opacity .2s ease;
      border: none;
      outline: none;
    }

    .pricing button:hover {
      opacity: .9;
    }

    .pricing button:active {
      box-shadow: inset 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    /* pricing color */
    .p-green big,
    .p-green h3 {
      color: #4c7737;
    }

    .p-green button {
      background: #4c7737;
    }

    .p-yel big,
    .p-yel h3 {
      color: #ffbb42;
    }

    .p-yel button {
      background: #ffbb42;
    }

    .p-red big,
    .p-red h3 {
      color: #e13c4c;
    }

    .p-red button {
      background: #e13c4c;
    }

    .p-blue big,
    .p-blue h3 {
      color: #3f4bb8;
    }

    .p-blue button {
      background: #3f4bb8;
    }

    .navbar-nav {
      font-size: 18px;
    }
  </style>
</head>

<body>
  <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php
    include 'head.php';
    ?>
    <!-- Navbar End -->


    <!-- Page Header End -->
    <!-- <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">My Profile</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="sreg.php">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div> -->
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">


        <div class="bg-light rounded">
          <div class="row g-0">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
              <div class="h-100 d-flex flex-column justify-content-center p-5">

                <div class="row g-3">
                  <div class="col-sm-12">
                    <div class="form-floating mb-4">
                      <h1> My profile</h1>
                    </div>
                    <!--  <div class="pricing" style="margin-top:250px; margin-left:-200px;">
                                            <div class="[ price-option price-option--low ]">
                                                <div class="price-option__detail">
                                                    <span id="amount" class="price-option__cost" value="500">₹500</span>
                                                    <span class="price-option__type">Daily</span>
                                                </div>
                                                <a href="#" id="pay_button_daily" class="price-option__purchase"
                                                    onclick="pay_now('daily')">Pay</a>
                                            </div>
                                            <div class="[ price-option price-option--mid ]">
                                                <div class="price-option__detail">
                                                    <span id="amount" class="price-option__cost" value="2000">₹2000</span>
                                                    <span class="price-option__type">Weekly</span>
                                                </div>
                                                <a href="#" id="pay_button_weekly" class="price-option__purchase"
                                                    onclick="pay_now('weekly')">Pay</a>
                                            </div>
                                            <div class="[ price-option price-option--high ]">
                                                <div class="price-option__detail">
                                                    <span id="amount" class="price-option__cost"
                                                        value="4500">₹4500</span>
                                                    <span class="price-option__type">Monthly</span>
                                                </div>
                                                <a href="#" id="pay_button_monthly" class="price-option__purchase"
                                                    onclick="pay_now('monthly')">Pay</a>
                                            </div>
                                        </div>
                                    </div> -->
                    <section class="container">
                      <div class="row white mb-3" style="font-size:20px;">
                        <?php
if(isset($_POST['edit_profile'])){
    $uname = $_POST['edit_profile'];
                        $result = mysql_query("SELECT * FROM tbl_registration,tbl_login where tbl_registration.g_mailid=tbl_login.username 
      and tbl_registration.baby_id='$uname'");

                        while ($row = mysql_fetch_array($result)) {
                          ?>
                          
                        </table>
                        <form action="" method="post">
                          <table id="customers">
                            <tr>
                              <td>
                        </div>

                        </td>
                        <td></td>
                        </tr>
                        <tr>
                          <td>Name :</td>
                          <td>
                            <input type="text" name="fullname" value="<?php echo $row['g_name']; ?>" required>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Guardian Phno :</td>
                          <td>
                            <input type="text" name="gphno" value="<?php echo $row['g_phno']; ?>" required>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Alternate Phno :</td>
                          <td>
                            <input type="text" name="aphno" value="<?php echo $row['g_aphno']; ?>" required>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Mailid :</td>
                          <td>
                            <input type="text" readonly name="mailid" value="<?php echo $row['g_mailid']; ?>">
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Baby Name :</td>
                          <td>
                            <input type="text" name="babyname" value="<?php echo $row['baby_name']; ?>" required>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>DOB :</td>
                          <td>
                            <input type="date" name="dob" value="<?php echo $row['b_dob']; ?>" required>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Baby Gender :</td>
                          <td>
                            <select name="gender" id="gender" required>
                                <option value="<?php echo $row['b_gender']; ?>" hidden><?php echo $row['b_gender']; ?></option>
                                <!-- <option value="" selected disabled>Select gender</option> -->
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <!-- <input type="text" value="<?php echo $row['b_gender']; ?>"> -->
                            
                          </td>
                        </tr>
                        <tr>
                          <td>House Name :</td>
                          <td>
                            <input type="text" name="hname" value="<?php echo $row['h_name']; ?>" required>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Street Name :</td>
                          <td>
                            <input type="text" name="sname" value="<?php echo $row['s_name']; ?>" required>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>Zipcode :</td>
                          <td>
                            <input type="text" name="zipcode" value="<?php echo $row['zipcode']; ?>" required>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>City :</td>
                          <td>
                            <input type="text" name="city" value="<?php echo $row['city']; ?>" required>
                            
                          </td>
                        </tr>
                          <button type="submit" name="edit_submit" value="<?php echo $row['baby_id'] ?>"
                            class="btn btn-warning btn-lg mt-3">Update profile</button>
                        </form>
                        <?php
                        }
                    }
                        ?>
                      <div class="block">


                        <div class="col-xs-12 col-sm-6 col-md-4">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">

                        </div>



                      </div><!-- /block -->
                  </div><!-- /row -->
                  </section>
                  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


                  <!-- </div> -->
                  <!-- </form> -->
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <!-- Template Javascript -->

  <script src="js/main.js"></script>
</body>

</html>