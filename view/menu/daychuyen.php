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
            <div><h3>SẢN PHẨM NHẪN</h3></div>
            <div class="sapxep">
                <form action="index.php?act=daychuyen" method="post">
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
                <li><a href="index.php?act=daychuyen&loai=DCNT"><h5>Ngọc Trai</h5></a></li>
                <li><a href="index.php?act=daychuyen&loai=DCKC"><h5>Kim Cương</h5></a></li>
                <li><a href="index.php?act=daychuyen&loai=DCDM"><h5>Đá Màu</h5></a></li>
            </ul>
        </div>
        <div class="menu_than">
            <?php
                foreach($dc as $c){
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