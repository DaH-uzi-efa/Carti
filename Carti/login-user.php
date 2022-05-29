<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Login • Carti</title>
	<link rel="stylesheet" href="stylesheet/videostyle.css?v=<php echo time(); ?>">
	<link rel="stylesheet" href="stylesheet/navbar.css?v=<php echo time(); ?>">
	<link rel="stylesheet" href="stylesheet/login.css?v=<php echo time(); ?>">
	<link rel="stylesheet" href="stylesheet/footer.css?v=<php echo time(); ?>">
	<link rel="icon" type="image/png" href="webimages/logo.svg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
    <img src="webimages/sun.png" id="icon" style="display: none;">  <!-- Gives The JavaScript permission to load screen theme -->
    <div class="limiter">
            <div class="container-login">
                <div class="wrap-login">
                    <div class="login-form">
                    <form action="login-user.php" method="POST" autocomplete="">
                        <div class="login-box">
                        <div class="text-center"></div>
                        <div class="logo"><img src="webimages/cartinamelogo.svg"></div>
                        <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach($errors as $showerror){
                                    echo $showerror;
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                        
                        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>"></div>
                        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                        <div class="form-group"><input class="form-control button" type="submit" name="login" value="Login"></div>
                        <div class="link forget-pass"><a href="forgot-password.php">Forgot password?</a></div>
                        </div>
                        <div class="signup-box">
                        <div class="link login-link text-center">Don't have an account?<a href="signup-user.php">Signup now</a></div>
                        </div>
                    </form>
                    </div>
                        <div class="login-img" style="background-image: url('webimages/background.png');"></div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Footer Section -->
    <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About</h2>
	  		<a href="About.html">About</a> <a href="credits.html">Credits</a> <a href="term.html">Terms of Service</a>
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
          <p class="website__rights">© Carti 2020. All rights</p>
        </div>
</body>
</html>