<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8"> 
    <title>Forgot Password • Carti</title>
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
                <form action="forgot-password.php" method="POST" autocomplete="">
                <div class="forgot-box">
                <div class="logo"><img src="webimages/cartinamelogo.svg"></div>
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>"></div>
                    <div class="form-group"><input class="form-control button" type="submit" name="check-email" value="Continue"></div>
                    </div>
                </form>
            </div>
            <div class="login-img" style="background-image: url('webimages/background.png');"></div>
        </div>
    </div>
    </header>
</body>
</html>