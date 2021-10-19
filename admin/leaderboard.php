<?php
session_start();
require "../koneksi.php";
if (!isset($_SESSION["login"])) {
    header("Location: " . base_url . "login.php");
    exit;
}
//$kat = $_GET["id_kat"];
$score = mysqli_query($con, "SELECT * FROM tbl_score WHERE id ='" . $_SESSION["id"] . "'");
$score_row = mysqli_fetch_array($score);
// $total_time = (preg_replace('/[^0-9]/', "", $selecting_quiz_row['waktu_maks'])) * 60;

?>
<script type="text/javascript">
</script>
<div class="row">
    <div class="col-sm-12 mb-3">
        <div class="row col-sm-6">
        <h2>Hei, Selamat !</h2>
        <h3>Kuis Diselesaikan Dengan Baik</h3>

        </div>
        <div class="row col-sm-6 ">
            <img src="../assets/img/doodles.png" alt="">

        </div>
        <h2>Hei, Selamat !</h2>
        <h3>Kuis Diselesaikan Dengan Baik</h3>
        <br>
        <button type="button" class="btn btn-primary"> Skor Kamu : <?= $score_row['score'] ?> </button>
        <br>
        <br>
        <button type="button" class="btn btn-success"> Jawaban Benar : <?= $score_row['benar'] ?> </button>
        <button type="button" class="btn btn-danger"> Jawaban Salah : <?= $score_row['salah'] ?></button>
    </div>

</div>