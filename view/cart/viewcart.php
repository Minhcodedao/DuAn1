
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
                        if (empty($_SESSION['mycart'])) {
                            $dellall = "Bạn chưa thêm sản phẩm nào vào giỏ hàng";
                        } else {
                            $dellall = "<a href='index.php?act=delcart'><input type='button' value='XÓA GIỎ HÀNG'></a>";
                        }
                        foreach($_SESSION['mycart'] as $cart){
                            $hinh = $cart[3];
                            $ttien = $cart[4]*$cart[5];
                            $tong+=$ttien;
                            $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><button>Xóa</button></a>';
                            
                            if (strpos($cart[2], 'KC') !== false) {
                                $cl = "Kim Cương";
                            }elseif (strpos($cart[2], 'V') !== false) {
                                $cl = "Vàng";
                            }
                            elseif (strpos($cart[2], 'DM') !== false) {
                                $cl = "Đá Màu";
                            }
                            elseif (strpos($cart[2], 'NT') !== false) {
                                $cl = "Ngọc Trai";
                            }
                            elseif (strpos($cart[2], 'DH') !== false) {
                                $cl = "Hợp Kim";
                            }
                            
                            else {
                                // Xử lý khi không khớp với các quy tắc đã cho
                                $cl = "Không khớp quy luật";
                            }
                            echo'
                            <div class="spcart">
                                <div class="imgcart">
                                        <img src="'.$hinh.'" alt="">
                                    </div>
                                    <div class="ttcart">
                                        <h3>'.$cart[1].'</h3>
                                        <p>Mã sản phẩm: '.$cart[2].'</p>
                                        <?php $i=1 ?>
                                        <div class="counter">
                                            <label for=""><h4 style="margin-left: 0px;">Số lượng:</h4> </label>
                                            <span style="width: 20px;background-color: red;color: white; text-align: center; margin-left: 10px;" >'.$cart[5].'</span>
                                            <h4>Chất liệu:</h4><p>'.$cl.'</p>
                                            <h4>Giá tiền:</h4><p>$'.$cart[4].'</p>
                                        </div>
                                        <div class="price">
                                            <h4>Thành tiền: </h4><p>$'.$ttien.'</p>
                                        </div>
                                        <div class="btcart2">
                                            '.$xoasp.'
                                        </div>
                                        
                                    </div>
                                    
                                    
                                </div>';
                                $i+=1;
                        }
                    ?>
                    <div class="btc">
                        <?php echo $dellall ?>
                    </div>
                
            </div>
        </div>
        <div class="hoadon">
            <form action="index.php?act=bill" method="post">
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
                <a href="index.php?act=bill"><input type="submit" value="TIẾN HÀNH ĐẶT HÀNG"></a>
            </form>

            
        </div>
    </div>
</body>
</html>