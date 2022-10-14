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
        <script src="app.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bmi.css">
    </head>
    <body>
        <div class="container">
            <div class="tanya-box">
                <div class="left"></div>
                <div class="right" id="id1">
                    <h2>Kalkulator BMI</h2>
                    <form>
                    Tinggi Badan :<br><br>
                    <input type="text" class="field" id="tinggi" placeholder="dengan cm">
                    Berat Badan : <br><br>
                    <input type="text" class="field" id="berat" placeholder="dengan kg">
                    <input type="button" class="btn" id="btn" value="Hitung"><br><br>
                    <div id="hasil"></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
include "foot.php";

?>