<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>


		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="" method="post">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Phone Number" name="contact" id="contact"pattern="[6-9]{1}[0-9]{9}" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Mail" name="email" id="email"  required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required>
					</div>
					
		  <input type="submit" name="submit1" class="register" value="Register" style="background-color:#23282d; width:120px; height:30px; color:#ffffff;">
		  
		  
					<!-- <button name="submit1">
						<span>Register</span>
					</button> -->
					<div class="alert alert-success" id="success" style="margin-top:10px;display: none">
					<strong>Success!</strong> Account Registration Successful!
				</div>
				<div class="alert alert-danger" id="failure" style="color: white;margin-top: 10px;display: none">
					<strong>Already Exist!</strong> This usernames already exists!
				</div>
				</form>
				<a href="/iwp main/login/index.php"> <button type="submit" class="btn btn-signup">login</button></a>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>

		</div>

		<?php
			    if(isset($_POST["submit1"]))
			    {
			      $count=0;
			      $res = mysqli_query($link,"select * from reg where username='$_POST[username]'") or die(mysqli_error($link));
			      $count = mysqli_num_rows($res);

			      if($count>0)
			      {
			        ?>
			        <script type="text/javascript">
			          document.getElementById("success").style.display = "none";
			          document.getElementById("failure").style.display = "block";
			        </script>
			        <?php
			      }
			      else {
			        mysqli_query($link,"insert into reg values(NULL,'$_POST[username]','$_POST[contact]','$_POST[email]','$_POST[password]')") or die(mysqli_error($link));
			        ?>
			        <script type="text/javascript">
			          document.getElementById("success").style.display="block";
					  document.getElementById("failure").style.display="none";
					  
			        </script>

			        <?php
			      }
			    }
			     ?>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
