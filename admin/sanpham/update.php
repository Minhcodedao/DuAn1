<!-- <?php
        if (is_array($sanpham)) {
            extract($sanpham);
        }
        $hinhpath = "../upload/" . $img;
        if (is_file($hinhpath)) {
            $hinh = "<img src='" . $hinhpath . "' height='80'>";
        } else {
            $hinh = "no photto";
        }
        ?> -->
<br>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form1 {
            width: 900px;
            height: 800px;
            margin-top: -23px;


        }

        .form1 h2 {
            text-align: center;
            font-size: 30px;
        }

        .form1 table {
            margin-top: 10px;
        }

        .add {
            margin-top: -50px;
        }

        .sb {
            margin-top: 30px;
            width: 300px;
            margin-left: 60px;
            background-color: #4CAF50;

        }
    </style>
</head>

<body>
    <div class="form1">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" name="#">
            <!-- form add sản phẩm -->
            <h2>Thêm sản phẩm</h2>
            <table class="add">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name="name" id="" value="<?php echo $name ?>"></td>
                </tr>
                <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" name="masp" id="" value="<?php echo $masp ?>"></td>
                </tr>
                <tr>
                    <td>Ảnh sản phẩm</td>
                    <td><input type="file" name="img" id="">
                        <?php echo $img ?>
                    </td>
                </tr>
                <tr>
                    <td>Loại sản phẩm</td>
                    <td><select name="iddm" id="">
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                if ($danhmuc['id'] == $danhmuc['name']) $s = "selected";
                                else $s = "";
                                echo '<option value="' . $danhmuc['id'] . '" ' . $s . '>' . $danhmuc['name'] . '</option>';
                            };
                            ?>

                        </select>
                </tr>
                <tr>
                    <td>Giá sản phẩm</td>
                    <td><input type="text" name="price" id="" value="<?php echo $price ?>"></td>
                </tr>
                <tr>
                    <td>Mô tả sản phẩm</td>
                    <td><textarea name="mota" id="" cols="30" rows="10"><?php echo $mota ?></textarea></td>
                </tr>
            </table>

            <input class="sb" type="submit" name="capnhap" value=" Cập Nhập">

        </form>
    </div>

</body>

</html>