<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Container for buyer information and order details */
        .tong {
            margin: 0 auto;
            background-color: #f9f9f9;
            display: flex;

        }

        .infhb {
            max-width: 40%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .title-h2 {
            margin-bottom: 40px;
            font-size: 24px;
            color: #333;
        }

        .formw-inf {
            display: grid;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .formw-inf label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            width: 100px;
            /* Set a common width for all labels, adjust as needed */
        }

        /* Style for input fields */
        .formw-inf input {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #f9f9f9;
            border-bottom: 1px solid grey;

        }

        .form-group:hover input {
            display: block;
            background-color: #f9f9f9;
        }


        /* Cart details */
        .cart-rghta {
            max-width: 60%;
            margin: 10px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Buyer information */
        .title-h2 {
            margin-bottom: 20px;
            border-bottom: 2px solid red;
            margin-bottom: 20px;
        }


        .formw-inf {
            display: grid;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }



        /* Cart details */
        .cart-rghta {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .cartrght p {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .cartrght>p {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            border-bottom: 2px solid red;
        }

        .lstitmnr {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        ._itmnr {
            display: grid;
            grid-template-columns: 100px 1fr 150px;
            gap: 10px;
        }

        .img-itmnr img {
            max-width: 100%;
            height: auto;
        }

        .txt-itmnr {
            max-width: 100%;
        }

        .almoney {
            text-align: right;
        }

        /* Order summary and support */
        .lsttttrans,
        .lst-support {
            border-top: 1px solid #ddd;
            padding-top: 15px;
            margin-top: 15px;
            font-size: 0.9vw;
        }

        .it-cartr {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .frm-vou {
            margin-top: 15px;
        }

        .form-group {
            display: flex;
        }

        #VorcherCode {
            flex: 1;
            padding: 8px;
            box-sizing: border-box;
        }

        #VorcherCodeSubmit {
            padding: 8px 15px;
            margin-left: 10px;
        }

        /* Support section */
        .supprt {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .img-supprt {
            margin-right: 10px;
        }

        /* Hide unnecessary span */
        span[style="display:none;"] {
            display: none !important;
        }

        #VorcherCodeSubmit {
            background-color: red;
            color: white;
            border: none;

        }

        .payment-method {
            max-width: 100%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .payment-method h2 {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            border-bottom: 2px solid red;
        }

        /* Style for payment options */
        .payment-options {
            display: grid;
            gap: 20px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .payment-option input {
            margin-right: 10px;
        }

        .payment-option label {
            font-weight: bold;
        }

        .dat-mua-button {
            padding: 15px 30px;
            width: 100%;
            font-size: 18px;
            background-color: red;
            /* Green color, you can change it */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

 /* CSS cua dat */
 .spcart{
    width: 100%;
    background-color: #f9f9f9;
    margin: 0 auto;
    height: 155px;
    display: flex;
    font-size: 0.9vw;
}
.imgcart{
    margin-top: 0px;
    width: 27%;
    background-color: #f9f9f9;
}
.imgcart img{
    width: 120px;
    width: 120px;
    border: 1px solid #717171;
    margin-left: 0px;
}
.ttcart{
    margin-top: 0px;
    margin-left: 30px;
    width: 73%;
    background-color: #f9f9f9;
}
.ttcart span{
    border-radius: 5px;
}
.price{
    width: 100%;
    display: flex;
}
.counter{
    display: flex;
    width: 100%;
    align-items: center;
    margin: 5px 0;

}
.counter h4{
    margin-left: 40px;
    margin-top: 0px;
}
.counter p{
    margin-left: 40px;
    margin-top: 0px;
}
/* ok */

.masp p{
    font-size: 0.5vw;
}

.dat_hang {
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: red;
    display: flex;
    justify-content: center;
}
.dat_hang input{
    width: 200px;
    height: 50px;
    background-color: red;
    color: white;
    border: none;
}

    </style>
</head>

<body>
    <div class="tong">
    <div class="tbao">
            <?php
            if(isset($thongbaomh)){
                echo $thongbaomh;
            }
            ?>
            <?php
            $giam =0;
            if(isset($sale)){
                foreach($listma as $ma){
                    if($sale === $ma['noidung']){
                        $giam = $ma['sale'];
                    }
                }
            }
            else{
                $giam = 0;
            }
            
            
            ?>

        </div>

        <div class="infhb">
            <div class="title-h2">
                <h2>Thông tin người mua</h2>
            </div>
            <?php
                if(isset($_SESSION['user'])){
                    $name = $_SESSION['user']['user'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                }else{
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }



            ?>

            <form action="index.php?act=billconfirm" method="post">
                <div class="formw-inf">
                    <div class="form-group">
                        <label class="f-fulname" required>HỌ TÊN </label>
                        <input type="text" class="fullname" name="name" value="<?= $name ?>">
                    </div>
                    <div class="form-group">
                        <label for="paymentmobile">ĐIỆN THOẠI</label>
                        <input type="text" class="number" name="tel" value="<?= $tel ?>">
                    </div>
                    <div class="form-group">
                        <label for="paymentemail">EMAIL</label>
                        <input type="text" name="email" value="<?= $email ?>">
                    </div>
                    <br>
                    <br>
                </div>

                <div class="title-h2">
                    <h2>Địa Chỉ Giao Hàng</h2>
                </div>
                <div class="formw-inf">
                    <div class="form-group">
                        <label class="adrees" required > Địa Chỉ </label>
                        <input type="text" name="address" value="<?= $address ?>">
                    </div>

                </div>
            

                <br>
                <br>
                <div class="payment-method">
                    <h2> Hình Thức Thanh Toán </h2>
                    <div class="payment-options">
                        <div class="payment-option">
                            <input type="radio" id="creditCard" name="pttt" value="1">
                            <label>Thẻ tín dụng</label>
                        </div>

                        <div class="payment-option">
                            <input type="radio" id="bankTransfer" name="pttt" value="2">
                            <label>Chuyển khoản ngân hàng</label>
                        </div>

                        <div class="payment-option">
                            <input type="radio" id="cashOnDelivery" name="pttt" value="3">
                            <label>Thanh toán khi nhận hàng</label>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 20px;" class="dat_hang">
                    <a href="index.php?act=billconfirm"><input type="submit" name="dongydathang" value="ĐẶT MUA"></a>
                </div>
            


        </div>
        <div class="cart-rghta">
            <div class="cartrght">
                <p>Thông tin đơn hàng</p>
                <div class="lstitmnr">
                <?php
                    $tong = 0;
                    $i=0;
                    foreach($_SESSION['mycart'] as $cart){
                        $hinh = $cart[3];
                        $ttien = $cart[4]*$cart[5];
                        $tong+=$ttien;

                        echo'
                        <div class="spcart">
                            <div class="imgcart">
                                    <img src="'.$hinh.'" alt="">
                                </div>
                                <div class="ttcart">
                                    <h3>'.$cart[1].'</h3>
                                    <div class="maspc">
                                        <p>Mã sản phẩm: '.$cart[2].'</p>
                                    </div>
                                    <?php $i=1 ?>
                                    <div class="counter">
                                        <label for=""><h4 style="margin-left: 0px;">Số lượng:</h4> </label>
                                        <span style="width: 20px;background-color: red;color: white; text-align: center; margin-left: 10px;" >'.$cart[5].'</span>
                                        <p>Chất liệu : Vàng</p>
                                    </div>
                                    
                                    <h4 style="color:red">Giá tiền:$'.$cart[4].' </h4>
                                </div>
                                
                                
                            </div>';
                            $i+=1;
                    }
                    
                ?>
                <?php
                    $thanhtien = $tong-($tong*($giam/100));
                ?>
                    <input type="hidden" name="tongdonhang" value="<?= $thanhtien ?>">
                </div>
                <div class="lsttttrans">
                    <div id="VoucherApplyHtml" style="font-size: 0.8vw;">
                        <div class="it-cartr">
                            <p>Tạm tính:</p>
                            <p>$<?= $tong ?></p>
                        </div>
                        <div class="it-cartr">
                            <p>Giảm giá:</p>
                            <p>Không</p>
                        </div>
                        <div class="it-cartr">
                            <p>Vận chuyển:</p>
                            <p>Miễn phí vận chuyển</p>
                        </div>
                        
                    </div>
                    <div class="it-cartr frm-vou">
                        <p>Mã giảm giá/Quà tặng</p>
                        <?php
                            
                            echo '-'.$giam.'%';

                        ?>
                    </div>
                    <div class="it-cartr">
                             
                            <p>Thành tiền:<span>(Đã bao gồm VAT)</span></p>
                            <p>$<?= $thanhtien ?></p>
                        </div>
                </div>
            </div>
</form>
            <div class="lst-support">
                <div class="supprt">
                    <div class="img-supprt">
                        <img src="./image/a1.png" alt="">
                    </div>
                    <div class="txt-supprt">
                        <p>Miễn phí giao hàng</p>
                    </div>
                </div>
                <div class="supprt">
                    <div class="img-supprt">
                        <img src="./image/a1.png" alt="">
                    </div>
                    <div class="txt-supprt">
                        <p>Bảo hành, làm sạch miễn phí</p>
                    </div>
                </div>
            </div>

        </div>
    </div>



</body>

</html>