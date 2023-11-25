<br>
<br>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="form1">
        <form action="index.php?act=addimage" method="post" enctype="multipart/form-data" name="#">
            <!-- form add sản phẩm -->
            <h2>Thêm ảnh sản phẩm</h2>
            <table class="add">
                <td><select name="idpro">
                        <?php
                        foreach ($listsp as $sp) {
                            extract($sp);
                            echo '<option value="' . $id . '">' . $name . '</option>';
                        };
                        ?>

                    </select>
                </td>
                <tr>
                    <td>Ảnh 1</td>
                    <td><input type="file" name="img1" id=""></td>
                </tr>
                <tr>
                    <td>Ảnh 2</td>
                    <td><input type="file" name="img2" id=""></td>
                </tr>

            </table>

            <input class="sb" type="submit" name="addanh" value="Thêm"><br><br>
            <a href="index.php?act=listimg" style="margin-left: 210px; text-decoration: none;"> Danh Sách</a>
        </form>
    </div>

</body>

</html>