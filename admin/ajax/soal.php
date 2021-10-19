<?php
session_start();
require "../../koneksi.php";
if (!isset($_SESSION["login"])) {
    header("Location: " . base_url . "login.php");
    exit;
}
// $kat = $_GET($id_kat);
$selecting_quiz = mysqli_query($con, "SELECT * FROM users WHERE id='" . $_SESSION["id"] . "'");
$selecting_quiz_row = mysqli_fetch_array($selecting_quiz);
$total_time = (preg_replace('/[^0-9]/', "", $selecting_quiz_row['waktu_maks'])) * 60;

?>
<script type="text/javascript">
</script>
<div class="row">
    <div class="col-sm-12 text-center">
        <div class="alert alert-warning alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Aturan Main : </strong> Soal dan jawaban akan tampil secara acak. setiap jawaban benar maka anda mendapat point +4 dan setiap jawaban salah anda mendapat point -1.
            <!-- <br><small>*Swipe ke bawah untuk Memulai kembali kuis.*</small> -->
        </div>

        <?php //var_dump($no) ; 
        ?>

        <h2>Score Anda : <div id="nilai">0</div>
        </h2>
        <h3>$kat</h3>

        <?php
        $no = 1;
        $soal = mysqli_query($con, "SELECT * from tbl_soal WHERE kategori = '1' ORDER BY RAND()  LIMIT 10 ");
        $maxs = mysqli_num_rows($soal);
        // var_dump(mysqli_num_rows($soal));
        ?>
        <h2>
            Time Remaining :
            <div id="countdown">
                00:00
            </div>
        </h2>
        <?php
        while ($row = mysqli_fetch_assoc($soal)) : ?>

            <?php
            $jawaban = mysqli_query($con, "SELECT * from tbl_jawaban WHERE id_soal = '" . $row["id"] . "' ORDER BY RAND()  "); ?>

            <form id="form_jawab_<?= $no; ?>" method="POST" action="ajax/hasil.php">
                <input type="hidden" name="waktu" id="waktu">
                <!-- <input type="text" name="la" class="countdown"> -->
                <p><?= $no; ?>. <?= $row['soal']; ?></p>


                <div class="kotak">
                    <?php
                    $total = mysqli_num_rows($jawaban);
                    while ($rowjwb = mysqli_fetch_assoc($jawaban)) :

                        if ($total == 4) {
                            $abjad = 'A';
                        } elseif ($total == 3) {
                            $abjad = 'B';
                        } elseif ($total == 2) {
                            $abjad = 'C';
                        } else {
                            $abjad = 'D';
                        }
                    ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" id="id" name="id" value="<?= $row['id'] ?>">
                                <input type="hidden" name="sementara" value="0">
                                <div class="input-group">
                                    <span class="input-group-addon"><input class="cursor" type="radio" id="jawaban_<?= $no; ?>" name="jawaban" value="<?= $rowjwb['pilihan_jawab'] ?>"></span>
                                    <input type="text" class="form-control" value="<?= $abjad . '. ' . $rowjwb['pilihan_jawab'] ?>" readonly>

                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->

                    <?php $total--;
                    endwhile; ?>
                </div>



                <br>
                <button onclick="play()" id="btn_pilih_<?= $no; ?>" class="btn btn-lg btn-success">Pilih</button>

            </form>

            <!-- <audio controls>
                <source id="succes" src="music/success.mp3" type="audio/mpeg">
                <source id="error" src="music/error.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio> -->
            <script>
                $("#form_jawab_<?php echo $no; ?>").submit(function() {
                    

                    var next = '<?php echo $no + 1; ?>';
                    if (!$("#jawaban_<?= $no; ?>:checked").val()) {
                        swal({
                            title: "Hello.. !",
                            text: "Pilih dulu jawabannya bro..!!",
                            imageUrl: '../assets/img/warn.png'
                        });
                        return false;
                    } else {
                        $.ajax({
                            type: 'POST',
                            url: $(this).attr('action'),
                            data: $(this).serialize() + '&waktu=' + $("#countdown").text(),
                            success: function(data) {
                                // console.log(data);
                                var myarr = data.split('/');
                                if (myarr[0] == 'jawaban anda benar, anda dapat 4 point') {
                                    // succes.play();
                                    swal({
                                        title: "Benar !",
                                        text: myarr[0],
                                        imageUrl: '../assets/img/up.png',

                                    });

                                    function play() {
                                        var succes = new Audio('/music/success.mp3');
                                        succes.play();
                                    }

                                } else {
                                    // error.play();
                                    swal({
                                        title: "Salah !",
                                        text: myarr[0],
                                        imageUrl: '../assets/img/down.png'
                                    });

                                    function play() {
                                        var error = new Audio('/music/error.mp3');
                                        error.play();
                                    }

                                }
                                $('#nilai').text(myarr[1]);
                                $('#form_jawab_<?php echo $no; ?>').hide();
                                $('#form_jawab_' + next).show();

                                return false;
                            }
                        });
                        return false;
                    }


                });
            </script>


        <?php
            $no++;

        endwhile;

        for ($i = 2; $i <= 10; $i++) {  ?>
            <script>
                $('#form_jawab_<?= $i; ?>').hide()
            </script>
        <?php } ?>

    </div>

</div>
<script type="text/javascript">
    // var max = <?= $maxs ?>;
    // var no = <?= $no - 1 ?>;

    // if ($('#form_jawab_' + max).hasClass('style')) {
    //     console.log('COK');
    // }
    // console.log();

    function end() {
        for (let index = 1; index <= 10; index++) {
            $('#form_jawab_' + index).hide()

        }
    }

    function timer(secs) {
        var ele = document.getElementById("countdown");
        ele.innerHTML = "Your Time Starts Now";
        var mins_rem = parseInt(secs / 60);
        var secs_rem = secs % 60;

        if (mins_rem < 10 && secs_rem >= 10)
            ele.innerHTML = "00:" + "0" + mins_rem + ":" + secs_rem;
        else if (secs_rem < 10 && mins_rem >= 10)
            ele.innerHTML = "00:" + mins_rem + ":0" + secs_rem;
        else if (secs_rem < 10 && mins_rem < 10)
            ele.innerHTML = "00:" + "0" + mins_rem + ":0" + secs_rem;
        else
            ele.innerHTML = "00:" + mins_rem + ":" + secs_rem;

        if (mins_rem == "00" && secs_rem < 1) {
            swal({
                title: "Time Out!!!!",
                text: "Waktu Pengerjaan Sudah Habis",
                imageUrl: '../assets/img/time_out.png'
            });
            end();
            console.log('ppp');
        } else {
            secs--;
            //to animate the timer otherwise it'd just stay at the number entered
            //calling timer() again after 1 sec
            var time_again = setTimeout('timer(' + secs + ')', 1000);
            // console.log(time_again);
        }

    }

    timer(<?php echo $total_time; ?>);
</script>
</script>
</script>