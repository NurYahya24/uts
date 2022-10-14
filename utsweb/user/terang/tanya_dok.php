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
        <link rel="stylesheet" href="tanya_dok.css">
    </head>
    <body>
        <div class="container">
            <div class="tanya-box">
                <div class="left"></div>
                <div class="right" id="id1">
                    <h2>Form Konsultasi</h2>
                    <?php
                        if(isset($_POST['kirim'])){
                            $nama=$_POST["nama"];
                            $notp=$_POST["notp"];
                            $keluh=$_POST["keluh"];
                            $jenkel=$_POST["jenkel"];
                        }
                    ?>
                    <form action="post.php" method="post">
                    <input type="text" class="field" name="nama" placeholder="Nama...">
                    <select class="field" name="jenkel">
                        <option value="0" name="jenkel">Jenis Kelamin...</option>
                        <option value="Laki-laki" name="jenkel">Laki-laki</option>
                        <option value="Perempuan" name="jenkel">Perempuan</option>
                    </select>
                    <input type="text" class="field" name="notp" placeholder="No. Telp...">
                    <textarea class="field area" name="keluh" placeholder="Keluhan..."></textarea>
                    <button class="btn" value="kirim" name="kirim">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
include "foot.php";

?>