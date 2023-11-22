<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <!--  -->
    <script src="script.js"></script>

</head>
<body>
    <div class="container">
        <div class="top mb">
            <div class="header">
                <div class="gioithieu">
                    <ul>
                        <li>
                            <a class="center" href="#"> <img src="image/a1.png">Về Trang sức DOJI</a>
                            <a class="center" href="#"> <img src="image/a2.png">Về hệ thống phân phối</a>
                            <a class="center" href="#"> <img src="image/a3.png">1800 1168</a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <img src="image/logo.png" alt="">
                </div>
                <div class="gioithieu2">
                    <ul class="ic_left">
                        <li>
                            <a class="center tk" href=""> <img src="image/a1.png">Tài khoản</a>
                            <ul class="sub_menu2">
                                <li><a href="index.php?act=dangnhap"><h5>Đăng nhập</h5></a></li>
                                <li><a href="index.php?act=thoat"><h5>Đăng xuất</h5></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="center" href="index.php?act=giohang"> <img src="image/a2.png">Giỏ hàng</a>
                        </li>
                    </ul>
                    <form class="timkiem">
                        <input type="text" placeholder="Tìm kiếm sản phẩm">
                        <a href="#"><input type="submit" value="Go"></a>
                        <hr>
                    </form>
                </div>
            </div>
            <hr class="mt10" style="width: 90%; margin: 0 auto; height: 0.5px; margin-top: 15px;">
            <div class="nav" id="myNav">
                <ul>
                    <li><a href="index.php"><h5>TRANG CHỦ</h5></a></li>
                    <li><a href="#"><h5>Nhẫn </h5></a>
                        <ul class="sub_menu">
                            <li><a href="#"><h5>Nam</h5></a></li>
                            <li><a href="#"><h5>Nữ</h5></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><h5>Dây chuyền </h5></a>
                        <ul class="sub_menu">
                        <li><a href="index.php?act=daychuyennam"><h5>Nam</h5></a></li>
                            <li><a href="#"><h5>Nữ</h5></a></li>
                           
                        </ul>
                    </li>
                    <li><a href="#"><h5>Mặt dây</h5></a>
                        <ul class="sub_menu">
                        <li><a href="index.php?act=daychuyennam"><h5>Nam</h5></a></li>
                            <li><a href="#"><h5>Nữ</h5></a></li>
                           
                        </ul>
                    </li>
                    <li><a href="#"><h5>Đồng hồ</h5></a>
                        <ul class="sub_menu">
                        <li><a href="index.php?act=daychuyennam"><h5>Nam</h5></a></li>
                            <li><a href="#"><h5>Nữ</h5></a></li>
                           
                        </ul>
                    </li>
                    <li><a href="#"><h5>Bông tai</h5></a>
                        <ul class="sub_menu">
                        <li><a href="#"><h5>Nam</h5></a></li>
                            <li><a href="#"><h5>Nữ</h5></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><h5>Vòng tay</h5></a>
                        <ul class="sub_menu">
                        <li><a href="#"><h5>Nam</h5></a></li>
                            <li><a href="#"><h5>Nữ</h5></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><h5>Liên Hệ</h5></a></li>
                    <li><a href="#"><h5>Giới thiệu</h5></a></li>
                
                </ul>
            </div>
        </div>
        <script>
            window.onscroll = function() {
                stickyNav();
            };

            var navbar = document.getElementById('myNav');
            var sticky = navbar.offsetTop;

            function stickyNav() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add('fixed');
                } else {
                    navbar.classList.remove('fixed');
                }
            }
        </script>
        
    
</body>