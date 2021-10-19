<?php
session_start();
require "../koneksi.php";

if (isset($_SESSION["login"])) {
    
    $result = mysqli_query($con, "SELECT * FROM tbl_score WHERE id='" . $_SESSION['id'] . "'");
    $tbl_score = mysqli_fetch_assoc($result);
    if ( isset($tbl_score['score'])) {
        header("Location: Priview.php");
    }else {
        header("Location: play.php");
    }
    exit;
}
?>

<?php
if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($con, htmlspecialchars($_POST["username"]));
    $password = mysqli_real_escape_string($con, htmlspecialchars($_POST["password"]));
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($con, $query);
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            $_SESSION["user"] = $row["username"];
            $_SESSION["id"] = $row["id"];
            header("Location: play.php");
            exit;
        }
    }

    $error = true;
}

if (isset($_SESSION["success"])) { ?>
    <script>
        swal({
            title: "SUKSESS",
            text: <?= $_SESSION["success"] ?>,
            imageUrl: '../assets/img/time_out.png'
        });
    </script>
<?php

    unset($_SESSION["success"]);
} elseif (isset($_SESSION["error"])) {

?>
    <script>
        swal({
            title: "ERROR",
            text: <?= $_SESSION["error"] ?>,
            imageUrl: '../assets/img/time_out.png'
        });
    </script>
<?php

    unset($_SESSION["error"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>SmartBrain</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Dragon Hunt Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


    <link href="../assets/sweet_alert/dist/sweetalert.css" rel="stylesheet" />

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
                        <div class="container">
                            <img src="../assets/img/cok1.png" width="100" height="100" alt="" class="mb-5">
                            <div class="row justify-content-center">

                                <div class="col-lg-6">
                                    <ul class="nav nav-pills nav-justified justify-content-center bg-secondary" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-2">
                                        <?php if (isset($error)) : ?>
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong>Ohh no..!</strong> Username dan password salah !!!
                                            </div>
                                        <?php endif; ?>
                                        <div class="tab-pane active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                            <form method="POST" action="">
                                                <div class="form-group">
                                                    <label for="username" class="col-form-label">Username</label>
                                                    <input class="form-control" type="text" placeholder="" id="username" name="username" />

                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class=" col-form-label">Password</label>
                                                    <input class="form-control" type="password" placeholder="" id="password" name="password" />
                                                </div>
                                                <button type="submit" name="login" class="btn btn-danger">Login</button>
                                            </form>
                                        </div>

                                        <div class="tab-pane " id="signup" role="tabpanel" aria-labelledby="signup-tab">
                                            <form method="POST" action="regist.php" id="regis">
                                                <div class="form-group">
                                                    <label for="email" class="col-form-label">Email</label>
                                                    <input class="form-control" type="email" id="email1" name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="col-form-label">Username</label>
                                                    <input class="form-control" type="text" id="username1" name="username" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-form-label">Password</label>
                                                    <input class="form-control" type="password" id="password1" name="password" />
                                                </div>
                                                <input type="submit"  id="regis" name="register" class="btn btn-danger" value="register">
                                            </form>
                                        </div>

                                    </div>
                                </div>
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

        </script>
        <!-- // bootstrap working-->

</body>

</html>
<script>
    // function regis() {
    //     var email = $("#email1").val();
    //     var username = $("#username1").val();
    //     var password = $("#password1").val();
    //     $.ajax({
    //         type: 'POST',
    //         url: 'regist.php?',
    //         success: function(data) {
    //             if (data == "succes") {
    //                 swal.fire({
    //                     type: 'success',
    //                     title: 'Register Berhasil!',
    //                     text: 'silahkan login!'
    //                 });
    //             }
    //         }

    //     })
    // }

   
</script>