<?php
    session_start();
    $idpro = $_REQUEST['idpro'];
    include "../model/binhluan.php";
    include "../model/pdo.php";

    if(isset($_SESSION['user'])){
        $u = $_SESSION['user']['user'];
        $m = $_SESSION['user']['email'];
        $t = $_SESSION['user']['tel'];
    }
    else{
        $u = "";
        $m = "";
        $t = "";
    }
    $dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <div class="textbl">
        <textarea name="noidung" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="ttbl">
        <input type="text" name="user" placeholder="Your name" value="<?= $u ?>"> 
        <input type="email" name="email" placeholder="Your Email" value="<?= $m ?>"><br>
        <input type="text" name="tel" placeholder="Your telephone" value="<?= $t ?>">
        <input type="hidden" name="idpro" value="<?= $idpro ?>">
        <input type="submit" name="guibl" value="GỬI ĐÁNH GIÁ">
        </div> 
    </form>
    <div class="ds" id="binhluan">
        <?php
            foreach($dsbl as $bl){
                extract($bl);
                echo '<img src="./image/ava-acckh.png" alt="">
                <h4>'.$iduser.'</h4>
                <p>'.$noidung.'</p>
                <p>'.$ngaybinhluan.'</p>';
            }
        ?>


    </div>
    <?php
    if(isset($_POST['guibl']) && ($_POST['guibl'])){
        $noidung= $_POST['noidung'];
        $iduser = $_SESSION['user']['id'];
        $idpro = $_POST['idpro'];
        $ngaybinhluan=date('h:i:sa d/m/Y');
        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }
    ?>
</body>
</html>