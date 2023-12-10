<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    
    <div class="tb">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nội Dung</th>
                <th>
                    ID User
                </th>
    
                <th>
                    ID Pro
                </th>
                <th>
                    Ngày Bình Luận
                </th>
                <th>
                    Chức Năng
                </th>
            </tr>
            <?php
            foreach ($listbl as $binhluan) {
                extract($binhluan);
    
                $xoabl = "index.php?act=xoabl&id=" . $id;
                echo '
                        <tr>
                        <td>' . $id . '</td>
                        <td>' . $noidung . '</td>
                        <td>' . $iduser . '</td>
                        <td>' . $idpro . '</td>
                        <td>' . $ngaybinhluan . '</td>
                        <td>
                          <a href="'.$xoabl.'"><input  class="custom-icons3 type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa tài khoản không?\');"></a></td>
                    </tr>
                        ';
            }
            ?>
    
        </table>
    </div>
</body>
</html>