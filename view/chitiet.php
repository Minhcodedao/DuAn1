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
      </div>
      <div class="camket">
        <div class="ck_left">
          <div class="candong">
            <img src="./image/icv-titleh3.png" alt="">
            <h3>CAM KẾT CHẤT LƯỢNG</h3>
            <h1>hehe</h1>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>