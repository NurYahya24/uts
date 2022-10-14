<?php
    session_start();
    error_reporting(0);
    if(isset($_SESSION['username'])){
        if($_SESSION['username']=="user"){

        }
        elseif($_SESSION['username']=="admin"){
            header("Location: ../../admin/terang/index.php");
        }
    }


    if(!isset($_SESSION['username'])){
        header("Location: ../../index.php");
    }

    include "head.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css" id="modeGAYA">
    </head>
    <body>
        <div class="row">
            <div class="col-1">
                <h2>Tanya Dokter<br>Sekarang Juga</h2>
                <h3>Konsultasi lebih mudah lewat chat atau video call</h3><br><br>
                <div class="button">
                <a href="tanya_dok.php" class="btn">Tanyakan!</a>
                </div>
            </div>
            <div class="col-2">
                <img src="../../image/home.png" class="dokter">
            </div>
        </div>
    </body>
</html>

<?php
    include "foot.php";
?>

