<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Form thêm tài khoản -->
    <div class="form1">
        <form action="index.php?act=addtk" method="post" enctype="multipart/form-data">
            <h2>Thêm Tài Khoản</h2>
            <table class="add">
                <!-- Các trường nhập liệu -->
                <tr>
                    <td> Tên User</td>
                    <td><input type="text" name="user" id=""></td>
                </tr>
                <tr>
                    <td> PassWord</td>
                    <td><input type="password" name="pass" id=""></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" name="email" id=""></td>
                </tr>
                <tr>
                    <td>Adress</td>
                    <td><input type="text" name="address" id=""></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="tel" id=""></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td><input type="text" name="role" id="" placeholder="0-user/1-admin"></td>
                </tr>
            </table>
            <br>

            <input class="sb" type="submit" name="themmoitk" value="Thêm">
        </form>
        <a href="index.php?act=dstk"> Danh Sách</a>
    </div>
</body>

</html>
