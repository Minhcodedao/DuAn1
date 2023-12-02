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
        <img src="./image/banner_dc.jpg" alt="">
    </div>
    <div class="menuclick">
        
        <div class="mot">
            <div><h3>SẢN PHẨM DÂY CHUYỀN</h3></div>
            <div class="sapxep">
                <label for="">Sắp xếp theo</label>
                <select name="sapxep" id="">
                    <option value="">Tất cả sản phẩm</option>
                    <option value="">Giá thấp đến cao</option>
                    <option value="">Giá cao đến thấp</option>
                </select>
            </div>
        </div>
        <hr class="mb">
        <div class="loc">
            <h4>Loại sản phẩm:</h4>
            <ul class="loc_sp">
                <li><a href="index.php?act=daychuyen&loai=DCV">Vàng</a></li>
                <li><a href="index.php?act=daychuyen&loai=DCKC">Kim Cương</a></li>
                <li><a href="index.php?act=daychuyen&loai=DCKC">Đá Màu</a></li>
             
            </ul>
        </div>
        <div class="menu_than">
        <?php
            if(isset($dc)){
                foreach($dc as $d){
                    extract($d);
                    $sale = $price*9/10;
                    $hinh =$img_path.$img;
                    $linksp = "index.php?act=sanphamct&idsp=".$id;    
                    echo'<div class="spnb2">
                        <a href="<?=$linksp?>"><img src="<?=$hinh?>" alt=""></a>
                        <div class="tt">
                            <h5><?= $name ?></h5>
                            
                            <p>Giá gốc: <del><?=$sale?></del></p>
                            <h3><?= $price?></h3>
                        </div>
                        <input type="button" value="Chi tiết">
                    </div> ';   
                }
            }
        ?>
        </div>
    </div>
</body>
</html>