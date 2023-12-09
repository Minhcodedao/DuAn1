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
            <img src="./upload/donghonam2.jpg" alt="Trang sức 2">
            <p>Đồng hồ không chỉ là công cụ đo giờ mà còn là biểu tượng của sự quyến rũ và lịch lãm. Thị trường đồng hồ đang ngày càng đa dạng với nhiều thương hiệu nổi tiếng giới thiệu những mẫu thiết kế độc đáo. Từ đồng hồ cơ cấp cao với cơ chế phức tạp đến đồng hồ thông minh kết nối với điện thoại di động, người ta có nhiều lựa chọn để thể hiện cái tôi của mình.</p>
            <a href="index.php?act=dongho">Xem Chi Tiết</a>
        </article>

        <article>
            <h2>Trang Sức Độc Đáo</h2>
            <img src="./upload/daychuyen5.png" alt="Trang sức 3">
            <p>Dây chuyền không chỉ là phụ kiện trang sức mà còn là điểm nhấn tinh tế cho vẻ ngoại hình. Từ dây chuyền dài với các hạt độc đáo đến chuỗi ngọc lấp lánh, mỗi chiếc dây chuyền đều có thể làm tăng thêm sự quyến rũ cho bất kỳ bộ trang phục nào. Ngoài ra, dây chuyền còn là biểu tượng của sự may mắn và bảo vệ trong nhiều nền văn hóa trên thế giới.</p>
            <a href="index.php?act=daychuyen">Xem Chi Tiết</a>
        </article>
    </section>
</body>

</html>
