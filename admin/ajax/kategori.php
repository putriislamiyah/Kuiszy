<?php
session_start();
require "../../koneksi.php";
if (!isset($_SESSION["login"])) {
    header("Location: " . base_url . "login.php");
    exit;
}
?>


<div class="row">
    <div class="flex-container">
        <div class="flex1">
            <a href="startindia.html">
                <h3 class="flexfont">Science</h3>
            </a>
        </div>
        <div class="flex1">
            <a href="startsci.html">
                <h3 class="flexfont">History</h3>
            </a>
        </div>
        <div class="flex1">
            <a href="startmovies.html">
                <h3 class="flexfont">Sport</h3>
            </a>
        </div>
        <div class="flex1">
            <a href="startmaths.html">
                <h3 class="flexfont">Technology</h3>
            </a>
        </div>
    </div>

</div>