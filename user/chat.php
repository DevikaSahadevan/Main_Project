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
<?php
session_start();
include_once "php/config.php";
 include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
        $user_id = mysql_real_escape_string($_POST['userid']);
        $sql = mysql_query("SELECT * FROM tbl_login WHERE username = '$user_id'");
        $row = mysql_fetch_assoc($sql);
          // header("location: users.php");
        
        ?>
        <!-- <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a> -->
        <?php
          // $sql1 = mysql_query("SELECT * FROM tbl_address WHERE login_id =  {$user_id}");
          // if (mysqli_num_rows($sql1) > 0) {
          //   $row1 = mysqli_fetch_assoc($sql1);
          // }

          // if ($row1['profileimg'] == "NILL") {
          ?>
            <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
          <?php   
        // } else { 
          ?>
            <!-- <img src="../user_profile/images/<?php echo $row1['profileimg']; ?>" alt=""> -->
          <?php  
        //  }  
         ?>
        <div class="details">
          <span><?php echo 'Chat with admin'?></span>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>

</html>