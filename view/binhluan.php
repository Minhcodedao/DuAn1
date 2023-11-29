<?php
    session_start();
    $idpro = $_REQUEST['idpro'];
    include "../model/binhluan.php";
    include "../model/pdo.php";
    include "../model/taikhoan.php";

    if(isset($_SESSION['user'])){
        $u = $_SESSION['user']['user'];
        $m = $_SESSION['user']['email'];
        $t = $_SESSION['user']['tel'];
        $ok = '';
        $bt= '<input type="submit" name="guibl" value="GỬI ĐÁNH GIÁ" readonly>';
    }
    else{
        $u = "";
        $m = "";
        $t = "";
        $ok = 'rows="10" placeholder="Bạn cần đăng nhập để thực hiện chức năng này" readonly';
        $bt = '<input type="hidden" name="guibl" value="GỬI ĐÁNH GIÁ">';
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
            <textarea name="noidung" id="" cols="30" <?= $ok ?> ></textarea>
        </div>
            <div class="ttbl">
            <input type="text" name="user" placeholder="Your name" value="<?= $u ?>" readonly> 
            <input type="email" name="email" placeholder="Your Email" value="<?= $m ?>" readonly><br>
            <input style="margin-top: 10px;" type="text" name="tel" placeholder="Your telephone" value="<?= $t ?>" readonly>
            <input type="hidden" name="idpro" value="<?= $idpro ?>">     
            <?php echo $bt ?>
        </div> 
        
    </form>
    
    <div class="scroll">
    <div class="ds" id="binhluan">
        <?php
            
            foreach($dsbl as $bl){
                extract($bl);
                $tk = loadone_taikhoan($iduser);
                echo '<div class="avt">
                        <img src="./image/ava-acckh.png" alt="">
                        <h4>'.$tk['user'].'</h4>
                    </div>
                    <p>'.$noidung.'</p>
                    <div  class="tg">
                        <p>'.$ngaybinhluan.'</p>
                    </div>';
            }
        ?>


    </div>
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