<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    </style>
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
                            <a class="center" href="index.php"> <img src="image/home4.jpg" >Về Trang sức DOJI</a>
                            <a class="center" href="#"> <img src="image/diachi.jpg">Về hệ thống phân phối</a>
                            <a class="center" href="#"> <img src="image/phone.jpg">1800 1168</a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <img src="image/logo.png" alt="">
                </div>
                <div class="gioithieu2">
                    <ul class="ic_left">
                        <li>
                            <a class="center tk" href=""> <img src="image/user.jpg">
                                <?php
                                    if(isset($_SESSION['user'])){
                                        echo "Xin chào: ".$_SESSION['user']['user'];
                                        if(isset($_SESSION['user'])&& ($_SESSION['user']['role']==1)){
                                            $tk = '
                                                 <li><a href="index.php?act=mybill"><h5>Đơn hàng của tôi</h5></a></li>
                                                 <li><a href="admin/index.php"><h5>Đăng nhập admin</h5></a></li>
                                                 <li><a href="index.php?act=thoat"><h5>Đăng xuất</h5></a></li>
                                                 
                                             ';
                                         }if(isset($_SESSION['user'])&& ($_SESSION['user']['role']==0)){
                                            $tk = '
                                                 <li><a href="index.php?act=mybill"><h5>Đơn hàng của tôi</h5></a></li>
                                                 <li><a href="index.php?act=thoat"><h5>Đăng xuất</h5></a></li>
                                             '; 
                                         }
                                    }else{
                                        echo "Tài khoản";
                                
                                        $tk = '
                                            <li><a href="index.php?act=dangnhap"><h5>Đăng nhập</h5></a></li>
                                            <li><a href="index.php?act=dangky"><h5>Đăng ký</h5></a></li>
                                        ';
                                        
                                    }

                                    
                                   
                                ?>
                            </a>
                            <ul class="sub_menu2">
                                <?php echo $tk ?>
                            </ul>
                        </li>
                        <li>
                            <?php
                                if(isset($_SESSION['mycart']) && is_array($_SESSION['mycart'])) {
                                    $csp = count($_SESSION['mycart']);
                                }else{
                                    $csp = 0;
                                }
                            ?>
                            <a class="center" href="index.php?act=giohang"> <img src="image/cart.jpg">Giỏ hàng(<?= $csp?>)</a>
                        </li>
                    </ul>
                    <form class="timkiem" action="index.php?act=timkiem" method="post">
                        <input type="text" placeholder="Tìm kiếm sản phẩm" name="kyw">
                        <input type="submit" value="Go" name="timkiem">
                        <hr>
                    </form>
                </div>
            </div>
            <hr class="mt10" style="width: 90%; margin: 0 auto; height: 0.5px; margin-top: 15px;">
            <div class="nav" id="myNav">
                <ul>
                    <li><a href="index.php"><h5>TRANG CHỦ</h5></a></li>
                    <li><a href="index.php?act=nhan"><h5>NHẪN </h5></a>
                        <ul class="sub_menu">
                            <li><a href="index.php?act=nhan&loai=NV&name=nhan"><h5>Vàng</h5></a></li>
                            <li><a href="index.php?act=nhan&loai=NKC&name=nhan"><h5>Kim Cương</h5></a></li>
                            <li><a href="index.php?act=nhan&loai=NDM&name=nhan"><h5>Đá Màu</h5></a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?act=daychuyen"><h5>DÂY CHUYỀN</h5></a>
                        <ul class="sub_menu">
                            <li><a href="index.php?act=daychuyen&loai=DCKC&name=day"><h5>Kim Cương</h5></a></li>
                            <li><a href="index.php?act=daychuyen&loai=DCDM&name=day"><h5>Đá Nàu</h5></a></li>
                            <li><a href="index.php?act=daychuyen&loai=DCNT&name=day"><h5>Ngọc Trai</h5></a></li>
                           
                        </ul>
                    </li>
                    <li><a href="index.php?act=dongho"><h5>ĐỒNG HỒ</h5></a>
                        <ul class="sub_menu">
                            <li><a href="index.php?act=dongho&loai=DHNA&name=dong"><h5>Nam</h5></a></li>
                            <li><a href="index.php?act=dongho&loai=DHNU&name=dong"><h5>Nữ</h5></a></li>
                           
                        </ul>
                    </li>
                    <li><a href="index.php?act=hoatai"><h5>HOA TAI</h5></a>
                        <ul class="sub_menu">
                            <li><a href="index.php?act=hoatai&loai=HTDM&name=tai"><h5>Đá Màu</h5></a></li>
                            <li><a href="index.php?act=hoatai&loai=HTKC&name=tai"><h5>Kim Cương</h5></a></li>
                           
                        </ul>
                    </li>
                    <li><a href="index.php?act=vongtay"><h5>VÒNG TAY</h5></a>
                        <ul class="sub_menu">
                            <li><a href="index.php?act=vongtay&loai=VTV&name=tay"><h5>Vàng</h5></a></li>
                           
                        </ul>
                    </li>
                    <li><a href="index.php?act=tintuc"><h5>TIN TỨC</h5></a></li>
                    <li><a href="index.php?act=contact"><h5>LIÊN HỆ</h5></a></li>
                    <li><a href="?act=gioithieu"><h5>GIỚI THIỆU</h5></a></li>
                
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
        <script lang="javascript">var __vnp = {code : 19726,key:'', secret : 'b11e9ba4756ae66f38797ce40636ebf6'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//core.vchat.vn/code/tracking.js?v=60017'; var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
        
    
</body>