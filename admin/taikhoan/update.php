<?php
if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $tk = loadone_taikhoan($_GET['id']);
    extract($tk);
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Form thêm tài khoản -->
    <div class="form1">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
            <h2>Sửa Tài Khoản</h2>
            <table class="add">
                <!-- Các trường nhập liệu -->
                <tr>
                   
                    <td><input type="hidden" name="id" id="" value="<?=$id?>"></td>
                <tr>
                    <td> User</td>
                    <td><input type="text" name="user" id="" value="<?=$user?>"></td>
                </tr>
                <tr>
                    <td> PassWord</td>
                    <td><input type="password" name="pass" id=""value="<?=$pass?>" ></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id=""value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td>Adress</td>
                    <td><input type="text" name="address" id=""value="<?=$address?>"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="tel" id=""value="<?=$tel?>"></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td><input type="text" name="role" id="" placeholder="0-user/1-admin"value="<?=$role?>"></td>
                </tr>
            </table>
            <br>

            <input class="sb" type="submit" name="updatetk" value="Update">
        </form>
        <a href="index.php?act=dstk"> Danh Sách</a>
    </div>
</body>

</html>
