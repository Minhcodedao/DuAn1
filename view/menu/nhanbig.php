<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="banner mb">
        <img src="./image/banner-cat-nhan.jpg" alt="">
    </div>
    <div class="menuclick">
        
        <div class="mot">
            <div><h3>SẢN PHẨM NHẪN</h3></div>
            <div class="sapxep">
                <label for="">Sắp xếp theo</label>
                <select name="sapxep" id="">
                    <option value="1">Tất cả sản phẩm</option>
                    <option value="2">Giá thấp đến cao</option>
                    <option value="3">Giá cao đến thấp</option>
                </select>
            </div>
        </div>
        <hr class="mb">
        <div class="loc">
            <h4>Loại sản phẩm:</h4>
            <ul class="loc_sp">
                <li><a href="index.php?act=nhan&loai=NV"><h5>Vàng</h5></a></li>
                <li><a href="index.php?act=nhan&loai=NKC"><h5>Kim Cương</h5></a></li>
                <li><a href="index.php?act=nhan&loai=NDM"><h5>Đá Màu</h5></a></li>
            </ul>
        </div>
        <div class="menu_than">
            <?php foreach($dc as $d): ?>
                <?php
                    extract($d);
                    $sale = $price*9/10;
                    $hinh =$img_path.$img;
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                ?>     
                    <div class="spnb2">
                        <a href="<?=$linksp?>"><img src="<?=$hinh?>" alt=""></a>
                        <div class="tt">
                            <h5><?= $name ?></h5>
                            
                            <p>Giá gốc: <del><?=$sale?></del></p>
                            <h3><?= $price?></h3>
                        </div>
                        <input type="button" value="Chi tiết">
                    </div>    
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>