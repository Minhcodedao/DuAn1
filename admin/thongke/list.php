<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
      
            margin-top: 10px;
            width: 270px;
            height: 30px;
            background-color: #4CAF50;
            color: white;
            padding: 5px 15px;
            border: none;
            border-radius: 4px;
        }
        button a{
            text-decoration: none;
            color: white;
            font-size: larger;
        }
    </style>
</head>
<body>
    
    <div class="tb">
        <table border="1">
    
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Số lượng sản phẩm</th>
                <th>Giá sản phẩm thấp nhất</th>
                <th>Giá sản phẩm cao nhất</th>
            </tr>
            <?php
            $items = loadall_thongke_sanham_dm();
            $i = 1;
            foreach ($items as $item) {
                extract($item);
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $name ?></td>
                    <td><?= $soluong ?></td>
                    <td><?= number_format($min) ?> $</td>
    
                    <td><?= number_format($max) ?> $</td>
                </tr>
            <?php } ?>
    
    
                    <!-- link den bieudo  -->
        </table>
        <button> <a href="index.php?act=bdososp">Biểu đồ thông kê sản phẩm</a></button>
        <button> <a href="index.php?act=spbanchay">Thống kê sản phẩm bán chạy</a></button>
        <button> <a href="index.php?act=sptonkho">Thống kê sản phẩm bán tồn kho</a></button>
        <!-- doanh thu -->
        <button> <a href="index.php?act=doanhthu">Thống kê doanh thu</a></button>
    </div>
</body>
</html>
