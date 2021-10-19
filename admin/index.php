<!DOCTYPE html>
<html lang="en">

<head>
  <title>SmartBrain</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!--//meta tags ends here-->
  <!--booststrap-->
  <link href="../assets/css1/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- //font-awesome icons -->
  <!-- Nav-CSS -->
  <link href="../assets/css1/nav.css" rel="stylesheet" type="text/css" media="all" />
  <script src="../assets/js/modernizr.custom.js"></script>
  <!-- //Nav-CSS -->
  <!-- banner -->
  <link rel="stylesheet" type="text/css" href="../assets/css1/uncover.css" />
  <!--//banner -->
  <!--stylesheets-->
  <link href="../assets/css1/style.css" rel='stylesheet' type='text/css' media="all">
  <!-- <link href="css/style.css" rel='stylesheet' type='text/css' media="all"> -->


  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
</head>

<body>
  <div class="header-outs" id="home">
    <div class="header-w3layouts">
      <div class="container">
        <div class="right-side">
          <p>
            <button id="trigger-overlay" type="button">
              <span class="fa fa-bars" aria-hidden="true"></span>
            </button>
          </p>
        </div>
        <!-- open/close -->
        <div class="overlay overlay-hugeinc">
          <button type="button" class="overlay-close">Close</button>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>

      </div>
      <div class="clearfix"> </div>
    </div>
    <!--banner-->
    <div class="slides text-center">
      <div class="slide slide--current one-img ">
        <div class="slider-up">
          <div id="kontenku">
            <div class="row">

              <div class="col-sm-12">
                <img src="../assets/img/logo.gif" class="img-fluid" width="300" height="300" alt="Responsive image">
              </div>
              <div class="col-sm-12 text-center">

                <!-- <p>Selamat datang di SmartBrain</p> -->
                <p><a class="btn btn-danger btn-lg mt-5" href="go.php" role="button">PLAY</a></p>
                <!-- <p><a class="btn btn-primary btn-lg" onclick="kategori()" href="#" role="button">IKI KATEGORI</a></p> -->
              </div>

            </div>
          </div>


        </div>
        <div class="slide__img">
        </div>
      </div>

    </div>
    <!--//banner-->
    <!--Footer -->
    <footer class="py-2">
      <div class="icons text-center py-md-3 pb-2">
        <ul>
          <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
          <li><a href="#"><span class="fas fa-envelope"></span></a></li>
          <li><a href="#"><span class="fas fa-rss"></span></a></li>
          <li><a href="#"><span class="fab fa-vk"></span></a></li>
        </ul>
      </div>
      <div class="footer-below text-center">
        <p>©2021 Smart Brain. All Rights Reserved | Design by <a href="http://schiene-tren.epizy.com" target="_blank">Schiene Tren</a></p>
      </div>
    </footer>
    <!-- //Footer -->
    <!-- js working-->
    <script src='../assets/js/jquery-2.2.3.min.js'></script>
    <!--//js working-->
    <!-- For-Banner -->
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/anime.min.js"></script>
    <script src="../assets/js/uncover.js"></script>
    <script src="../assets/js/demo1.js"></script>
    <!-- //For-Banner -->
    <!--nav menu-->
    <script src="../assets/js/classie.js"></script>
    <script src="../assets/js/demonav.js"></script>
    <!-- //nav menu-->
    <!-- bootstrap working-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- // bootstrap working-->
    <script>
      function mulai() {
        $('#kontenku').load('ajax/soal.php');
      }

      function soaljawab() {
        $('#kontenku').load('ajax/soaljawab.php');
      }

      function manage_user() {
        $('#kontenku').load('ajax/user.php');
      }

      function kategori() {
        $('#kontenku').load('ajax/kategori.php');
      }

      function go() {
        $('#kontenku').load('go.php');
      }
    </script>
</body>

</html>