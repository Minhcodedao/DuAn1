<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/cssQ.css">
</head>

<body class="admin-header">

    <!-- header -->
    <header class="header1">
        <img class="image" src="../image/logotachnen.png" alt="" width="150px" height="120px">
        <div class="tk">
            <form action="index.php?act=listsp" method="post">
                <div class="timkiem">
                    <!-- tao ô tìm kiếm -->
                    <input class="custom-input" name="kyw" type="text" placeholder="Tìm kiếm">
                    <button class="custom-button" type="submit" name="listok">Tìm kiếm</button>
                </div>
            </form>
            <div class="profile">
                <ul> <i class="bi bi-person-fill custom-icon1"></i>

                    <li>
                        <a href="index.php">Đăng xuất</a>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!--  box left-->
    <header class="header" role="banner">
        <div class="nav-wrap">
            <nav class="main-nav" role="navigation">
                <!-- tên user -->
                <div class="user">
                    <div class="user-info">
                        <span class="user-name">Nguyễn Hải Quân</span>
                    </div>
                <ul class="unstyled list-hover-slide">
                 
                    <li><a href="index.php?act=listdm"> Danh Mục</a></li>
                    <li><a href="index.php?act=listsp">Sản Phẩm</a></li>
                    <li><a href="index.php?act=dsbl">Bình luận</a></li>
                    <li> <a href="index.php?act=dstk">Tài khoản</a></li>
                    <li><a href="#">Thống kê</a></li>
                    <li><a href="#">Đơn hàng</a></li>
                </ul>
            </nav>

        </div>
    </header>