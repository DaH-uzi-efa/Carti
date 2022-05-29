<?php require_once "controllerUserData.php"; ?>
<?php 
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
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Upload • Carti</title>
  <link rel="stylesheet" href="stylesheet/videostyle.css?v=<php echo time(); ?>">
  <link rel="stylesheet" href="stylesheet/navbar.css?v=<php echo time(); ?>">
  <link rel="stylesheet" href="stylesheet/footer.css?v=<php echo time(); ?>">
  <link rel="stylesheet" href="stylesheet/upload.css?v=<php echo time(); ?>">
  <link rel="icon" type="image/png" href="webimages/logo.svg">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <i class="icon"><img src="webimages/logo.svg" style="height:28px"></i>
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
  <section class="home-section">
  </section>
  <header>  
    <div class="topbar">
      <h1>Carti</h1>
    </div>
    <img src="webimages/sun.png" id="icon" style="display: none;">  <!-- Gives The JavaScript permission to load screen theme -->

<div class="box">
	<a href="index.php">Videos</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
  </div>  
	 <form action="upload.php" method="post"
	       enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_video">
  <p>Drag your files here or click in this area.</p>
	      	<input type="hidden" name="name" value="<?php echo $fetch_info['name']; ?>">
          <button type="submit"
	 	       name="submit" 
	 	       value="Upload">Upload</button>
	 </form>


  </header>
  
   		   <!-- Footer Section -->
          <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About</h2>
	  		<a href="about.html">About</a> <a href="credits.html">Credits</a> <a href="term.html">Terms of Service</a>
          </div>
          <div class="footer__link--items">
            <h2>Contact</h2>
            <a href="contact.html">Contact</a> <a href="feedback.html">Feedback</a>
          </div>
        </div>
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Social Media</h2>
            <a href="#">Instagram</a> <a href="#">Facebook</a> <a href="#">Youtube</a> <a href="#">Twitter</a>
          </div>
        </div>
      </div>

          <div class="footer__logo">
            <a href="index.php" id="footer__logo"><img src=""><div class="logo_footer"><img src="webimages/cartinamelogo.svg"></a></div>      
          <p class="website__rights">© Carti 2021. All rights</p>
        </div>

  <script src="js/navbar.js"></script>
  <script src="js/upload.js"></script>
  <script src="js/color-theme.js"></script>
</body>
</html>
