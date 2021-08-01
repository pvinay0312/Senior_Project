<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Maniac Kart | Register User</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
</head>

<body>

	<?php

		include_once("db_connect.php");

		session_start();
		if(isset($_SESSION['user_id'])) 
		{
			header("Location: index.php");
		}
		$error = false;

		if (isset($_POST['signup'])) 
		{
			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);	

			if (!preg_match("/^[a-zA-Z ]+$/",$name))
			{
				$error = true;
				$uname_error = "Name must contain only alphabets and space";
			}

			if(!filter_var($email,FILTER_VALIDATE_EMAIL)) 
			{
				$error = true;
				$email_error = "Please Enter Valid Email ID";
			}

			if(strlen($password) < 6) 
			{
				$error = true;
				$password_error = "Password must be minimum of 6 characters";
			}

			if($password != $cpassword)
			{
				$error = true;
				$cpassword_error = "Password and Confirm Password doesn't match";
			}

			if (!$error) 
			{
				if(mysqli_query($conn, "INSERT INTO users(user, email, pass) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) 
				{
					$success_message = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
				} 
				else 
				{
					$error_message = "Error in registering...Please try again later!";
				}
			}
		}

	?>

  <div class="tm-page-container mx-auto">

    <header class="tm-header text-center">
      <h1 class="tm-title text-uppercase">Maniac Kart</h1>
    </header>

    <section class="tm-section">
      <nav class="tm-nav">
        <ul>
          <li>
            <a href="index.php"><span class="tm-nav-deco"></span>Home</a>
          </li>
          <li>
            <a href="team.php"><span class="tm-nav-deco"></span>Our Team</a>
          </li>
          <li>
            <a href="dashboard.php"><span class="tm-nav-deco"></span>Coupons</a>
          </li>
          <li>
            <a href="contact.php"><span class="tm-nav-deco"></span>Contact</a>
          </li>
        </ul>
      </nav>

      <div class="tm-content-container">

        <figure class="mb-0">
          <img src="img/cover.jpg" alt="Image" class="img-fluid tm-img" />
        </figure>

        <div class="tm-content">
          <h2 class="tm-page-title">Maniac Kart Registration</h2>
          
          	<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<div>
						<input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
						<span><?php if (isset($uname_error)) echo $uname_error; ?></span>
					</div>	
					<br>
					<div>
						<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
						<span><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>
					<br>
					<div>	
						<input type="password" name="password" placeholder="Password" required class="form-control" />
						<span><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>
					<br>
					<div>	
						<input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
						<span><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
					</div>
					<br>
					<div>
						<input type="submit" name="signup" value="Sign Up" class="button buttonGo"/>
					</div>

				</fieldset>

			</form>

			<span>
				<?php if (isset($success_message)) { echo $success_message; } ?>	
			</span>

			<span>
				<?php if (isset($error_message)) { echo $error_message; } ?>		
			</span>


			<div>	
				Already Registered? <a href="login.php">Login Here</a>
			</div>

        </div>
      </div>
    </section>

    <footer>
      <span>Copyright 2021 Senior Gaming Project</span>
      <span>Kean University - Union NJ</span>
    </footer>
    
  </div>
</body>

</html>