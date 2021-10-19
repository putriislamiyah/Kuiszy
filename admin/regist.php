<?php
session_start();
require "../koneksi.php";
if (isset($_REQUEST["register"])) {
    // echo "<script>console.log('cccc');</script>";
    $email = $_REQUEST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users VALUES ('','$email','$username','$password',1)";
    $result = mysqli_query($con, $query);

    // var_dump($result);
    // if ($result) {
    //     $_SESSION["success"] = "Akun Berhasil Di Tambah";
    // echo $this->session->set_flashdata('msg', 'sukses cok');
        header("Location: play.php");
    // }else {
    //     $_SESSION["error"] = "Akun Gagal Di Tambah";
    //     header("Location: play.php");
    // }
    // $succes = true;
}else{
    // echo $this->session->set_flashdata('msg', 'eror kontol');
    header("Location: play.php");
    // $gagal = true;
}
