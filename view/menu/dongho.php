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
        <img src="./image/banner_dh.jpg" alt="">
    </div>
    <div class="menuclick">
        
        <div class="mot">
            <div><h3>SẢN PHẨM NHẪN</h3></div>
            <div class="sapxep">
                <form action="index.php?act=dongho" method="post">
                    <select name="sx" id="">
                        <option value="1">Tất cả sản phẩm</option>
                        <option value="2">Giá thấp đến cao</option>
                        <option value="3">Giá cao đến thấp</option>
                        <option value="4">Sản phẩm mới nhất</option>
                    </select>
                    <input type="submit" value="Sắp xếp">
                </form>
            </div>
        </div>
        <hr class="mb">
        <div class="loc">
            <h4>Loại sản phẩm:</h4>
            <ul class="loc_sp">
                <li><a href="index.php?act=dongho&loai=DHNA"><h5>Nam</h5></a></li>
                <li><a href="index.php?act=dongho&loai=DHNU"><h5>Nữ</h5></a></li>
            </ul>
        </div>
        <div class="menu_than">
            <?php
                foreach($dongho as $c){
                    extract($c);
                    $hinh =$img_path.$img;
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    echo '
                    <div class="spnb mb">
                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                        <div class="tt">
                            <h5>'.$name.'</h5>
                            
                            <p>Giá gốc: <del>$'.$price.'</del></p>
                            <h3>$'.$price*$sale.'</h3>
                        </div>
                        <div class="discount-corner"></div>
                        <a href="'.$linksp.'"><input type="button" value="Chi tiết"></a>
                        
                    </div>';
                }

            ?>
        </div>
    </div>
</body>
</html>