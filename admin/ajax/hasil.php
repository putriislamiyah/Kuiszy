<?php 
session_start();
require "../../koneksi.php";
if (!isset($_SESSION["login"])) {
  header("Location: ".base_url."login.php");
  exit;
}
$id = $_POST['id'];
$waktu = $_POST['waktu'];
$kategori = $_POST['kategori'];
$jawaban = $_POST['jawaban'];
$id_user = $_SESSION['id'];
$result=mysqli_query($con, "SELECT jawaban FROM tbl_soal WHERE id = '$id'");
$hasil = mysqli_fetch_assoc($result);

if ($hasil['jawaban']==$jawaban) {
    $data = 'jawaban anda benar, anda dapat 4 point';
    $nilai = 4;
    // echo "<script>console.log('test')</script>";
    $cari = mysqli_query($con,"SELECT * FROM tbl_score WHERE id= '$id_user' ");
    if (mysqli_num_rows($cari) > 0) {
        $score = mysqli_fetch_assoc($cari);
        $res = mysqli_query($con, "UPDATE tbl_score SET kategori = '$kategori', benar = '".$score['benar']."' + 1, waktu = '$waktu', score = '".$score['score']."' + $nilai WHERE id='$id_user' ");
       
        // var_dump($res);

    }else{
        // echo "tes";
        mysqli_query($con,"INSERT INTO tbl_score VALUES ('$id_user','$nilai','$waktu',1,0,'$kategori')") or die(mysqli_error($con));
        // var_dump($res);
    }
}else{
    $data = 'jawaban anda salah, anda dikurangi 1 point';
    $nilai = 1;
    $cari = mysqli_query($con,"SELECT * FROM tbl_score WHERE id='$id_user' ");
    if (mysqli_num_rows($cari) > 0) {
        $score = mysqli_fetch_assoc($cari);
        mysqli_query($con, "UPDATE tbl_score SET kategori = '$kategori', salah = '" . $score['salah'] . "' + 1, waktu = '$waktu', score = '" . $score['score'] . "' - $nilai WHERE id='$id_user' ");
        

    }else{
        $nilai = -1;
        mysqli_query($con,"INSERT INTO tbl_score VALUES ('$id_user','$nilai','$waktu',0,1,'$kategori')");
    }
}

// echo ;
$nilaisekarang = mysqli_fetch_assoc(mysqli_query($con,"SELECT score FROM tbl_score WHERE id='$id_user' "));
echo $data.'/'. $nilaisekarang['score'];
// var_dump($waktu);
?>