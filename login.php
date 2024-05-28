<?php
require('connection.php');

if(isset($_POST['username'])){
  $uname = $_POST['username'];
  $pas = $_POST['password'];
  $q = "select password from user where user_name = '$uname'";
  $res = mysqli_query($con, $q);
  if(mysqli_num_rows($res)>0){
    $arr = mysqli_fetch_assoc($res);
    $db_pass = $arr['password'];
    if ($db_pass == $pas){
      header('location:index.html');
    } else {
      echo "login failed";
    }
  } else {
    echo "Invalid user";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="Asserts/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Asserts/css/font_awosome_icon.css">
    <script src="Asserts/js/bootstrap.min.js"></script>
    <script src="Asserts/js/jquery-3.7.1.min.js">
    </script>
 <script src="Asserts/js/lottie.min.js"></script>
  </head>
  <script src="Asserts/js/font_awesome.js" > </script>
<body>
   
  <!-- Header -->
  <header>
    <nav class="mynavbar navbar navbar-expand-xl bg-transparent">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="mynavbar navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admission.html">Admission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


    <div class="container py-5 form">
        <div class="row">
            
            <div class="col-md-6">
                <form class="login-form" action="login.php" method="post">
                    <h2>Login to Your Account</h2>
                    <div class="form-group">
                        <label for="username">Username *:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password *:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                    <div class="form-group">
                        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
              <div id="animation"></div>
          </div>

        </div>
    </div>

<!-- footer -->
<footer class="my_footer">
  <div class=" pt-5 pg-4">

    <div class="container text-center text-md-left">

      <div class="row text-center text-md-left">

        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-dark">The Educator</h5>
          <p>At The Educator School, we are dedicated to empowering minds and shaping futures through a commitment to excellence in education. Our institution stands as a beacon of opportunity, where students discover their potential and embrace limitless possibilities. Join us on a journey of knowledge, growth, and achievement.</p>
        </div>

       

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Quick Links</h5>
          <p>
            <a href="aboutUs.html" class="footer_link" style="text-decoration: none;">About Us</a>
          </p>

          <p>
            <a href="privacy_policy.html" class="footer_link" style="text-decoration: none;">Privacy Policy</a>
          </p>

          <p>
            <a href="contactUs.html" class="footer_link" style="text-decoration: none;">Contact Us</a>
          </p>

          <p>
            <a href="terms.html" class="footer_link" style="text-decoration: none;">Term Of Use</a>
          </p>

          <p>
            <a href="login.html" class="footer_link" style="text-decoration: none;">Login</a>
          </p>
        </div>  

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-dark">Contact</h5>
          <div class="icon-text mb-2">
            <i class="fa fa-home mr-3 icon"></i>
            <span>3rd Floor, Saeed Centre, Okara</span>
          </div>
          <div class="icon-text mb-2">
            <i class="fa fa-envelope mr-3 icon"></i>
            <span>mianzainulaman@gmail.com</span>
          </div>
          <div class="icon-text mb-2">
            <i class="fa fa-phone mr-3 icon"></i>
            <span>+92 3181646340</span>
          </div>
          <div class="icon-text mb-2">
            <i class="fa fa-phone mr-3 icon"></i>
            <span>+44 746 112 5175</span>
          </div>
        </div>

      </div>

    </div>
    <hr class="mb-4">

    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8 px-5">
        <p>
          Copyright &#169 2024 All rights reserved by:
          <a href="#" style="text-decoration: none;">
            <strong class="text-warning">Mian Zain Ul Aman Chachhar</strong>
          </a>
        </p>
      </div>

      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-right">

          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/zainulaman.chhachhar" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank"><i class="fab fa-facebook "></i></a>
            </li>

            <li class="list-inline-item">
              <a href="https://www.facebook.com/zainulaman.chhachhar" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank"><i class="fab fa-twitter "></i></a>
            </li>

            <li class="list-inline-item">
              <a href="https://www.facebook.com/zainulaman.chhachhar" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank"><i class="fab fa-google-plus "></i></a>
            </li>

            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/zain-chhachhar-4b1a95285/" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank"><i class="fab fa-linkedin-in "></i></a>
            </li>

            <li class="list-inline-item">
              <a href="https://www.facebook.com/zainulaman.chhachhar" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank"><i class="fab fa-youtube "></i></a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>



   
    
</body>
<script>
  // Load the animation
  var animation = bodymovin.loadAnimation({
      container: document.getElementById('animation'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: 'Asserts/Animation/animation.json' // Path to your JSON animation file
  });
</script>
</html>
