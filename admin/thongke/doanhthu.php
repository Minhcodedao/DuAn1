<div class="tb">
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Ngày</th>
            <th>Doanh thu</th>
        </tr>
        <?php
        $items = load_doanhthu();
        $i = 1;
        $totalRevenue = 0; // Initialize total revenue variable
        foreach ($items as $item) {
            extract($item);
            $totalRevenue += $doanhthu; // Accumulate total revenue
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $ngaydathang ?></td>
                <td><?= $doanhthu ?></td>
            </tr>
        <?php } ?>
        <!-- Total revenue row -->
        <tr style="color: red;font-size :larger;font-weight:bolder">
            <td colspan="2">Tổng doanh thu</td>
            <td><?= $totalRevenue ?> VND</td>
        </tr>
    </table>
    <button><a href="index.php?act=bdososp">Biểu đồ thông kê sản phẩm</a></button>
    <button><a href="index.php?act=spbanchay">Thống kê sản phẩm bán chạy</a></button>
    <button><a href="index.php?act=sptonkho">Thống kê sản phẩm bán tồn kho</a></button>
    <!-- doanh thu -->
    <button><a href="index.php?act=doanhthu">Thống kê doanh thu</a></button>
</div>
