<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!-- Custom Style-->
    <link rel="stylesheet" href="./css/Style.css">

</head>

<body>


    <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
              <h4>NotAlone</h4>

                    <!-- Owl-Carousel -->

                    <div class="owl-carousel owl-theme">
                        <img src="./assets/nuture mental helath.png" alt="" class="login_img">
                        <img src="./assets/mental-removebg-preview.png" alt="" class="login_img">
                        <img src="./assets/yoga-remove-bg.PNG" alt="" class="login_img">

                    </div>

                    <!-- /Owl-Carousel -->

                    <!-- <div class="follow">
                        Follow us <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                    </div> -->
                </div>
                <div class="col login">

                  <a href="signup/index.php"> <button type="submit" class="btn btn-signup">Sign Up</button></a>
                    <form action="" method="post">
                        <div class="titles">
                            <h6>We keep everything</h6>
                            <h3>Ready to Login</h3>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="username" id="username" placeholder="Email" class="form-input">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-input" >
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                        </div>
                        <button type="submit" name="login" class="btn btn-login">Login</button>
                        <div class="alert alert-danger" id="failure" style="font-size: 20px;margin-top: 5px;display:none">
              Does not Match!<br>Invalid Username Or Password!
              </div>
              <div class="alert alert-danger" id="selectexam" style="margin-top: 10px;display:none">
                <strong>Select Exam</strong><br>Please choose an exam.
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
      if(isset($_POST["login"]))
      {
        $count=0;
        $res=mysqli_query($link,"select * from reg where username='$_POST[username]' && password='$_POST[password]'");
        $count=mysqli_num_rows($res);

        if($count==0)
        {
          ?>
            <script type="text/javascript">
                document.getElementById("failure").style.display = "block";
            </script>
          <?php

        }
        else {

          $_SESSION["username"]=$_POST["username"]
          ?>
          <script type="text/javascript">
          window.location="/iwp main/login/home1/index.html";
          </script>
          <?php
        }
      }

       ?>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>
</body>

</html>
