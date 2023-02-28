<?php
  session_start();
  //authorization
  if(!isset($_SESSION['username'])||$_SESSION['user']!='admin')
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='../../index.php';</script>";
  }
?>
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
    <script src="assets/js/parsley.js"></script>
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
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33">
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
                  <a class="sidenav-item-link" href="index.php"  
                    >
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Dashboard</span> 
                  </a>

                  
                </li>
                 <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                    aria-expanded="false" aria-controls="app">
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

                <!-- <li class="section-title">
                  UI Elements
                </li> -->

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
                  <a class="sidenav-item-link" href="profile.php"  
                    >
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">My profile</span> 
                  </a>

                  
                </li>
        
        <li class="has-sub active expand">
                  <a class="sidenav-item-link" href="logout.php"  
                    >
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
                  
                
<script>
  function validate() {
    var nameexpr = /^[a-zA-Z\-]+$/;
    var nm = document.getElementById("name").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('msg1').style.display = "block";
        document.getElementById('msg1').innerHTML = "Invalid Name";
        return false;
    }
    else{
        document.getElementById('msg1').style.display = "none";
    }
    var a=document.getElementById("email").value;
    var st=/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/;
    if(a!="" && st.test(a)==false){
        //alert("Invalid email id");
        document.getElementById('msgemail').style.display = "block";
        document.getElementById('msgemail').innerHTML = "Invalid Email id";
        return false;
    }
    else{
        document.getElementById('msgemail').style.display = "none";
    }

    var ph = document.getElementById("phno").value;
    var expr = /^[6-9]\d{9}$/;
    if(ph!=""&&expr.test(ph)==false){
        document.getElementById('msg2').style.display = "block";
        document.getElementById('msg2').innerHTML = "Invalid Phone number";
        return false;
    }
    else{
        document.getElementById('msg2').style.display = "none";
    }

    var ph = document.getElementById("ano").value;
    var expr = /^[6-9]\d{9}$/;
    if(ph!=""&&expr.test(ph)==false){
        document.getElementById('msg3').style.display = "block";
        document.getElementById('msg3').innerHTML = "Invalid Phone number";
        return false;
    }
    else{
        document.getElementById('msg3').style.display = "none";
    }

    var nameexpr = /^[a-zA-Z\-]+$/;
    var nm = document.getElementById("hname").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('hnamemsg').style.display = "block";
        document.getElementById('hnamemsg').innerHTML = "Invalid Name";
        return false;
    }
    else{
        document.getElementById('hnamemsg').style.display = "none";
    }

    var nameexpr = /[0-9]{6}/;
    var nm = document.getElementById("zipcode").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('pinmsg').style.display = "block";
        document.getElementById('pinmsg').innerHTML = "Invalid pincode";
        return false;
    }
    else{
        document.getElementById('pinmsg').style.display = "none";
    }

    var nameexpr = /^[a-zA-Z\-]+$/;
    var nm = document.getElementById("city").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('citymsg').style.display = "block";
        document.getElementById('citymsg').innerHTML = "Invalid City";
        return false;
    }
    else{
        document.getElementById('citymsg').style.display = "none";
    }

    var nameexpr = /^[a-zA-Z\-]+$/;
    var nm = document.getElementById("state").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('statemsg').style.display = "block";
        document.getElementById('statemsg').innerHTML = "Invalid City";
        return false;
    }
    else{
        document.getElementById('statemsg').style.display = "none";
    }

    var nameexpr = /^[a-zA-Z\-]+$/;
    var nm = document.getElementById("country").value;
    if(nm!="" && nameexpr.test(nm)==false){
        document.getElementById('cntrymsg').style.display = "block";
        document.getElementById('cntrymsg').innerHTML = "Invalid City";
        return false;
    }
    else{
        document.getElementById('cntrymsg').style.display = "none";
    }
}
</script>
		
		<div class="row">
	<div class="col-lg-6">
	
       <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
		<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Baby Sitter Registration</h2>
			</div>

			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Your Name</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" data-parsley-required="true"
					pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." onblur="return validate()" onkeyup="return validate()">
				</div>
          <span id="msg1" style="color: red;"></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Mobile Number</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="phno" name="phno" placeholder="Mobile Number"
					pattern='[0-9]{10}' title="10 digits only." required onblur="return validate()" onkeyup="return validate()">
				</div>
          <span id="msg2" style="color: red;"></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Your Alterate Number</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="ano" name="ano" placeholder="Alterate Number" 
					pattern='[0-9]{10}' title="10 digits only." required onblur="return validate()" onkeyup="return validate()">
				</div>
          <span id="msg3" style="color: red;"></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Your Email</label>
				<div class="input-group mb-2">

					<input type="email" class="form-control" id="email" name="mailid" placeholder="Your Email" required onblur="return validate()" onkeyup="return validate()">
				</div>
        <span id="msgemail" style="color: red;"></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Your dob</label>
				<div class="input-group mb-2">

					<input type="date" class="form-control" id="dob" name="dob" required onblur="return validate()" onkeyup="return validate()">
				</div>
        <span id=""></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Id Proof(aadhar,Id Card,Driving License,etc.)</label>
				<div class="input-group mb-2">

					<input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required>
				</div>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">image</label>
				<div class="input-group mb-2">

					<input type="file" class="form-control" id="fileToUpload1" name="fileToUpload1" required>
				</div>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Gender</label>
				<div class="input-group mb-2">

					<select class="js-example-basic-multiple form-control" id="gender" name="gender" required>
						<option hidden>SELECT GENDER</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
												
					</select>
				</div>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Experience (years)</label>
				<div class="input-group mb-2">

					<select class="js-example-basic-multiple form-control" id="experience" name="experience">
						<option hidden>Select experience</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="10+">10+</option>
												
					</select>
				</div>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Category</label>
				<div class="input-group mb-2">

					<select class="js-example-basic-multiple form-control" id="gender" name="category">
						<option hidden>Select category</option>
						<option value="Evening">Evening</option>
						<option value="Full-Time">Full-Time</option>
						<option value="Part-Time">Part-Time</option>
						<option value="Weekend">Weekend</option>
						<option value="Any-Category">Any-Category</option>
												
					</select>
				</div>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">House Name</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="hname" name="hname" placeholder="House Name" 
					pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required onblur="return validate()" onkeyup="return validate()">
				</div>
        <span id="hnamemsg" style="color: red;"></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Street Name</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="sname" name="sname" placeholder="Street Name" 
					 title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
				</div>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Your Zipcode</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode" 
					 title="Minimum 3 & maximum 30 characters. Letters only permitted." required onblur="return validate()" onkeyup="return validate()">
				</div>
        <span id="pinmsg" style="color: red;"></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Your City</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="city" name="city" placeholder="City" 
           title="Minimum 3 & maximum 30 characters. Letters only permitted." required onblur="return validate()" onkeyup="return validate()">
				</div>
        <span id="citymsg" style="color: red;"></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Your State</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="state" name="state" placeholder="State" 
					 title="Minimum 3 & maximum 30 characters. Letters only permitted." required onblur="return validate()" onkeyup="return validate()">
				</div>
        <span id="statemsg" style="color: red;"></span>
			</div>
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Your Country</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="country" name="country" placeholder="Country" 
				     title="Minimum 3 & maximum 30 characters. Letters only permitted." required onblur="return validate()" onkeyup="return validate()">
				</div>
        <span id="cntrymsg" style="color: red;"></span>
			</div>

      <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Skill 1</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="skill1" name="skill1" placeholder="skill 1"  required>
        </div>
      </div>

      <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Skill 2</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="skill2" name="skill2" placeholder="skill 2"  >
        </div>
      </div>

      <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Skill 3</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="skill3" name="skill3" placeholder="skill 3"  >
        </div>
      </div>

      <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Skill 4</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="skill4" name="skill4" placeholder="skill 4"  >
        </div>
      </div>

      <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Skill 5</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="skill5" name="skill5" placeholder="skill 5"  >
        </div>
      </div>

			<button  class="my-1 btn btn-sm btn-success" name="submit" type="submit">Enroll</button>
		</div>
	</div></form>
