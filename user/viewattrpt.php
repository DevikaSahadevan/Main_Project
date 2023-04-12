<!DOCTYPE html>
<html lang="en">

<head>
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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
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
	<style>
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

}
</style>
</head>

<body>
    
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php
		include'head.php';
		?>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">View Attendance</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="sreg.php">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
            <div id="divToPrint">
               
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row g-3">
									    <div class="col-sm-12">
                                            <div class="form-floating">
                                               <h4>Attendance Report</h4>
                                            </div>
                                        </div>
                                       									
              
										
									
                      
                    </div>
					
                    <div class="card-body pt-0" data-simplebar style="height: 468px;">
                      <table class="table ">
                        <tbody>
						<tr><th>Sl.No.</th><th>Child name</th><th>Date</th>
                    <th>Status</th></tr>
						<?php

              include '../dbconnect.php';
              $login_id = $_SESSION['username'];
              $p=1;
			  //$uname=$_SESSION['username']; 
             $i = 1;
?>
<div class="forma">
<form action="" method="post">
		<p>Select month: </p>
		<input type="month" name="mnth" class="form-control mb-3" required> &nbsp;
        <button type="submit" name="mnth_submit" class="btn btn-danger">Search by month</button>
        <input type="button" class="btn btn-success" value="print" onclick="PrintDiv();" />
        <br><br>

    </form>

    <?php
    if(isset($_POST['date_submit'])){
        $date = $_POST['date'];
        $date_query = mysql_query("SELECT a.baby_name, b.att_date, b.att FROM tbl_registration a INNER JOIN tbl_attendence b ON a.baby_id = b.baby AND a.g_mailid='$login_id' AND b.att_date='$date'");
        if(mysql_num_rows($date_query)>0){
              while($row = mysql_fetch_array($date_query))
              {
?>

                          <tr>
						  <td ><?php echo $i;?></td>
                           
                            <td><?php echo $row['baby_name'];?></td>
							
                            <td><?php echo $row['att_date'];?></td>
                            <td><?php echo $row['att'];?></td>
                          </tr>
                         <?php
                         $i++;
			  }
            }
        }else{
            echo "<p>No records</p>"; 
        }
        echo '</div>';
        if(isset($_POST['mnth_submit'])){
            $mnth = $_POST['mnth'];
            $dateString = $mnth;
$monthNumber = date("m", strtotime($dateString));
            $mnth_query = mysql_query("SELECT a.baby_name, b.att_date, b.att FROM tbl_registration a INNER JOIN tbl_attendence b ON a.baby_id = b.baby AND a.g_mailid='$login_id' AND MONTH(b.att_date)='$monthNumber'");
            if(mysql_num_rows($mnth_query)>0){
                while($row = mysql_fetch_array($mnth_query))
                {
  ?>
  
                            <tr>
                            <td ><?php echo $i;?></td>
                             
                              <td><?php echo $row['baby_name'];?></td>
                              
                              <td><?php echo $row['att_date'];?></td>
                              <td><?php echo $row['att'];?></td>
                            </tr>
                           <?php
                           $i++;
                }
              }
        }   

?> 
                        </tbody>
                      </table>
                    </div>
                  </div>
										
				
                                       
                                    </div>
                                </form>
								
                            </div>
                        </div>
                        
                </div>
        </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <!-- <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s"> -->
            
            <?php
			// include'footer.php';
			?>
        <!-- </div> -->
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=1000,height=2500');
       popupWin.document.open();
       popupWin.document.write('<html><style>.forma{display:none;}table{font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}td,th{border: 1px solid #dddddd;text-align: left;padding: 8px;}tr:nth-child(even) {background-color: #dddddd;}</style><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>