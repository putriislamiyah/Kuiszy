<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: go.php");
    exit;
}
require "../koneksi.php";

// var_dump($_SESSION)  ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SmartBrain</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets/sweet_alert/dist/sweetalert.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/datatables/dataTables.bootstrap.css">


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
                <!-- <nav class="navbar navbar-light " style="background-color: tranparant;">
                    <a class="navbar-brand" href="#">
                        <img src="../assets/img/cok1.png" width="50" height="50" alt="">
                    </a>
                </nav> -->
                <div class="right-side">
                    <div class="col-sm-12 text-center">
                        <h1>Hello,<?= $_SESSION["user"]; ?> </h1>
                        <p>Selamat datang di SmartBrain</p>

                    </div>

                </div>
                <div class="left-side">
                    <p>
                        <img src="../assets/img/cok1.png" id="trigger-overlay" width="70" height="70" alt="" aria-hidden="true">
                        <!-- <button id="trigger-overlay" type="button"> -->
                        <!-- <img src="../assets/img/cok1.png" width="50" height="50" alt="" aria-hidden="true">     -->
                        <!-- <span class="fa fa-bars" aria-hidden="true"></span> -->
                        <!-- </button> -->
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
                            <li><a href="logout.php">Logout</a></li>
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
                            <div class="row col-sm-12 mt-3 mb-3">
                                <div class="col-sm-6 mt-3 mb-3">
                                    <h3>Fisika</h3>
                                    <a onclick="kategori1()" href="#"> <img src="../assets/img/fisika.png" width="120" height="120" class="img-fluid" alt="Responsive image"></a>
                                </div>
                                <div class="col-sm-6 mt-3 mb-3">
                                    <h3>Teknologi</h3>
                                    <a onclick="kategori2()" href="#"> <img src="../assets/img/teknologi.png" width="120" height="120" class="img-fluid" alt="Responsive image"></a>
                                </div>
                            </div>
                            <div class="row col-sm-12 mt-3 mb-3">
                                <div class="col-sm-6 mt-3 mb-3">
                                    <h3>Olahraga</h3>
                                    <a onclick="kategori3()" href="#"> <img src="../assets/img/olahraga.png" width="120" height="120" class="img-fluid" alt="Responsive image"></a>
                                </div>
                                <div class="col-sm-6 mt-3 mb-3">
                                    <h3>Sejarah</h3>
                                    <a onclick="kategori4()" href="#"> <img src="../assets/img/sejarah.png" width="120" height="120" class="img-fluid" alt="Responsive image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide__img">
                </div>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- sweetalert -->
    <script src="../assets/sweet_alert/dist/sweetalert.min.js"></script>
    <!-- datatable -->
    <script src="../assets/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/datatables/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

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
        function leaderboard() {
            $('#kontenku').load('leaderboard.php');
        }

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

        function kategori1() {
            $('#kontenku').load('main.php?id_kat=1');
        }

        function kategori2() {
            $('#kontenku').load('main.php?id_kat=2');
        }

        function kategori3() {
            $('#kontenku').load('main.php?id_kat=3');
        }

        function kategori4() {
            $('#kontenku').load('main.php?id_kat=4');
        }
    </script>
</body>

</html>