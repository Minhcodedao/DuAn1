<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="row">
        <div class="cart mb">
            <div>
                <h3 style=" width: 200px;border-bottom: 2px solid red;">Giỏ hàng</h3>
                <hr>
            </div>
            <div class="btcart">
                <a href="index.php"><button>« Tiếp tục mua hàng</button></a>
                
                    <?php
                        $tong = 0;
                        $i=0;
                        foreach($_SESSION['mycart'] as $cart){
                            $hinh = $cart[3];
                            $ttien = $cart[4]*$cart[5];
                            $tong+=$ttien;
                            $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><button>Xoa</button></a>';

                            echo'
                            <div class="spcart">
                                <div class="imgcart">
                                        <img src="'.$hinh.'" alt="">
                                    </div>
                                    <div class="ttcart">
                                        <h3>'.$cart[1].'</h3>
                                        <p>'.$cart[2].'</p>
                                        <?php $i=1 ?>
                                        <div class="counter">
                                            <label for=""><h4 style="margin-left: 0px;">Số lượng:</h4> </label>
                                            <span style="width: 20px;background-color: red;color: white; text-align: center; margin-left: 10px;" >'.$cart[5].'</span>
                                            <h4>Chất liệu :</h4><p> Vàng</p>
                                            <p><h4>Giá tiền:</h4>'.$cart[4].'</p>
                                        </div>
                                        <div class="price">
                                            <p><h4>Thành tiền:</h4>'.$ttien.'</p>
                                        </div>
                                        <div class="btcart">
                                            '.$xoasp.'
                                        </div>
                                        
                                    </div>
                                    
                                    
                                </div>';
                                $i+=1;
                        }
                    ?>
                    <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
                    
                
            </div>
        </div>
        <div class="hoadon">
            <h4>Tổng tiền</h4>
            <div class="dong">
                <p>Tạm tính</p><h5><?= $tong ?></h5>
            </div>
            <hr>
            <div class="dong">
                <p>Vận chuyển</p><h5>Miễn phí vận chuyển</h5>
            </div>
            <p>Mã giảm giá/quà tặng</p>
            <input type="text" name="magg">
            <a href="index.php?act=bill"><input type="button" value="TIẾN HÀNH ĐẶT HÀNG"></a>

            
        </div>
    </div>
</body>
</html>