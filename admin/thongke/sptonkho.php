
<div class="tb">
    <table border="1">
        
    <!-- function load_sptonkho(){
    $sql = "SELECT s.id,s.name,s.img FROM sanpham s WHERE NOT EXISTS ( SELECT 1 FROM cart c WHERE c.idpro = s.id)";
    return pdo_query($sql);
} -->
        <tr>
            <th>STT</th>
            <th> ID SẢN PHẨM</th>
            <th>ẢNH</th>
            <th>TÊN SẢN PHẨM</th>
            <th> GIÁ</th>
        </tr>
        <?php
        $listsptonkho = load_sptonkho();
        $i = 1;
        foreach (  $listsptonkho as   $listsptonkho) {
            extract( $listsptonkho);
            
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$id</td>";
            echo "<td><img src='../upload/$img' height='80'></td>";

          
            echo "<td>$name</td>";
            echo "<td>$price</td>";
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
</div>


