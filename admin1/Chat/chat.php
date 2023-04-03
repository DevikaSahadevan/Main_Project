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