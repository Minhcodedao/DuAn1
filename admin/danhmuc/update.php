<?php
  if(is_array($dm)){
    extract($dm);
  }
?>
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
        <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data" name="#">
            <!-- form add sản phẩm -->
            <h2>Thêm sản phẩm</h2>
            <table class="add">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name="name" id="" value="<?php echo $name ?>"></td>
                </tr>

            </table>
            <input class="sb" type="submit" name="capnhap" value="Thêm">



        </form>
        <a href="index.php?act=listsp"> Danh Sách</a>
    </div>

</body>

</html>