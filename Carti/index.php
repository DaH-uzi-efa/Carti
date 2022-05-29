<?php require_once "controllerUserData.php"; ?> 
<?php
// Checks if the The user is verified
$email = $_SESSION['email']; 
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql); 
    if($run_Sql){ 
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];  
        $code = $fetch_info['code'];
        if($status == "verified"){ 
            if($code != 0){ // sends users to reset code
                header('Location: reset-code.php'); 
            }
        }else{ // or else sends the users to verify page
            header('Location: user-otp.php'); 
        }
    }
}else{ // or else sends the users back to login
    header('Location: login-user.php');
}
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8"> 
  <title>Carti</title> 
  <link rel="stylesheet" href="stylesheet/style.css?v=<php echo time(); ?>">
  <link rel="stylesheet" href="stylesheet/navbar.css?v=<php echo time(); ?>">
  <link rel="stylesheet" href="stylesheet/veiw.css?v=<php echo time(); ?>">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"> 
  <link rel="icon" type="image/png" href="webimages/logo.svg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head> 
<body>  
  <div class="sidebar"> <!-- Start of Sidebar -->
    <div class="logo-details">  
      <i class="icon"><img src="webimages/logo.svg" style="height:28px"></i> 
      <div class="logo_name">Carti</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
    <li><i class='bx bx-search'></i><input type="text" placeholder="Search..."><span class="tooltip">Search</span></li>
      <li><a href="index.php"><i class="bx bx-grid-alt"></i><span class="links_name">Home</span></a><span class="tooltip">Home</span></li>
      <li><a href="user.php"><i class='bx bx-user'></i><span class="links_name">User</span></a><span class="tooltip">User</span></li>
      <li><a href="vibe.php"><i class='bx bx-mobile-alt'></i><span class="links_name">Vibez</span></a><span class="tooltip">Vibez</span></li>
      <li><a href="#"><i class='bx bx-chat'></i><span class="links_name">Chat</span></a><span class="tooltip">Chat</span></li>
      <li><a href="#"><i class='bx bx-folder'></i><span class="links_name">My videos</span></a><span class="tooltip">My videos</span></li>
      <li><a href="uploadpage.php"><i class='bx bx-upload'></i><span class="links_name">Upload</span></a><span class="tooltip">Upload</span></li>
      <li><a href="#"><i class='bx bx-game'></i><span class="links_name">Game</span></a><span class="tooltip">Game</span></li>
      <li><a href="#"><i class='bx bx-cog'></i><span class="links_name">Seetings</span></a><span class="tooltip">Settings</span></li>
      <li class="profile"><div class="profile-details"><img src="webimages/profile-picture.png" alt="profileImg">
      <div class="name_job">
             <div class="name">Hello, <?php echo $fetch_info['name'] ?></div>
           </div>
         </div>
         <a href="logout-user.php"><i class='bx bx-log-out' id="log_out"></i></a>
     </li>
    </ul>
  </div>  <!-- End of Sidebar -->
  <header>
  <div class="cookie-consent-modal">  <!-- Start of Cookies -->
        <div class="content">
            <h1>Allow Cookies</h1>
            <p>
Carti does not allow copyrighted or inappropriate content on its website, and as a result and because there are some regulations you must follow when using Carti, we ask that you accept the terms of service.and your personal information is secure with us. we do not sell or keep your information. we just know what films you have posted.</p>
            <div class="btns">
                <a href="terms.html"><button class="btn cancel">Terms of service</button></a>
                <button class="btn accept">accept</button>
            </div>
        </div>
    </div>  <!-- End of Cookies -->
    
    <div class="topbar">  <!-- Start of Topbar -->
      <h1>Carti</h1>
    </div>  <!-- End of Topbar -->
    <img src="webimages/sun.png" id="icon" style="display: none;">  <!-- Gives The JavaScript permission to load screen theme -->

    <div class="upload">
    <div class="uploadtxt"><a href="uploadpage.php">UPLOAD</a></div>
<div class="alb">
    <?php 
     include "db_conn.php";
     $sql = "SELECT * FROM videos ORDER BY id DESC";
     $res = mysqli_query($conn, $sql);
     if (mysqli_num_rows($res) > 0) {
         while ($video = mysqli_fetch_assoc($res)) { 
     ?>  
        <video src="uploads/<?=$video['video_url']?>" 
               controls> 
        </video>
    <?php 
     }
     }else {
     }
     ?>
</div>
</div>
  </header> 
  <script src="js/cookie.js"></script>
  <script src="js/navbar.js"></script>
  <script src="js/color-theme.js"></script>
  <script src="js/video.js"></script>
</body> 
</html> 