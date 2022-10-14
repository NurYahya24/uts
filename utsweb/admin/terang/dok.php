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
        <link rel="stylesheet" href="post.css">
    </head>
    <body>
        <div class="konsult">
            <div class="inner">
                <h1>Konsultasi</h1>
                <div class="border"></div>

                <div class="baris">
                    <div class="kolom">
                        <div class="konsul">
                            <img src="<?php echo $_POST["img"]; ?>" alt="">
                            <div class="name"><?php echo $_POST["nama"]; ?><br><h6><?php echo $_POST["nip"]; ?><br><?php echo $_POST["spesialis"]; ?></h6>
                            </div>
                            
                            <p>
                            <?php echo $_POST["alamat"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php

include "foot.php";

?>