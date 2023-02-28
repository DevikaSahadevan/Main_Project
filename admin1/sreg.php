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
                <h1 class="display-2 text-white animated slideInDown mb-4">Baby Sitter Registration</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="sreg.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Registration</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                
               
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row g-3">
									    <div class="col-sm-12">
                                            <div class="form-floating">
                                               <h4>Primary Details</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="phno" name="phno" placeholder="Mobile Number" 
												pattern='[0-9]{10}' title="10 digits only." required>
                                                <label for="name">Mobile Number</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="ano" name="ano" placeholder="Alterate Number" 
												pattern='[0-9]{10}' title="10 digits only." required>
                                                <label for="name">Alterate Mobile Number</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" name="mailid" placeholder="Your Email" required>
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>										
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="date" class="form-control border-0" id="dob" name="dob" required>
                                                <label for="subject">Date of birth</label>
                                            </div>
                                        </div>
										
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="file" class="form-control border-0" id="fileToUpload" name="fileToUpload" required>
                                                <label for="subject">Id Proof(aadhar,Id Card,Driving License,etc.)</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="file" class="form-control border-0" id="fileToUpload1" name="fileToUpload1" required>
                                                <label for="subject">image</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
												<select class="form-control border-0" id="gender" name="gender">
												<option></option>
												<option value="male">Male</option>
												<option value="female">Female</option>
												</select>
                                                <label for="subject">Gender</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
												<select class="form-control border-0" id="experience" name="experience">
												<option></option>
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
                                                <label for="subject">Experience (years)</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
												<select class="form-control border-0" id="gender" name="category">
												<option></option>
												<option value="Evening">Evening</option>
												<option value="Full-Time">Full-Time</option>
												<option value="Part-Time">Part-Time</option>
												<option value="Weekend">Weekend</option>
												<option value="Any-Category">Any-Category</option>
												</select>
                                                <label for="subject">Category</label>
                                            </div>
                                        </div>
                                       <div class="col-sm-12">
                                            <div class="form-floating">
                                               <h4>Address Details</h4>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="hname" name="hname" placeholder="House Name" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="subject">House Name</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="sname" name="sname" placeholder="Street Name" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="subject">Street Name</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="zipcode" name="zipcode" placeholder="Zipcode" 
												pattern='[0-9]{3,10}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="subject">Zipcode</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="city" name="city" placeholder="City" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="subject">City</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="state" name="state" placeholder="State" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="subject">State</label>
                                            </div>
                                        </div>
										<div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="country" name="country" placeholder="Country" 
												pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted." required>
                                                <label for="subject">Country</label>
                                            </div>
                                        </div>
										
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Register</button>
                                        </div>
                                    </div>
                                </form>
								<?php
   include '../dbconnect.php';
   
if(isset($_POST['submit']))
{
	$id=autoid("table_sitterreg","sitter_id");
	
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
        
        
        $data="SELECT * FROM table_sitterreg";
        $c=0;
        $sd="SELECT * FROM table_sitterreg";
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
			
				$target_dir = "../idproofs/";     //saving folder
				$target_file=$id."_".$mailid.".jpg";           //filename
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir.$target_file);    //uploading
				$file="idproofs/".$target_file;      //dbfield info
				
				
				$target_dir1 = "../profile_pic/";     //saving folder
				$target_file1=$id."_".$mailid.".jpg";           //filename
				move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"],$target_dir1.$target_file1);    //uploading
				$file2="profile_pic/".$target_file1;      //dbfield info
			
            $sql="INSERT INTO `table_sitterreg` VALUES ('$id','$name','$phno','$ano','$mailid','$dob','$file','$gender','$experience','$category','$hname','$sname','$zipcode','$city','$state','$country','$file2','1')";
            if(mysql_query($sql,$con))
            {
                
                    echo"<script>alert('Account created ! Please login ');</script>";
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
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            
            <?php
			include'footer.php';
			?>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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