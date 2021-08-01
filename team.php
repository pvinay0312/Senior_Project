<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Maniac Kart | Team</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Magnific Popup core CSS file -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />

</head>

<body>
  <div class="tm-page-container mx-auto">

    <header class="tm-header text-center">
      <h1 class="tm-title text-uppercase">Maniac Kart</h1>
    </header>

    <div class="tm-section">
      <nav class="tm-nav">
        <ul>
          <li>
            <a href="index.php"><span class="tm-nav-deco"></span>Home</a>
          </li>
          <li class="active">
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

        <div class="tm-content tm-content-2">

          <p>
            We are taking Web Programming course with Dr. Kazi at Kean University and we are using this project for our class presenatation.
          </p>

          <div class="container-fluid">
            <div class="row tm-gallery" id="tmGallery">
              <div class="col-sm-6 tm-gallery-item">

                <figure class="effect-bubba">

                  <img src="img/gallery/vp.jpg" alt="Gallery item" class="img-fluid" />

                  <figcaption>

                    <h2>Vinay <span>Patel</span></h2>
                    <p>PHP/SQL</p> 

                  </figcaption>

                </figure>

              </div>

              <div class="col-sm-6 tm-gallery-item">

                <figure class="effect-bubba">

                  <img src="img/gallery/dp.jpg" alt="Gallery item" />

                  <figcaption>

                    <h2>Dhruv <span>Parikh</span></h2>
                    <p>Layout Design</p>

                  </figcaption>

                </figure>
              </div>

              <div class="col-sm-6 tm-gallery-item">

                <figure class="effect-bubba">

                  <img src="img/gallery/pc.jpg" alt="Gallery item" class="img-fluid" />

                  <figcaption>

                    <h2>Parth <span>Chauhan</span></h2>
                    <p>HTML/CSS</p>

                  </figcaption>

                </figure>
              </div>

              <div class="col-sm-6 tm-gallery-item">

                <figure class="effect-bubba">

                  <img src="img/gallery/dn.jpg" alt="Gallery item" class="img-fluid" />

                  <figcaption>

                    <h2>Darshan <span>Nayee</span></h2>
                    <p>JavaScript and putting eveything into practicle</p>

                  </figcaption>

                </figure>
              </div>


            </div>
          </div>

        </div>
      </div>
    </div>

    <footer>
      <span>Copyright 2019 Web Client Project</span>
      <span>Kean University - Union NJ</span>
    </footer>

  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script>

    $(document).ready(function () 
    {
      $('.tm-gallery').magnificPopup(
      {
        delegate: 'a',
        type: 'image',
        gallery: 
        {
          enabled: true
        },
      });
    }
    );

  </script>

</body>
</html>