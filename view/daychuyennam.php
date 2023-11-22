<h2>Dây Chuyền Nam</h2>
<hr class="mb">

<div class="sp">
    <?php
    foreach ($listsanpham as $dcn) {
        extract($dcn);
        $hinh = $img_path . $img;
        $linksp = "index.php?act=sanphamct&idsp=" . $id;
        echo '
                        <div class="spnb mb">
                            <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                            <div class="tt">
                                <h5>' . $name . '</h5>
                                <h3>' . $price . ' VND</h3>
                            </div>
                        </div>';
    }

    ?>

</div>