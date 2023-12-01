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
      
        case 'contact':
            include "view/contact.php";
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
        case "bongtai":
          
            include "./view/menu/bongtai.php";
            break;
        case "vongtay":
            include "./view/menu/vongtay.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break; 
        case "giohang":
            include "./view/cart/viewcart.php";
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
                $soluong = 1 ;
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
        case 'mybill':
            $listbill = loadall_bill("",0);
            include "view/cart/mybill.php";
            break;
        case 'billconfirm':
            if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $iduser = 0;
                $name= $_POST['name'];
                $email= $_POST['email'];
                $address= $_POST['address'];
                $tel= $_POST['tel'];
                $pttt= $_POST['pttt'];
                $ngaydathang= date('h:i:sa d/m/Y');
                $tongdonhang=tongdonhang();
                $idbill = insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);
                // insert into cart : $session['mycart'] & idbill
                foreach($_SESSION['mycart'] as $cart){
                    insert_cart($_SESSION['user']['id'],$cart['0'],$cart['3'],$cart['1'],$cart['4'],$cart['5'],$cart['6'],$idbill);
                }
                $_SESSION['cart']=[];

            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "./view/cart/billconfirm.php";
            break; 
        case "daychuyen":
            if(isset($_GET['loai'])){
                $loai= $_GET['loai'];
            }else{
                $loai="";
            }
            if(isset($_GET['name'])){
                $name= $_GET['name'];
            }else{
                $name="";
            }

            $dc = locsp($loai,$name);
            include "./view/menu/daychuyen.php";
            break;
        case "nhan":
            if(isset($_GET['loai'])){
                $loai= $_GET['loai'];
            }else{
                $loai="";
            }
            if(isset($_GET['name'])){
                $name= $_GET['name'];
            }else{
                $name="";
            }
            
            $dc = locsp($loai,$name);
            include "./view/menu/nhanbig.php";
            break;
        case "timkiem":
                include "./view/timkiem.php";
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