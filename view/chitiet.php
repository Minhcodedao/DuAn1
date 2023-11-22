<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
  <body>
    <div class="container">
      <?php 
        extract($onesp);
        $img=$img_path.$img;
      ?>
      <div class="chitiet">
        <div class="ct_img">
          <div class="khung">
            <img src="<?= $img ?>" alt="">
          </div>
          <div class="more">
            <div class="more_img">
              <img src="../image/daychuyen1.png" alt="">
            </div>
            <div class="more_img">
              <img src="../image/daychuyen2.png" alt="">
            </div>
            <div class="more_img">
              <img src="../image/daychuyen2.png" alt="">
            </div>
          </div>
        </div>
        <div class="ct_tt">
          <div class="ct_text">
            <h3><?= $name ?></h3>
            <p>MÃ SẢN PHẨM: AFRB002360D3DA1</p>
            <h2 class="gia"><?= $price ?></h2>
            <p>*Giá có thể thay đổi tùy thuộc vào kích thước và trọng lượng thực tế của sản phẩm.Vui lòng gọi 1800 1168 để được hỗ trợ.</p>
            <p class="mb">Mô tả: <?= $mota ?></p>


            <hr class="mb">
            <div class="ct_button">
              <button class="buynow">Mua Ngay</button>
              <button class="addtocart">Thêm Vào Giỏ Hàng</button>
            </div>
            <div class="chat">
              <img src="./image/icon-chat-voi-tu-van-vien.png" alt="">
              <h3>Liên Hệ Với Tư Vấn Viên</h3>
            </div>
          </div>
          
        </div>
        <hr>
      </div>
      <hr style="width: 80%; margin: 0 auto; margin-top: 30px;">
      <div class="camket">
        <div class="ck_left">
          <div class="candong">
            <img src="./image/icv-titleh3.png" style="height: 50px; width: 50px;">
            <h3>CAM KẾT CHẤT LƯỢNG</h3>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Thương hiệu trang sức cưới thuộc Tập đoàn Vàng bạc đá quý DOJI</p>
          </div>
          <div class="candong" style="margin-bottom: 25px;">
            <img src="./image/icon_tix.png" alt="">
            <p>100% Chuẩn xác về hàm lượng. Tất cả các sản phẩm trang sức được kiểm định chặt chẽ với máy quang phổ, cam kết chuẩn xác hàm lượng.</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>100% chuẩn xác về trọng lượng.</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Mọi sản phẩm trang sức bán ra đều có hóa đơn, đầy đủ thông tin về hàm lượng, trọng lượng và điều kiện bảo hành.</p>
          </div>
        </div>
        <div class="ck_right">
          <div class="candong">
            <img src="./image/icvtitlth3.png" style="height: 50px; width: 50px;">
            <h3>HƯỚNG DẪN MUA HÀNG ONLINE</h3>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Lựa chọn sản phẩm tại các chuyên mục trên website</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Thêm vào giỏ hàng.</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Kiểm tra thông tin đơn hàng và đặt hàng</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Kiểm tra và xác nhận đơn hàng</p>
          </div>
        </div>
      </div>
      <div class="article">
            <h2>SẢN PHẨM CÙNG LOẠI</h2>
            <hr class="mb">
            <div class="sp">
                <?php
                    foreach($dstop5 as $sp){
                        extract($sp);
                        $hinh =$img_path.$img;
                        $sale = $price*11/10;
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '
                        <div class="spnb mb">
                            <a href="'.$linksp.'">
                                <img src="'.$hinh.'" alt="">
                                
                            </a>
                            <div class="tt">
                                <h5>'.$name.'</h5>
                                <p>'.$mota.'</p>
                                <p>Giá gốc: <del>'.$sale.'</del></p>
                                <h3>'.$price.'</h3>
                            </div>
                        </div>';
                    }
                ?>
            </div>
            <img src="../image/a4.png" alt="">
            <img src="" alt="">
            <div class="sp">
                <?php
                    foreach($dstop10 as $sp){
                        extract($sp);
                        $hinh =$img_path.$img;
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '
                        <div class="spnb mb">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            <div class="tt">
                                <h5>'.$name.'</h5>
                                <p>'.$mota.'</p>
                                <p>Giá gốc: <del>'.$sale.'</del></p>
                                <h3>'.$price.'</h3>
                            </div>
                        </div>';
                    }
                ?>    
            </div>
            <a href="#" class="btn mb">Xem thêm</a>
      </div>
    </div>
  </body>
</html>