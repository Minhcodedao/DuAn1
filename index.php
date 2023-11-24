<?php
session_start();
include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/danhmuc.php";
include "./model/taikhoan.php";
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
                $email = $_POST['emaildk'];
                $user= $_POST['userdk'];
                $pass= $_POST['passdk'];
                insert_taikhoan($email,$user,$pass);
                $thongbao = "Đã đăng ký thành công! Vui lòng đăng nhập để thực hiện các chức năng khác!";
            }
            include "./view/taikhoan/dangky.php";
            break; 
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                $user= $_POST['userdn'];
                $pass= $_POST['passdn'];
                $checkuser =checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user']= $checkuser;
                    // $thongbao = "Bạn đã đăng nhập thành công";
                    header('location: index.php');
                }else{
                    $thongbao = "Tài khoản không tồn tại! VUi lòng kiểm tra hoặc đăng ký!";
                }
                $thongbao = "Đã đăng ký thành công! Vui lòng đăng nhập để thực hiện các chức năng khác!";
            }
            include "./view/taikhoan/dangnhap.php";
            break; 
        case 'thoat':
            session_unset();
            header('location: index.php');
            break; 
        case "giohang":
            include "./view/cart/cart.php";
            break;
        case "nhanbig":
            include "./view/menu/nhan/nhanbig.php";
            break;
        default:
            include "./view/home.php";
            break;
    }
}else{
    include "./view/home.php";
}


?>