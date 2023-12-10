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
<!-- Thư viện Chart.js từ CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="doanhthuChart" width="200" height="50"></canvas>
<script>
// Lấy dữ liệu từ PHP và chuyển đổi nó thành mảng JavaScript
var doanhThuData = <?php echo json_encode($items); ?>;

// Lấy thẻ canvas
var ctx = document.getElementById('doanhthuChart').getContext('2d');

// Tạo một mảng chứa ngày và doanh thu từ dữ liệu PHP
var labels = doanhThuData.map(function(item) {
    return item.ngaydathang;
});

var revenues = doanhThuData.map(function(item) {
    return item.doanhthu;
});

// Tạo biểu đồ
var doanhThuChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Doanh thu',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            data: revenues,
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
