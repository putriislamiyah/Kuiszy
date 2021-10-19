<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>SmartBrain</title>

  <!-- Bootstrap -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <!-- sweeat alert -->
  <link href="../assets/sweet_alert/dist/sweetalert.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/datatables/dataTables.bootstrap.css">

  <!--booststrap-->
  <link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- font-awesome icons -->
  <link href="css1/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- Nav-CSS -->
  <link href="css1/nav.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/modernizr.custom.js"></script>
  <!-- banner -->
  <link rel="stylesheet" type="text/css" href="css1/uncover.css" />
  <!--stylesheets-->
  <link href="css1/style.css" rel='stylesheet' type='text/css' media="all">

  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Arimo" rel="stylesheet">

</head>

<body>

  <div class="container">

    <div class="navigasi">

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img alt="Brand" src="../assets/img/quiz.png" width="30"></a>

          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <?php if ($_SESSION['user'] == 'admin') { ?>
                    <li><a href="#" onclick="soaljawab()">Soal & Jawaban</a></li>
                    <li><a href="#" onclick="manage_user()">Manage User</a></li>
                  <?php  }  ?>
                  <li><a href="index.php">Mulai Kuis</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>

    <div class="isi">
      <div class="jumbotron">
        <div id="kontenku">
          <div class="row">

            <div class="col-sm-12">
              <img src="../assets/img/quiz.png" alt="../assets/img/quiz.png" class="img img-responsive imgku">
            </div>
            <div class="col-sm-12 text-center">
              <h1>Hello, <?= $_SESSION["user"]; ?> </h1>
              <p>Selamat datang di SmartBrain</p>
              <p><a class="btn btn-primary btn-lg" onclick="mulai()" href="#" role="button">Klik disini</a></p>
              <p><a class="btn btn-primary btn-lg" onclick="kategori()" href="#" role="button">IKI KATEGORI</a></p>
              <p><a class="btn btn-primary btn-lg" onclick="lal()" href="#" role="button">Klik kontol</a></p>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="footer">
      <p>Copyright by SmartBrain | Desaign by <a href="http://schiene-tren.epizy.com" target="_blank" rel="noopener noreferrer">SchieneTren</a></p>
    </div>




  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../assets/js/bootstrap.min.js"></script>
  <!-- sweetalert -->
  <script src="../assets/sweet_alert/dist/sweetalert.min.js"></script>
  <!-- datatable -->
  <script src="../assets/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/datatables/dataTables.bootstrap.min.js"></script>

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

    function lala() {
      $('#kontenku').load('ajax/kategori.php');
    }
  </script>
  <!-- <?php //$query = mysqli_query($con, "DELETE FROM tbl_score WHERE id= '" . $_SESSION['id'] . "' "); 
        ?> -->
</body>

</html>