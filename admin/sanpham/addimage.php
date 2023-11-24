<br>
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

            <input class="sb" type="submit" name="addanh" value="Thêm">
            <a href="index.php?act=listsp"> Danh Sách</a>
        </form>
    </div>

</body>

</html>