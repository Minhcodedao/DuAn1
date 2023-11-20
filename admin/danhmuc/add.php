
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
        .sb{
            margin-top: 30px;
            width: 300px;
            margin-left: 60px;
            background-color: #4CAF50;

        }
    </style>
</head>

<body>
    <div class="form1">
        <form action="index.php?act=adddm" method="post" enctype="multipart/form-data" >
            <!-- form add sản phẩm -->
            <h2>Thêm Danh Mục</h2>
            <table class="add">
                <tr>
                    <td>Tên Loại</td>
                    <br>
                    <td><input type="text" name="name" id=""></td>
                </tr>
            </table>

            <input class="sb" type="submit" name="themmoi" value="Thêm">
            <button>  <a  href="index.php?act=listdm">Danh Sách</a></button>
           

        </form>
    </div>

</body>

</html>