<?php
   include 'dbconnect.php';
   
if(isset($_POST['submit']))
{
	$id=autoid("tbl_sitterreg","sitter_id");
	
    $flag=0;
	//$id,$name,$phno,$ano,$mailid,$dob,$file,$gender,$category,$experience,,$hname,$sname,$zipcode,$city,$state,$country
    
	
    $name=$_POST['name'];
    $phno=$_POST['phno'];
    $ano=$_POST['ano'];
	$mailid=$_POST['mailid'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
	$experience=$_POST['experience'];
	$category=$_POST['category'];
	$hname=$_POST['hname'];
	$sname=$_POST['sname'];
	$zipcode=$_POST['zipcode'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
  $skill1=$_POST['skill1'];
	$skill2=$_POST['skill2'];
  $skill3=$_POST['skill3'];
	$skill4=$_POST['skill4'];
	$skill5=$_POST['skill5'];
	
	$date=date("y-m-d");
	
	$date1=new DateTime($dob);
    $date2=new DateTime($date);
	$interval = $date1->diff($date2);

    $myage= $interval->y; 
	
	if ($myage >= 20)
	{ 
      $flag=0;
	} 
    else
	{ 
     $flag=2;
	}
	    
		
		if($flag==2)
        {
            echo"<script>alert('Enter valid DOB');</script>";
        }
	
	
 
    if($flag==0)
    {
        
        
        $data="SELECT * FROM tbl_sitterreg";
        $c=0;
        $sd="SELECT * FROM tbl_sitterreg";
        $p=mysql_query($sd,$con);
        while($row=mysql_fetch_array($p))
        {
            $c++;
        }
        $c++;
        $sq=mysql_query($data,$con);
        while($row=mysql_fetch_array($sq))
        {
            if($row['mailid']==$mailid||$row['phno']==$phno)
            {
                $flag=1;
            }
        }
        if($flag==1)
        {
            echo"<script>alert('This  account already exits');</script>";
        }
        else if($flag==0)
        {
			
				$target_dir = "../../idproofs/";     //saving folder
				$target_file=$id."_".$mailid.".jpg";           //filename
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir.$target_file);    //uploading
				$file="idproofs/".$target_file;      //dbfield info
				
				
				$target_dir1 = "../../profile_pic/";     //saving folder
				$target_file1=$id."_".$mailid.".jpg";           //filename
				move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"],$target_dir1.$target_file1);    //uploading
				$file2="profile_pic/".$target_file1;      //dbfield info
			
            $sql="INSERT INTO `tbl_sitterreg` VALUES ('$id','$name','$phno','$ano','$mailid','$dob','$file','$gender','$experience','$category','$hname','$sname','$zipcode','$city','$state','$country','$file2','1','$skill1','$skill2','$skill3','$skill4','$skill5')";
            if(mysql_query($sql,$con))
            {
                
                    echo"<script>alert('Baby Sitter Enrolled');</script>";
            }
			else{
				
				echo"<script>alert('error');</script>";
			}
        }
    }
    else
    {
     echo"<script>alert('Error');</script>";   
    }
}
            ?>

	
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

    

    
    
    

    
    

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
   crossorigin="anonymous"></script>
   <script
   src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>

    <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>
</body>
</html>

