<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Container for buyer information and order details */
        .tong {
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            display: flex;

        }

        .infhb {
            max-width: 50%;
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
            max-width: 45%;
            margin: 20px auto;
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
            height: 600px;
        }

        .cartrght p {
            font-size: 18px;
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




        .dat-mua-button:hover {
            background-color: #45a049;
            /* Darker green color on hover */
        }
    </style>
</head>

<body>
    <div class="tong">

        <div class="infhb">
            <div class="title-h2">
                <h2>Thông tin người mua</h2>
            </div>

            <div class="formw-inf">
                <div class="form-group">
                    <label class="f-fulname" required>HỌ TÊN </label>
                    <input type="text" class="fullname" name="fullname" id="fullnamepayment" value="">
                </div>
                <div class="form-group">
                    <label for="paymentmobile">ĐIỆN THOẠI</label>
                    <input type="text" class="number" name="paymentmobile" id="paymentmobile">
                </div>
                <div class="form-group">
                    <label for="paymentemail">EMAIL</label>
                    <input type="text" name="paymentemail" id="paymentemail" value="">
                </div>
                <div class="form-group">
                    <label for="dateofbirth">NGÀY SINH</label>
                    <input type="text" name="dateofbirth" id="dateofbirth" autocomplete="off" value="">
                </div>
                <br>
                <br>
            </div>

            <div class="title-h2">
                <h2> Chọn Địa Chỉ Giao Hàng </h2>
            </div>
            <div class="formw-inf">
                <div class="form-group">
                    <label class="adrees" required > Địa Chỉ </label>
                    <input type="text" class="adrees" name="adress" id="fullnamepayment" placeholder="Địa chỉ cụ thể/Xã/Huyện/Tỉnh">
                </div>

            </div>

            <br>
            <br>
            <div class="payment-method">
                <h2> Hình Thức Thanh Toán </h2>

                <div class="payment-options">
                    <div class="payment-option">
                        <input type="radio" id="creditCard" name="paymentMethod" value="creditCard">
                        <label for="creditCard">Thẻ tín dụng</label>
                    </div>

                    <div class="payment-option">
                        <input type="radio" id="bankTransfer" name="paymentMethod" value="bankTransfer">
                        <label for="bankTransfer">Chuyển khoản ngân hàng</label>
                    </div>

                    <div class="payment-option">
                        <input type="radio" id="cashOnDelivery" name="paymentMethod" value="cashOnDelivery">
                        <label for="cashOnDelivery">Thanh toán khi nhận hàng</label>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <button class="dat-mua-button">Đặt Mua</button>
            </div>


        </div>
        <div class="cart-rghta">
            <div class="cartrght">
                <p>Thông tin đơn hàng</p>
                <div class="lstitmnr">
                    <div class="_itmnr">
                        <div class="img-itmnr">
                            <!-- anhsp -->
                            <a target="_blank" href="" title="Hoa tai 14K AFEK000689F3CZ1">
                                <img alt="#" src="./image/daychuyen5.png">
                            </a>
                        </div>
                        <div class="txt-itmnr">
                            <p> Hoa tai 14K AFEK000689F3CZ1 </p>
                            <p class="id-itpicked">MSP : AFEK000689F3CZ1</p>
                            <p class="notesl">Số lượng:<span>1</span></p>

                        </div>

                    </div>
                </div>
                <div class="lsttttrans">
                    <div id="VoucherApplyHtml">
                        <div class="it-cartr">
                            <p>Tạm tính:</p>
                            <p>6,630,000đ</p>
                        </div>
                        <div class="it-cartr">
                            <p>Giảm giá:</p>
                            <p>Liên hệ</p>
                        </div>
                        <div class="it-cartr">
                            <p>Vận chuyển:</p>
                            <p>Miễn phí vận chuyển</p>
                        </div>
                        <div class="it-cartr">
                            <p>Thành tiền:<span>(Đã bao gồm VAT)</span></p>
                            <p>6,630,000đ</p>
                        </div>
                    </div>
                    <div class="it-cartr frm-vou">
                        <p>Mã giảm giá/Quà tặng</p>

                        <div class="form-group">
                            <input type="text" id="VorcherCode" class="valid">
                            <button id="VorcherCodeSubmit" data-allow="0" type="button">Áp dụng</button>
                        </div>
                        <div id="VoucherCodeCheck"></div>
                    </div>
                </div>
            </div>

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

            <span style="display:none;">QuyTrinhVanChuyen</span>

        </div>
    </div>



</body>

</html>