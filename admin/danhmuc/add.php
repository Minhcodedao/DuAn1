<br>
<br>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/sto.css">
    
</head>

<body>
    <div class="form1">
        <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
            <!-- form add sản phẩm -->
            <h2>Thêm Danh Mục</h2>
            <table class="add">
                <tr>
                    <td>ID</td>
                    <td><input type="text" value="AUTO" readonly></td>
                </tr>
                <tr>
                    <td>Tên Loại</td>
                    <br>
                    <td><input type="text" name="name" id=""></td>
                </tr>
            </table>
            <input class="sb" type="submit" name="themmoi" value="Thêm">


        </form>
        <div class="sc">
            <a href="index.php?act=listdm">Danh Sách</a>
        </div>
    </div>
    <?php
    if(isset($thongbao)){
        echo $thongbao;
    }

    ?>

</body>


</html>