<?php

session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
    if($_SESSION['username']=="admin"){

    }
    elseif($_SESSION['username']=="user"){
        header("Location: ../../user/terang/index.php");
    }
}

if(!isset($_SESSION['username'])){
    header("Location: ../../index.php");
}


    include'head.php';


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="input_dok.css">
    </head>
    <body>
        <div class="container">
            <div class="tanya-box">
                <div class="left"></div>
                <div class="right" id="id1">
                    <h2>Input Data Dokter</h2>
                    <?php
                        if(isset($_POST['kirim'])){
                            $nama=$_POST["nama"];
                            $notp=$_POST["nip"];
                            $keluh=$_POST["spesialis"];
                            $jenkel=$_POST["alamat"];
                            $img=$_POST["img"];
                        }
                    ?>
                    <form action="dok.php" method="post">
                    <input type="text" class="field" name="nama" placeholder="Nama...">
                    <input type="text" class="field" name="nip" placeholder="NIP...">
                    <select class="field" name="spesialis">
                        <option value="0" name="spesialis">Jenis Spesialis...</option>
                        <option value="Umum" name="jenkel">Umum</option>
                        <option value="Penyakit Dalam" name="jenkel">Penyakit Dalam</option>
                        <option value="THT" name="jenkel">THT</option>
                        <option value="Kulit dan Kelamin" name="jenkel">Kulit dan Kelamin</option>
                        <option value="Anak" name="jenkel">Anak</option>
                    </select>
                    <textarea class="field area" name="alamat" placeholder="Alamat..."></textarea>
                    <label for="img">Foto :</label>
                    <input type="file" class="field" name="img" accept="image/*">
                    <button class="btn" value="kirim" name="kirim">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php

    include'foot.php';


?>