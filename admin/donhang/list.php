<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    
    <div class="tb">
        <table border="1">
            <!-- bao gồm id id user idpro img name price soluong thanhtien idbill -->
            <tr>
                <th>ID</th>
                <th>ID User</th>
                <th>
                    ID Pro
                </th>
                <th>
                    Img
                </th>
                <th>
                    Name
                </th>
                <th>
                    Price
                </th>
                <th>
                    Số Lượng
                </th>
                <th>
                    Thành Tiền
                </th>
                <th>
                    ID Bill
                </th>
                <th>
                    Chức Năng
                </th>
            </tr>
            <?php
            foreach ($listdh as $donhang) {
                extract($donhang);
                $xoadh = "index.php?act=xoadh&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $hinh = "Không có ảnh";
                }
                
                echo '
                        <tr>
                        <td>' . $id . '</td>
                        <td>' . $iduser . '</td>
                        <td>' . $idpro . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $name . '</td>
                        <td>' . $price . '</td>
                        <td>' . $soluong . '</td>
                        <td>' . $thanhtien . '</td>
                        <td>' . $idbill . '</td>
                        <td>
                          <a href="' . $xoadh . '"><input  class="custom-icons3 type="button" value="Xóa"></a></td>
                    </tr>
                        ';
            }
            ?>
           
        </table>
    </div>
</body>
</html>