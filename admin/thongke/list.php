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
                <td><?= number_format($min) ?> VNĐ</td>

                <td><?= number_format($max) ?> VNĐ</td>
            </tr>
        <?php } ?>


                <!-- link den bieudo  -->
    </table>
    <button> <a href="index.php?act=bdososp">Biểu đồ thông kê sản phẩm</a></button>
</div>
