
<div class="tb">
    <table border="1">
        
        <!-- function load_top10_sanpham_banchay(){
        $sql=  " SELECT idpro,img,name, COUNT(idpro) AS total_quantity FROM cart GROUP BY idpro, img, name ORDER BY total_quantity DESC LIMIT 10";
        return pdo_query($sql);
            
        } từ đây viết cho in cho tôi các thôn tin ra
        -->
        <tr>
            <th>STT</th>
            <th> ID SẢN PHẨM</th>
            <th>ẢNH</th>
            <th>TÊN SẢN PHẨM</th>
            <th> SỐ LƯỚNG SẢN PHẨM ĐÃ BÁN</th>
        </tr>
        <?php
        $listspbc = load_top10_sanpham_banchay();
        $i = 1;
        foreach ($listspbc as $item) {
            extract($item);
            
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$idpro</td>";
            echo "<td><img src='./upload/$img' height='80'></td>";
            echo "<td>$name</td>";
            echo "<td>$total_quantity</td>";
            echo "</tr>";
            $i++;
        }
        ?>


       
    </table>
    <button> <a href="index.php?act=bdososp">Biểu đồ thông kê sản phẩm</a></button>
    <button> <a href="index.php?act=spbanchay">Thống kê sản phẩm bán chạy</a></button>
    <button> <a href="index.php?act=sptonkho">Thống kê sản phẩm bán tồn kho</a></button>
    <!-- doanh thu -->
    <button> <a href="index.php?act=doanhthu">Thống kê doanh thu</a></button>


