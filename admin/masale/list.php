<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mã giảm giá</title>
</head>
<body>
    <div id="discount-code">
        <!-- Hiển thị mã giảm giá ở đây -->
        Mã giảm giá: ABC123 (20% OFF)
    </div>

    <script>
        // Kiểm tra thời gian hết hạn của mã giảm giá
        const discountCode = document.getElementById('discount-code');

        // Thời gian hết hạn của mã giảm giá (điều chỉnh theo định dạng ngày tháng năm)
        const expirationDate = new Date('2023-12-31'); // Ví dụ: Ngày hết hạn là 31/12/2023

        // Lấy thời gian hiện tại
        const currentDate = new Date();

        // So sánh thời gian hiện tại với thời gian hết hạn của mã
        if (currentDate > expirationDate) {
            // Nếu thời gian hiện tại lớn hơn thời gian hết hạn, ẩn mã giảm giá đi
            discountCode.style.display = 'none';
        }
    </script>
</body>
</html>
