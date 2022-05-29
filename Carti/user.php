<?php require_once "controllerUserData.php"; ?>   <!-- The require_once keyword is used to embed PHP code from another file -->
<?php // Start of PHP 
$email = $_SESSION['email']; // Stores email information
$password = $_SESSION['password'];// Stores password information
if($email != false && $password != false){ // Sees if users email and passowords is false
    $sql = "SELECT * FROM usertable WHERE email = '$email'"; // Collects the email information from the database
    $run_Sql = mysqli_query($con, $sql); // Runs sql
    if($run_Sql){ //  If the sql runs
        $fetch_info = mysqli_fetch_assoc($run_Sql); // Used to return an associative array representing the next row
        $status = $fetch_info['status'];  // Checks if the Status is checked
        $code = $fetch_info['code'];  // Checks if the Code is checked
        if($status == "verified"){ // Checks if the Status is verified
            if($code != 0){ // Checks if the code = 0
                header('Location: reset-code.php'); // Sends the user to reset code
            }
        }else{ // or else 
            header('Location: user-otp.php'); // sends the user to Code Verification page
        }
    }
}else{ // or else 
    header('Location: login-user.php');// sends the user to Login page
}
?>  <!-- End of PHP -->

    <!-- Start of HTML -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head> <!-- Start of Head -->
  <meta charset="UTF-8"> 
  <title>Carti</title>  <!-- Give the website a Title -->
  <link rel="stylesheet" href="stylesheet/style.css?v=<php echo time(); ?>">  <!-- CSS for the Style -->
  <link rel="stylesheet" href="stylesheet/navbar.css?v=<php echo time(); ?>"> <!-- CSS for the Navbar -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">  <!-- Boxicons CDN Link -->
  <link rel="icon" type="image/png" href="webimages/logo.svg"> <!-- Favicon Icon -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Controls the zoom level when the page is first loaded. -->
</head> <!-- End of Head -->
<body>  <!-- Start of Body -->
  <div class="sidebar"> <!-- Start of Sidebar -->
    <div class="logo-details">  <!-- Start of logo-details -->
      <i class="icon"><img src="webimages/logo.svg" style="height:28px"></i>  <!-- logo on navbar -->
      <div class="logo_name">Carti</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
    <li><i class='bx bx-search'></i><input type="text" placeholder="Search..."><span class="tooltip">Search</span></li>
      <li><a href="index.php"><i class='bx bx-grid-alt'></i><span class="links_name">Home</span></a><span class="tooltip">Home</span></li>
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
  </div>
  <header>    
    <div class="topbar">
      <h1>Carti</h1>
    </div>
    <img src="webimages/sun.png" id="icon"> <!-- Gives you the option to get light or dark theme -->

</div>
</div>
  </header> <!-- End of Header -->
  <script src="js/navbar.js"></script>
  <script src="js/color-theme.js"></script>
</body> <!-- End of Body -->
</html> <!-- End of HTML -->