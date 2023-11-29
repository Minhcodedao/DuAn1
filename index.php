<?php
ob_start();
session_start();
include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/danhmuc.php";
include "./model/taikhoan.php";
include "./model/cart.php";
include "./view/header.php";
include "./global.php";
if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spkc = loadsp_kc();
$dsdm = loadall_danhmuc();
$dstop10 =loadall_sanpham_top10();
$dstop5 =loadall_sanpham_top5();
$nhan = select_nhan();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'taikhoan':
            include "view/taikhoan/dkydn.php";
            break;
        case 'sanphamct':
            if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                $imgsp = load_image($id);
                extract($onesp);
                $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
                include "view/chitiet.php";
            }else{
                include "./view/home.php";
            }
            break;
        case 'sanpham':
            if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw ="";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                $iddm = $_GET['iddm'];
            }else{
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw,$iddm);
            $tendm=load_ten_dm($iddm);
            include "./view/sanpham.php";
            
            break;
        case 'daychuyennam':
            $listsanpham = loadall_sanpham_dcn();
            include "./view/daychuyennam.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break; 
        case 'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'])){
                $email = $_POST['email'];
                $user= $_POST['user'];
                $pass= $_POST['pass'];
                $tel= $_POST['tel'];
                $address= $_POST['address'];
                insert_taikhoan($email,$user,$pass,$tel,$address);
                $thongbao = "Đã đăng ký thành công! Vui lòng đăng nhập để thực hiện các chức năng khác!";
            }
            include "./view/taikhoan/dangky.php";
            break; 
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                $user= $_POST['user'];
                $pass= $_POST['pass'];
                $checkuser =checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user']= $checkuser;
                    header('location: index.php');
                }else{
                    $thongbao2 = "Tài khoản không tồn tại! VUi lòng kiểm tra hoặc đăng ký!";
                }
            }
            include "./view/taikhoan/dangnhap.php";
            break; 
        case "thanhtoan":
            include "./view/cart/thanhtoan.php";
            break;

        case 'thoat':
            session_unset();
            header('location: index.php');
            break; 
        case "giohang":
            include "./view/cart/viewcart.php";
            break;
        case "nhan":
            include "./view/menu/nhanbig.php";
            break;
        case "daychuyen":
            include "./view/menu/daychuyen.php";
            break;
        case "dongho":
            include "./view/menu/dongho.php";
            break;
        case 'addtocart':
            if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                $id= $_POST['id'];
                $name= $_POST['name'];
                $masp= $_POST['masp'];
                $image= $_POST['image'];
                $price= $_POST['price'];
                $soluong =1;
                $ttien = $soluong * $price;
                $spadd = [$id,$name,$masp,$image,$price,$soluong,$ttien];
                array_push($_SESSION['mycart'],$spadd);
            }
            include "./view/cart/viewcart.php";
            break;
        case 'delcart':
            if(isset($_GET['idcart'])&&($_GET['idcart']>=0)){
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart']=[];
            }
            header('location: index.php?act=viewcart'); 
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/thanhtoan.php";
            break;
        case "daychuyen":
            include "./view/menu/daychuyen.php";
            break;
        default:
            include "./view/home.php";
            break;
    }
}else{
    include "./view/home.php";
}
include "./view/footer.php";



?>