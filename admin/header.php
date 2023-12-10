<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/sto.css">
</head>

<body>

    <div class="nav" id="myNav">
        <div class="header2">
            <div class="header1">
                <div class="logo">
                    <img src="../image/nhancuoi_kc1.jpg" alt="">

                </div>
                <div class="right">
                    <div class="timkiem">
                        <!-- ô tìm kiếm -->
                        <form action="index.php?quanly=timkiem" method="post">
                            <input type="text" name="search" placeholder="Tìm kiếm sản phẩm">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="user">
                   
                        <a href="index.php?act=exitadmin"><i class="fa-solid fa-right-from-bracket fa-2xl" style="color: #cbddfb;" > </i></a>
                    </div>
                </div>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=listdm">Danh Mục</a></li>
                    <li><a href=" index.php?act=listsp">Sản Phẩm</a></li>
                    <li><a href="index.php?act=dstk">Tài Khoản</a></li>
                    <li><a href="index.php?act=dsbl">Bình Luận</a></li>
                    <li><a href="?act=dsdh">Đơn Hàng</a></li>
                    <li><a href="?act=thongke">Thống Kê</a></li>
                    <li><a href="?act=listmasale">DisCount</a></li>


                </ul>
            </div>

        </div>


    </div>
    <script>
        function stickyNav() {
            var navbar = document.getElementById('myNav');
            var sticky = navbar.offsetTop;

            if (window.pageYOffset >= sticky) {
                navbar.classList.add('fixed');
            } else {
                navbar.classList.remove('fixed');
            }
        }
    </script>
</body>