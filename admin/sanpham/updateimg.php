<?php
    if (is_array($img)) {
        extract($img);
    }
    $hinhpath = "../upload/" . $img;
    if (is_file($hinhpath)) {
        $hinh = "<img src='" . $hinhpath . "' height='80'>";
    } else {
        $hinh = "no photto";
    }
?>
<body>
    <div class="form1">
        <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data" name="#">
            <!-- form add sản phẩm -->
            <h2>Sửa Danh Mục</h2>
            <table class="add">
                <input type="hidden" name="image1" value="<?php echo $image1 ?>">
                <tr>
                    <td>IMAGE 1</td>
                    <td><input type="file" name="image1" id=""><?php echo $image1 ?></td>
                </tr>

            </table>
            <input class="sb" type="submit" name="capnhap" value="Thêm">



        </form>
        <div class="sc">

            <a href="index.php?act=listsp"> Danh Sách</a>
        </div>
    </div>

</body>