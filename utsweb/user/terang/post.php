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
                            <img src="../../image/profile.png" alt="">
                            <div class="name"><?php echo $_POST["nama"]; ?><br><h6><?php echo $_POST["notp"]; ?><br><?php echo $_POST["jenkel"]; ?></h6>
                            </div>
                            
                            <p>
                            <?php echo $_POST["keluh"]; ?>
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