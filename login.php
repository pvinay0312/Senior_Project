<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Maniac Kart | Login</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
</head>

<body>

  <?php
    include_once("db_connect.php");

    session_start();
    if(isset($_SESSION['user_id'])!="") 
    {
      header("Location: dashboard.php");
    }

    if (isset($_POST['login']))
    {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
    
      if ($row = mysqli_fetch_array($result)) 
      {
        $_SESSION['user_id'] = $row['uid'];
        $_SESSION['user_name'] = $row['user'];
        header("Location: dashboard.php");
      } 
      else 
      {
        $error_message = "Incorrect Email or Password!!!";
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
          <h2 class="tm-page-title">Maniac Kart Login</h2>

          <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
            <fieldset>

              <div>
                <input type="text" name="email" placeholder="Your Email" required class="form-control" />
              </div>  
              <br>
              <div>
                <input type="password" name="password" placeholder="Your Password" required class="form-control" />
              </div>  
              <br>
              <div>
                <input type="submit" name="login" value="Login" class="button buttonGo" />
              </div>
           
            </fieldset>
          </form>

          <span>
           <?php if (isset($error_message)) { echo $error_message; } ?>  
          </span>

          <div> 

            New User? <a href="register.php">Sign Up Here</a>

          </div>

      </div>
      </div>
    </section>

    <footer>
      <span>Copyright 2019 Web Client Project</span>
      <span>Kean University - Union NJ</span>
    </footer>

  </div>
  
</body>

</html>