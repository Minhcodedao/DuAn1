<div class="tb">
    <table border="1">
        <tr>
            <th>ID Sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng đã mua</th>
        </tr>
        <?php
       $listspbc = loadall_spbc();
        foreach ($listspbc as $spbc) {

            echo "<tr>";
            echo "<td>" . $spbc['id'] . "</td>";
            echo "<td>" . $spbc['name'] . "</td>";
            echo "<td>" . $spbc['soluong_mua'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <button><a href="index.php?act=bdososp">Biểu đồ thông kê sản phẩm</a></button>
    <button><a href="index.php?act=spbanchay">Thống kê sản phẩm bán chạy</a></button>
</div>
