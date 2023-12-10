<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tin Tức Trang Sức</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        section {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 20px;
        }

        article {
            width: 30%;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        article:hover {
            transform: scale(1.05);
        }

        article img {
            max-width: 100%;
            height: 230px;
            margin-top: 20px;
            margin-left: 70px;
        }

        article h2,
        article p {
            text-align: center;
            margin: 20px 0;
        }

        article a {
            display: block;
            text-align: center;
            text-decoration: none;
            color: #333;
            background-color: red;
            border: 2px solid red;
            border-radius: 5px;
            padding: 10px;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        article a:hover {
            background-color: whitesmoke;
            color: #ffd700;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tin Tức Trang Sức</h1>
    </header>

    <section>
        <article>
            <h2>Bộ Sưu Tập Mới Nhất</h2>
            <img src="./upload/nhandamau4.png" alt="Trang sức 1">
            <p>Nhẫn không chỉ là biểu tượng của sự kết hợp giữa hai tâm hồn mà còn là một phần quan trọng của thế giới thời trang. Những chiếc nhẫn được làm từ vàng, bạc, hoặc thậm chí là kim cương, đều là những tác phẩm nghệ thuật tinh tế. Nhẫn không chỉ là một biểu tượng tình yêu mà còn là sự tỏa sáng của sự sang trọng và phong cách.</p>
            <a href="index.php?act=nhan">Xem Chi Tiết</a>
        </article>

        <article>
            <h2>Khuyến Mãi Đặc Biệt</h2>
            <img src="./image/sale.jpg" alt="Trang sức 2">
            <p>
                Khám Phá Thế Giới Trang Sức Tại 6 Diamond - Làm Nổi Bật Vẻ Đẹp Của Bạn!

                Chào mừng bạn đến với 6 Diamond  , điểm đến của những tác phẩm trang sức đẳng cấp và sang trọng. Tại đây, chúng tôi tự hào giới thiệu bộ sưu tập đa dạng với những mẫu nhẫn, dây chuyền, bông tai, và vòng cổ tinh tế, chất lượng hàng đầu.
                <br>
                Nhân dịp tháng 12, chúng tôi mang đến ưu đãi đặc biệt cho quý khách hàng. Sử dụng mã giảm giá <strong>CHAOTHANG12</strong>  khi thanh toán để nhận ngay 10% giảm giá trên đơn hàng của bạn. Hãy là người đầu tiên khám phá bộ sưu tập mới và chọn lựa những món trang sức tinh tế để tôn lên vẻ đẹp của bạn!
            </p>
            <a href="index.php?act=dongho">Xem Chi Tiết</a>
        </article>

        <article>
            <h2>Trang Sức Độc Đáo</h2>
            <img src="./image/daychuyendamau3.jpg" alt="Trang sức 3">
            <p>Dây chuyền không chỉ là phụ kiện trang sức mà còn là điểm nhấn tinh tế cho vẻ ngoại hình. Từ dây chuyền dài với các hạt độc đáo đến chuỗi ngọc lấp lánh, mỗi chiếc dây chuyền đều có thể làm tăng thêm sự quyến rũ cho bất kỳ bộ trang phục nào. Ngoài ra, dây chuyền còn là biểu tượng của sự may mắn và bảo vệ trong nhiều nền văn hóa trên thế giới.</p>
            <a href="index.php?act=daychuyen">Xem Chi Tiết</a>
        </article>
    </section>
</body>

</html>