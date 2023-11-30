<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.footer {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-color: rgb(245, 245, 245);
            color: black;
            padding: 20px;
            line-height: 1.6;
        }
        .footer-section {
            width: 30%;
            padding: 20px;
        }
        .footer-section h2 {
            font-size: 18px;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
            margin-bottom: 15px;
            color: #f8d344;
        }
        .footer-section p, .footer-section ul, .footer-section a {
            font-size: 14px;
            line-height: 1.6;
        }
        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-section a {
            color: #000; /* Changed from #fff for visibility */
            text-decoration: none;
        }
        .footer-section a:hover {
            text-decoration: underline;
        }
        .img-logo-footer img {
            width: 100%;
            max-width: 200px;
            height: auto;
            margin-left: 0;
            opacity: 1;
        }
        .contact-section {
            width: 30%;
            padding: 20px;
            text-align: right;
        }
        .contact-section h2 {
            font-size: 18px;
            color: #f8d344;
            margin-bottom: 15px;
        }
        .contact-section p, .contact-section a {
            font-size: 14px;
            line-height: 1.6;
        }
        .contact-section a {
            margin-right: 10px;
        }
        .scroll-to-top {
    position: fixed;
    bottom: 200px;
    right: 20px;
    display: none;
    z-index: 99;
    width: 50px;
    height: 50px;
    background-color: #3366FF;
    border-radius: 50%;
    text-align: center;
    line-height: 50px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: background-color 0.3s;
}

.scroll-to-top:hover {
    background-color: #e6c200;
}

.scroll-to-top .arrow-up {
    display: inline-block;
    margin-left: -2.5px;
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 15px solid white;
}

/* Hiển thị nút cuộn lên */
.scroll-to-top.show {
    display: block;
}





    </style>
</head>
<body>
    <div class="footer">
    <div class="footer-section">
            <div class="img-logo-footer">
                <!-- Assuming you want to un-comment and use the logo -->
                <img class="img-lazyload" data-src="" alt="Logo Company" src="image/logo.png">
            </div>
            <p><b>6 Diamond</b> là cửa hàng trực tuyến chuyên cung cấp trang sức vàng và bạc, nơi người tiêu dùng có thể tìm thấy một loạt các sản phẩm trang sức từ nhẫn, vòng tay, dây chuyền, đến bông tai, được thiết kế với sự tinh tế và sang trọng</p>
        </div>
        <div class="footer-section">
            <h2>Thông tin liên hệ</h2>
            <p>© 2023 Công Ty Cổ Phần Vàng Bạc Đá Quý 6 Diamond </p>
            <p> Số 1 Trinh Văn Bô,Nam Từ Liêm, Hà Nội, <br>ĐT: 028 39951703 - Fax: 028 3995 1702</p>
            <p>
                <a href="https://www.facebook.com/"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a>
                <a href="https://www.instagram.com/"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"/></a>
                <a href="https://www.youtube.com/"><img src="https://img.icons8.com/color/48/000000/youtube-play.png"/></a>
                
            </p>
        </div>
        <div class="footer-section">
            <h2>Về 6 Diamond </h2>
            <ul>
                <li>Câu chuyện 6 Diamond </li>
                <li>Tuyển dụng</li>
                <li>Xuất khẩu</li>
                <li>Kinh Doanh nhỏ lẻ </li>
                <li> Kiểm định chất lượng </li>
                <li> Kinh doanh vàng miếng</li>
                

                
            </ul>
        </div>
        <div class="footer-section">
            <h2>Dịch vụ khách hàng</h2>
            <ul>
                <li>Hướng dẫn đo size trang sức</li>
                <li> Mua hàng trả góp</li>
                <li>Hướng dẫn mua hàng và thanh toán </li>
                <li>Chính sách mua hàng </li>
                <li>Chính sách hoàn tiền</li>
                <li>Chính sách thu đổi </li>
                <li>Chính sách cho khách hàng thân thiết </li>
                <li>Chính sách bảo mật thông tin người dùng </li>
                <li>Chính sách xử lí dữ liệu cá nhân  </li>

            </ul>
        </div>
        <a href="#" class="scroll-to-top" title="Cuộn lên đầu trang">
    <span class="arrow-up"></span>
</a>


  
<script>
function smoothScrollTo(endX, endY, duration) {
  const startX = window.scrollX || window.pageXOffset;
  const startY = window.scrollY || window.pageYOffset;
  const distanceX = endX - startX;
  const distanceY = endY - startY;
  const startTime = new Date().getTime();

  duration = typeof duration !== 'undefined' ? duration : 400;

  // Easing function
  const easeInOutQuart = (time, from, distance, duration) => {
    if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
    return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
  };

  const timer = setInterval(() => {
    const time = new Date().getTime() - startTime;
    const newX = easeInOutQuart(time, startX, distanceX, duration);
    const newY = easeInOutQuart(time, startY, distanceY, duration);
    if (time >= duration) {
      clearInterval(timer);
    }
    window.scroll(newX, newY);
  }, 1000 / 60); // 60 fps
};

// Listener for your button
document.querySelector('.scroll-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    smoothScrollTo(0, 0, 600); // Adjust the 600 to increase or decrease the time
});

// Hiển thị nút cuộn lên khi người dùng cuộn xuống một khoảng nhất định
window.addEventListener('scroll', function() {
    const scrollButton = document.querySelector('.scroll-to-top');
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollButton.style.display = "block";
    } else {
        scrollButton.style.display = "none";
    }
});
</script>


</body>
</html>
