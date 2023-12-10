
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
            echo "<td><img src='.$img' height='80'></td>";
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
    <!-- Thư viện Chart.js từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="spbanchayChart" width="200" height="50"></canvas>
<script>
// Lấy dữ liệu từ PHP và chuyển đổi nó thành mảng JavaScript
var spbanchayData = <?php echo json_encode($listspbc); ?>;

// Lấy thẻ canvas
var spbanchayCtx = document.getElementById('spbanchayChart').getContext('2d');

// Tạo một mảng chứa tên sản phẩm và số lượng đã bán từ dữ liệu PHP
var spbanchayLabels = spbanchayData.map(function(item) {
    return item.name;
});

var spbanchayQuantities = spbanchayData.map(function(item) {
    return item.total_quantity;
});

// Tạo biểu đồ cột
var spbanchayChart = new Chart(spbanchayCtx, {
    type: 'bar',
    data: {
        labels: spbanchayLabels,
        datasets: [{
            label: 'Số lượng đã bán',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            data: spbanchayQuantities,
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                stepSize: 1, // Chỉ hiển thị số nguyên
            }
        }
    }
});
</script>




