<?php
    if (is_array($qlimg)) {
        extract($qlimg);
    }
    $hinhpath1 = "../upload/" . $image1;
    $hinhpath2 = "../upload/" . $image2;
    if (is_file($hinhpath1)) {
        $hinh1 = "<img src='" . $hinhpath1 . "' height='80'>";
        
    } else {
        $hinh1 = "no photto";
    }
    if (is_file($hinhpath2)) {
        $hinh2 = "<img src='" . $hinhpath2 . "' height='80'>";
        
    } else {
        $hinh2 = "no photto";
    }
?>
<body>
    <div class="form1" style="margin-top: 60px; width: 70%; margin-left: 15%;" >
        <form action="index.php?act=updateimg" method="post" enctype="multipart/form-data">
            <!-- form add sản phẩm -->
            <h2>Sửa Danh Mục</h2>
            <table class="add">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <tr>
                    <td>IMAGE 1</td>
                    <td><input type="file" name="image1" id=""></td>
                    <td><?php echo $hinh1 ?></td>
                </tr>
                <tr>
                    <td>IMAGE 2</td>
                    <td><input type="file" name="image2" id=""></td>
                    <td><?php echo $hinh2 ?></td>
                </tr>

            </table>
            <input class="sb" type="submit" name="suaanh" value="Cập nhật">
        </form>
    </div>

</body>