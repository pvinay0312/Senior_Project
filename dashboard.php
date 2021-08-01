<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Maniac Kart | Dashboard</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
</head>

<body>

    <?php
      session_start();
      include_once("db_connect.php");
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
          <li class="active">
            <a href="dashboard.php"><span class="tm-nav-deco"></span>Coupons</a>
          </li>
          <li>
            <a href="contact.php"><span class="tm-nav-deco"></span>Contact</a>
          </li>
        </ul>
      </nav>

      <div class="tm-content-container">

        <figure class="mb-0">
          <img src="img/cover.jpg" alt="Image" class="img-fluid tm-img" width="705" height="394" />
        </figure>
        
        <div class="tm-content">
          

          
          <ul>
            <?php if (isset($_SESSION['user_id'])) 
            { ?>

          <h2 class="tm-page-title">Welcome! <strong><?php echo $_SESSION['user_name']; ?></h2>

          Coupon for this week:

           <img src="img/coupon.jpg" alt="Image" width="400" height="225" />

            <br><br>

            <div><a href="logout.php">Log Out</a></div>
        
          
            <?php } 
            else 
            { ?>
              You are not logged in! Please <a href="login.php">click here</a> in order to check Coupon of for this week.
            <?php } ?>

          </ul>


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